function Prepare_Del(id, f_name) {
    $('#FormationVal').text(f_name);
    $('#IdFormation').val(id);
}

function Prepare_Modify(id, f_name) {
    $('#ModFname').val(f_name);
    $('#ModId').val(id);
}

function Prepare_Modify_Level(id, l_name, nbr) {
    $('#ModLname').val(l_name);
    $('#Modnbr').val(nbr);
    $('#ModId').val(id);
}

function Submit_me(id) {
    $("#" + id).submit();
}

function show_StudnetModel() {
    $("#insertModale").modal('hide');
    $("#sss").modal('show');
}

function show_inscri() {
    $("#sss").modal('hide');
    $("#insertModale").modal('show');
}

function generate() {
    $.ajax({
        url: "codeGenerator.php",
        type: 'GET',
        dataType: 'html',
        beforeSend: function () {
        },
        success: function (data) {
            $('#code').val(data);   
        }
    });
}



