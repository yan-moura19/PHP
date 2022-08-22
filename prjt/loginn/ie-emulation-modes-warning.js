// AVISO PRÉVIO!! NÃO UTILIZE NENHUM DESTA JAVASCRIPT
// É só lixo para os nossos docs!
// ++++++++++++++++++++++++++++++++++++++++++
/ *!
 * Copyright 2014-2015 Twitter, Inc.
 *
 * Licenciado sob a licença Creative Commons Attribution 3.0 Unported. Para
 * detalhes, consulte https://creativecommons.org/licenses/by/3.0/.
 * /
// Destinado a evitar que relatórios de bugs de falso positivo sobre o Bootstrap não funcionem corretamente em versões antigas do IE, devido ao fato de as pessoas testarem usando os modos de emulação não confiáveis ​​do IE.
(function () {
  'use strict';

  função emulatedIEMajorVersion () {
    var groups = / MSIE ([0-9.] +) /. exec (window.navigator.userAgent)
    if (groups === null) {
      return null
    }
    var ieVersionNum = parseInt (grupos [1], 10)
    var ieMajorVersion = Math.floor (ieVersionNum)
    return ieMajorVersion
  }

  function actualNonEmulatedIEMajorVersion () {
    // Detecta a versão atual do IE em uso, mesmo se estiver em um modo de emulação mais antigo do IE.
    // Documentos de compilação condicional JavaScript do IE: https://msdn.microsoft.com/library/121hztk3%28v=vs.94%29.aspx
    // @cc_on docs: https://msdn.microsoft.com/library/8ka90k2e%28v=vs.94%29.aspx
    var jscriptVersion = new Função ('/ * @ cc_on retornar @_jscript_version; @ * /') () // jshint ignorar: linha
    if (jscriptVersion === indefinido) {
      retornar 11 // IE11 + não no modo de emulação
    }
    if (jscriptVersion <9) {
      return 8 // IE8 (ou menor; não testei no IE <8)
    }
    retornar jscriptVersion // IE9 ou IE10 em qualquer modo, ou IE11 no modo não-IE11
  }

  var ua = window.navigator.userAgent
  if (ua.indexOf ('Opera')> -1 || ua.indexOf ('Presto')> -1) {
    retornar // Opera, que pode fingir ser IE
  }
  var emulado = emuladoIEMajorVersion ()
  if (emulado === null) {
    return // Não é IE
  }
  var nonEmulated = actualNonEmulatedIEMajorVersion ()

  if (emulado! == não emulado) {
    window.alert ('ATENÇÃO: Você parece estar usando o IE' + nonEmulated + 'no modo de emulação do IE' + emulado + '. \ nOs modos de emulação podem se comportar de forma significativamente diferente das versões antigas do IE. \ nPLEASE DON \' T FILE BOOTSTRAP BUGS baseado em testes nos modos de emulação do IE! ')
  }
}) ();