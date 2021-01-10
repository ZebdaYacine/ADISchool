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
	alert("test");
	for (var i = 0; i < leng_th ; i++) {
		
		Tag_table = "" ; 
		Tag_table += "<tr><td>"+json_data2[i].id+"</td>";  
		Tag_table += "<td>"+json_data2[i].categoryName+"</td>";
		Tag_table += '<td><a href="levelUseCase.php?id=1&amp;action=update">update</a></td>';
		Tag_table += '<td><a href="levelUseCase.php?id=1&amp;action=delete">delete</a></td>'; 
		Tag_table += "</tr>"
		table.append(Tag_table);
	}
}

/*<td>1</td>
                        <td>test </td>
                        <td>20</td>
                        <td><a href="levelUseCase.php?id=1&amp;action=update">update</a></td>
                        <td><a href="levelUseCase.php?id=1&amp;action=delete">delete</a></td> */ 
function Prepare_table(id,URL) {

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
                                // Modal.modal('hide');
                            }
                        });


}

Prepare_table('leveles','categoryController.php');