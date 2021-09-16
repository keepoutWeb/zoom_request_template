function Error(id) {
    $(id).css('border', '1px solid #ff0000');
}

function Correct(id) {
    $(id).css('border', '1px solid #ccc');
}

$('form #btnnext').on('click', function(e) {
    let page = "{$info['page']}"
    let is_check = true

    if (page == 1) {
        let fullname = $('#fullname').val().trim()
        let office_dept_college = $('#office_dept_college').val().trim()
        let position_designation = $('#position_designation').val().trim()

        if (fullname.length == 0) { Error("#fullname"); is_check = false; } else { Correct("#fullname") }
        if (office_dept_college.length == 0) { Error("#office_dept_college"); is_check = false; } else { Correct("#office_dept_college") }
        if (position_designation.length == 0) { Error("#position_designation"); is_check = false; } else { Correct("#position_designation") }
    } else if (page == 2) {
        let email = $('#email').val().trim()
        let date_picker = $('#date_picker').val().trim()
        let date_picker_to = $('#date_picker_to').val().trim()
        let timepicker = $('#timepicker').val().trim()
        let topic = $('#topic').val().trim()
        let no_participant = $('#no_participant').val().trim()

        if (email.length == 0) { Error("#email"); is_check = false; } else { Correct("#email") }
        if (date_picker.length == 0) { Error("#date_picker"); is_check = false; } else { Correct("#date_picker") }
        if (date_picker_to.length == 0) { Error("#date_picker_to"); is_check = false; } else { Correct("#date_picker_to") }
        if (timepicker.length == 0) { Error("#timepicker"); is_check = false; } else { Correct("#timepicker") }
        if (topic.length == 0) { Error("#topic"); is_check = false; } else { Correct("#topic") }
        if (no_participant.length == 0) { Error("#no_participant"); is_check = false; } else { Correct("#no_participant") }
    }

    if (is_check == false)
        e.preventDefault();
})

$('#modal-preview').on('show.bs.modal', function (e) {
    $('#prev_fullname').val($('#fullname').val().trim())
    $('#prev_office_dept_college').val($('#office_dept_college').val().trim())
    $('#prev_position_designation').val($('#position_designation').val().trim())
    $('#prev_email').val($('#email').val().trim())
    $('#prev_date_picker').val($('#date_picker').val().trim())
    $('#prev_date_picker_to').val($('#date_picker_to').val().trim())
    $('#prev_timepicker').val($('#timepicker').val().trim())
    $('#prev_topic').val($('#topic').val().trim())
    $('#prev_no_participant').val($('#no_participant').val().trim())
})

$('#modal-preview').on('hidden.bs.modal', function () {
    $("#form").trigger( "reset" );
})

$('#accept').on('click', function() {
    if ($("#rterm").is(":checked")) {
        $('#modal-term').modal('toggle');
    } else {
        alert("Please check the term & condition.")
    }
})

$(document).ready(function() {
    $('#modal-term').modal('show');
});