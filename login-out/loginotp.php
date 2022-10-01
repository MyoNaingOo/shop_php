<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--link href="bootstrap-5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"-->
<link href="../my/my.css" rel="stylesheet" type="text/css">
<!--link href="fontawesome-free-6.1.1/css/all.css" rel="stylesheet" type="text/css"-->
<link href="../my/mycl.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Login</title>
</head>
<body class="center">
<div class="d-no ">
<?php
include"../Helper/usern.php";
include"../Helper/sendmail.php";
include"../Helper/Http.php";

$email= $_POST["email"];
$pass = $_POST["password"];
$otp=rand(1,999999);
$to="myonaingoo623@gmail.com";
$subject="MNO Shop";
$mass="Yor otp is".$otp;
sendmail($to,$subject,$mass);

if( isset($_POST["newaccsubmit"])){
	$n=$_POST['name'];
	
}elseif(isset($_POST["loginsubmit"])){
	$n=$user->check($email,$pass);
	
	
}

?>
</div>


<div class="col-sm-8 mt-5 d-inline text-center p-2 container border otpin">

<form class="px-4 py-3 " action="logincheck.php?otp=<?= $otp ?>&name=<?= $n ?>" method="POST"  enctype="multipart/form-data">
<div class="mb-3">
<label for="otpin" class="form-label">OTP</label>
<input type="tel" class="form-control" id="otpin" name="otpin">
</div>


<button  type="submit" name="otpsubmit" class="btn btn-primary float-end">Send</button>
</form>
</div>




<script src="my/my.js"></script>
<script src="../bootstrap-5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 