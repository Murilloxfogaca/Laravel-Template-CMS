/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/masks.js ***!
  \*******************************/
$(document).ready(function () {
  $('.cnpj').inputmask('99.999.999/9999-99');
  $('.cpf').inputmask('999.999.999-**');
  $('.telefone').inputmask('(99) 99999-9999');
  $('.real').inputmask({
    alias: 'numeric',
    radixPoint: ',',
    groupSeparator: '.',
    autoGroup: true,
    digits: 2,
    digitsOptional: false,
    prefix: 'R$ ',
    rightAlign: false,
    placeholder: '0,00'
  });
  $('.percent').inputmask({
    alias: 'numeric',
    radixPoint: '.',
    groupSeparator: ',',
    autoGroup: true,
    digits: 2,
    digitsOptional: false,
    suffix: '%',
    min: 0,
    max: 100,
    rightAlign: false
  });
});
/******/ })()
;