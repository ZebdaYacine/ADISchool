<?php 
/**
 * 
 */


class Login {

	public function hash_pass($pwd) {

		$pepper = "just rendome salt thing for making the hash harder ";
		$pwd_peppered = hash_hmac("sha256", $pwd, $pepper);
		$pwd_peppered = md5($pwd_peppered);
		$pwd_peppered = hash_hmac("sha256", $pwd_peppered, $pepper);
		$pwd_peppered = md5($pwd_peppered);
		
		return $pwd_peppered;

	}
}
 $Login_ = new Login() ;
 $hash_passtest = $Login_->hash_pass("1234");
 echo $hash_passtest;
 ?>