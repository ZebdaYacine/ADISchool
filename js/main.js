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
                                // alert(data);
                                Modal.modal('hide');
                                Create_table('leveles',data);
                            }
                        });


	}
}

function Create_table(id,data) {
	var json_data = JSON.parse(data);
	json_data2 = JSON.parse(json_data.data);
	var table = $('#'+id);
	var leng_th = json_data2.length;
	var Tag_table = "" ; 
	var j = 1;  
	for (var i = 0; i < leng_th ; i++) {
		
		Tag_table = "" ; 
		Tag_table += "<tr><td>"+j+"</td>";  
		Tag_table += "<td>"+json_data2[i].categoryName+"</td>";
		Tag_table += "<td>0</td>";
		Tag_table += "<td><a href='#'><i title='delete' class='fas fa-trash-alt' onclick=Dell_C("+json_data2[i].id+",'categoryController.php')></i></a></td>";
		Tag_table += "<td><a href='#'><i title='edit' class='fas fa-edit' onclick=alert(1)></i></a></td>"; 
		Tag_table += "</tr>";

		table.append(Tag_table);
		j++; 
	}
}


function Prepare_table(id,URL) {
Modal = $("#AddCModal");
$.ajax({
                            url: URL,
                            method: "POST",
                            cache: false,
                            data: "action=Get_C",
                            beforeSend: function () {
                                $('#insert').val("Ajoute...");
                            },
                            success: function (data) {
                                Create_table(id,data);
                                Modal.modal('hide');
                            }
                        });


}
function Dell_C(id,URL) {

$.ajax({
                            url: URL,
                            method: "POST",
                            cache: false,
                            data: "action=Dell_C&ID="+id,
                            beforeSend: function () {
                                $('#insert').val("Deleting...");
                            },
                            success: function (data) {
                               data = JSON.parse(data)
                               if (data.data) {
                               	
                               	$('#Tcategory').empty(); 
                               	Prepare_table('Tcategory',URL);
                               }
                            }
                        });


}


Prepare_table('Tcategory','categoryController.php');