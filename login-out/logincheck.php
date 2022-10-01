<?php

session_start();
if(isset($_POST["otpsubmit"])){

include"../Helper/http.php";


$otp=$_GET['otp'];
$n =$_GET['name'];
$otpin=$_POST['otpin'];
if($otp==$otpin){
	$_SESSION["username"]="$n";
	Helper\Http\Http::redirect("../index.php","alert=loginsuccess");
	//header("Location: ../index.php?alert=loginsuccess&username=$n");
}elseif($otp!=$otpin){

	Helper\Http\Http::redirect("../index.php","alert=loginfeil");
	
}
}





?>