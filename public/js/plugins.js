/*
 *Validações de Formulário com Tooltip Bootstrap no Select2
 */
$('.select2').select2()

$('.select2').tooltip({
    title: function() {
        return $(this)
            .prev()
            .attr("title")
    },
    placement: "auto"
})

/*
 * Alterna máscara de telefone (9º dígito)
 */
var phoneMask = function(val) {
        return val.replace(/\D/g, '').length === 11 ?
            '(00) 00000-0000' :
            '(00) 0000-00009'
    },
    pOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(phoneMask.apply({}, arguments), options)
        }
    }

/**
 * Máscaras para inputs
 */
$('.time').mask('00:00')
$('.zip-code').mask('00000-000')
$('.cpf').mask('000.000.000-00')
$('.insc-est').mask('00000000-00')
$('.code-report').mask('AA 00-0000')
$('.cnpj').mask('00.000.000/0000-00')
$('.phone').mask(phoneMask, pOptions)

$('.date').mask('00/00/0000')
$('.datepicker').mask('00/00/0000')
$('.datepicker').datepicker({ autoclose: true, format: "dd/mm/yyyy", todayBtn: true, language: "pt-BR", todayHighlight: true })

$('.money').maskMoney({
    prefix: 'R$ ',
    allowNegative: true,
    thousands: '.',
    decimal: ',',
    affixesStay: false,
})

$('.money-not-prefix').maskMoney()

$('.percentage').maskMoney({
    suffix: ' %',
    allowNegative: true,
    thousands: '.',
    decimal: '.',
    affixesStay: false,
})

$('.decimal').maskMoney({
    suffix: ' ',
    allowNegative: true,
    thousands: '',
    decimal: '.',
    affixesStay: false
})

$('.document_number').mask('000.000.000-00')

/*
 * Digitação somente números
 */
jQuery('.number').keyup(function() {
    this.value = this.value.replace(/[^0-9\.]/g, '')
})

$(function() {
    $('[data-toggle="tooltip"]').tooltip()

    $('a[data-toggle="tab"]').on('shown.bs.tab', event => {

        let tabId = $(event.target).attr('href').split('#tab-')[1]

        let pathUrl = document.location.pathname

        if (tabId == 'default') {
            history.replaceState('', '', pathUrl)
            return false
        }

        history.replaceState('', '', `${pathUrl}?tab=${tabId}`)
    })
})

