<?php
//every action must be enter in this 
// if (IsAuth()) {}
// else 
//


function IsAuth()
{
	Global $GlobalPath; 
	session_start();
	if (isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") return true ;
	
	header("location:$GlobalPath/useCases/loginUseCase/login.php");
}

function IsPrivileged($action){
	$prev_table= [
		"0"=>"777",
		"1"=>["addformation","dellformation","modcureentuser"]
	];	
	
	if (isset($_SESSION['sess_grade']) && isset($_SESSION['sess_grade']) != ""){
		if ($prev_table[$_SESSION['sess_grade']] == "777") return $action;
		if (in_array($action,$prev_table[$_SESSION['sess_grade']])) return $action; 
		return "This action is not prevelaged To current user";
		
	}
}

	function ErrorType($Type,$String) {
		
		if(empty($String)) {
		$errorMsg = "empty data !!";
		$error = ["error"=>true,"data"=>$errorMsg];
		$out = json_encode($error);
		echo $out;
		exit ;	
		}
		if ($Type == 0) { //for int validate

                    if (!filter_var($String, FILTER_VALIDATE_INT)) {
                    	
                        $errorMsg = " Vous n'avez qu'à saisir des chiffres";
                        $error = ["error"=>true,"data"=>$errorMsg];
						$out = json_encode($error);
						echo $out;
						exit ;
                    }
                }
           elseif ($Type == 1)  { //for string validate 
            		//this regex verify onli english !
                    if(!preg_match('/^[a-zA-Z_][a-zA-Z0-9\s_]*$/',$String)) {
                        $errorMsg = "Vous n'avez qu'à saisir des lettres";
                        $error = ["error"=>true,"data"=>$errorMsg];
						$out = json_encode($error);
						echo $out;
						exit ;
                    } //[a-zA-Z]\w*
                }
        



			
	return 0;
	}


?>
