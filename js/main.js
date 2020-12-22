function Prepare_Del(id,f_name) {
	$('#FormationVal').text(f_name);
	$('#IdFormation').val(id);
}	

function Prepare_Modify(id,f_name) { 
	$('#ModFname').val(f_name);
	$('#ModId').val(id);


}

function Submit_me(id) {	
	// var id = "form#"+idfome;
	// document.getElementById('ModForm').submit();
	$("#"+id).submit();
}

function Send_PostRequest(id,URL) {
	Modal = $("#AddCModal");
	Form_ = $("#"+id); 
	Form_child = Form_.serializeArray(); 
	Error_inp = false ; 
	for (var i = 0 ; i < Form_child.length; i++) {
		
			if (Form_child[i].value  == '') {
				Name = String(Form_child[i].name);
				msg = document.getElementsByName(Form_child[i].name)[0]
				Error_inp = true ; 
					
				alert(msg.getAttribute('msg')+' est recommandées');
				
				break ; 
			}
		
	}

	if( !Error_inp) {
		
		$.ajax({
                            url: URL,
                            method: "POST",
                            cache: false,
                            data: Form_.serialize(),
                            beforeSend: function () {
                                $('#insert').val("Ajoute...");
                            },
                            success: function (data) {
                                alert(data);
                                Modal.modal('hide');
                            }
                        });


	}
}