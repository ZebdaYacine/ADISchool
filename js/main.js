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