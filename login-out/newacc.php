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
<body>

<button onclick="history.back()" class="btn btn-primary m-4">back</button>
<div class="col-sm-8 text-center container border">
<form class="px-4 py-3 " action="loginotp.php" method="POST"  enctype="multipart/form-data">
<div class="mb-3">

<input type="text" class="form-control" id="name" name="name" placeholder="user name" value="">
</div>

<div class="mb-3">
<input type="email" class="form-control" id="email" name="email" value="@gmail.com">
</div>
<div class="mb-3">
<div class="input-group">
<input type="password" class="form-control" id="password" name="password" placeholder="Password">
<span class="input-group-text bg-light" id="eyespan">
<i class="fas fa-eye" id="eyeicon"></i>
</span>
</div>
</div>
<div class="mb-3">
<div class="input-group">
<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Comfirm Password">

</div>
</div>



<button onclick="login()" type="submit" name="newaccsubmit" class="btn btn-primary ">Sign in</button>
</form>
</div>
<script>





var pass=document.getElementById('password');
var cpass=document.getElementById('cpassword')
var eye=document.getElementById('eyespan');
var eyeicon =document.getElementById('eyeicon');

eye.onclick=()=>{
	if(pass.type=="password"){
		pass.type='text';
		cpass.type="text";
		eyeicon.classList.remove('fa-eye');
		eyeicon.classList.add('fa-eye-slash');
	}else{
		pass.type='password';
		cpass.type="password";
		eyeicon.classList.add('fa-eye');
		eyeicon.classList.remove('fa-eye-slash');
	}
}



</script>
<script src="my/my.js"></script>
<script src="../bootstrap-5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>