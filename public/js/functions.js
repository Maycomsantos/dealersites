// Custom Functions

function logout() {
    event.preventDefault()
    document.getElementById('logout-form').submit()
}

function confirmDelete(itemId) {
    Swal.fire({
        title: 'Atenção',
        text: 'Deseja realmente excluir o registro selecionado?',
        type: 'warning',
        input: 'text',
        inputPlaceholder: 'Informe o motivo',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#aaa',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Sim, excluir!',
        reverseButtons: true,
        preConfirm: motive => {
            if (!motive) {
                $('.swal2-input').addClass('swal2-inputerror')
                return false
            }
        },
    }).then(result => {

        if (! result.value) return false

        $('#btn-delete-' + itemId)
            .prepend(`<input type="hidden" name="motive" value="${result.value}" />`)
            .submit()
    })
}

function findCities(stateId, selCities='#select-cities') {

    $(selCities).empty().select2('val', '')

    if ($('#select-states').val() == '') {
        return false
    }

    $.get(`${baseUrl}/states/${stateId}/cities`, ({ data }) => {
        $(selCities).append(
            data.map(({ id, name }) => `<option value=${id}>${name}</option>`)
        )
    })
}


function toUpper(input) {
    var start = input.selectionStart
    input.value = input.value.toUpperCase()
    input.selectionStart = input.selectionEnd = start
}

function toLower(input) {
    var start = input.selectionStart
    input.value = input.value.toLowerCase()
    input.selectionStart = input.selectionEnd = start
}
