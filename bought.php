<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--link href="bootstrap-5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"-->
<link href="my/my.css" rel="stylesheet" type="text/css">
<!--link href="fontawesome-free-6.1.1/css/all.css" rel="stylesheet" type="text/css"-->
<link href="my/mycl.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
	
</style>
<title>MNO Shop</title>
</head>
<body >
<div class="loaderp center" id="loaderp">
<img src="imgs/loader.gif" class="loaderimg">

</div>
<?php

include"autoload.php";
include "login-out/logincheck.php";
include "Helper/usern.php";




?>
<div class="home" id="home">
<script>
var home=document.getElementById("home")
home.style.opacity=0
</script>

<nav class="navbar bgn navbar-expand-lg mybg-light w-100 navbar-dark sticky-top">
<div class="container-fluid ">
<a class="navbar-brand title " href="#">MNO <span>Shop</span></a>


<a class="btn border  d-inline d-sm-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
 <span class="navbar-toggler-icon text-light"></span>
</a>
<form action="Helper/search.php" method="POST">
<div class="container m-3 ">
<input type="search" name="search-data" class="search rounded-pill float-start border out-none p-2" list="search-data" />
<button class="search-btn  rounded-pill out-none border" name="search-submit"><i class="fas fa-magnifying-glass"></i></button>
<datalist id="search-data">
<?php foreach($products as $product): ?>
<option value="<?= $product["proname"] ?>">
<option value="<?= $product["sellname"] ?>">
<option value="<?= $product["brand"] ?>">
<?php endforeach ?>
</datalist>
</div>
</form>


<div class="d-none d-sm-inline">
<ul class="nav sm-nav justify-content-center">
<li class="nav-item">
<a class="nav-link border" aria-current="page" href="index.php"><i class="fas fa-house"></i> HOME</a>
</li>
<li class="nav-item">
<a class="nav-link border" href="#"><i class="fas fa-cart-shopping" ></i>BOUGHT</a>
</li>
<li class="nav-item">
<div class="dropdown">
<button class="nav-link out-none border " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
<i class="fas fa-user"></i>
<?php if(isset($_SESSION["username"])){
 echo $_SESSION['username'];
 
}else{
 echo"Login";
}
?>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
<li><a class="dropdown-item" href="login-out/login.php">login</a></li>
<li><a class="dropdown-item" href="login-out/logout.php">logout</a></li>
</ul>
</div>
</li>
<li class="nav-item">
<a class="nav-link border" href="#"><i class="fas fa-gear"></i> MENU</a>
</li>
<button class="nav-item border px-3 " onclick="daf()"><i class="fas fa-moon" id="dlicon" ></i></button></ul>
</div>
</div>
</nav>


<div class="offcanvas d-inline d-sm-none offcanvas-start container nbo mybg-light w-50" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
<div class="offcanvas-header title">
<h5 class="offcanvas-title " id="offcanvasExampleLabel">MNO Shop</h5>
<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body ">



<ul class="nav  flex-column">
<li class="nav-item my-2">
<a class="nav-link border" aria-current="page" href="index.php"><i class="fas fa-house"></i> HOME</a>
</li>
<li class="nav-item">
<a class="nav-link border my-2" href="#"><i class="fas fa-cart-shopping" ></i>BOUGHT</a>
</li>
<li class="nav-item">
<div class="dropdown">
<button class="nav-link out-none border " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
<i class="fas fa-user"></i>
<?php if(isset($_SESSION["username"])){
 echo $_SESSION['username'];
 
}else{
 echo"Login";
}
?>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
<li><a class="dropdown-item" href="login-out/login.php">login</a></li>
<li><a class="dropdown-item" href="login-out/logout.php">logout</a></li>
</ul>
</div>
</li>
<li class="nav-item">
<a class="nav-link border my-2" href="#"><i class="fas fa-gear"></i> MENU</a>
</li>
<button class="nav-item btn border my-2" onclick="daf()"><i class="nav-link fas fa-moon " id="ldicon"></i></button>
</ul>


</div>
</div>


<?php foreach($ubp as $user): ?>
<?php if($_SESSION["username"]==$user["name"]): ?>
<?php foreach($user["boughtpro"] as $pro): ?>
<?php foreach($products as $product): ?>
<?php if($product["id"]==$pro): ?>
<div class="container-fluid row border m-3">
<div class="col-4">
<img class="boughtsimg my-3 " src="logo.jpg"/>
</div>
<div class="col-8">
<p><?= $product["proname"] ?></p>
<p><?= substr($product["promess"],0,200); ?></p>
</div>
</div>

<?php endif ?>
<?php endforeach ?>
<?php endforeach ?>


<?php endif ?>
<?php endforeach ?>










<?php

if (isset($_GET["alert"])) : ?>
	<script>
	alert("<?= $_GET["alert"]; ?>");
	</script>
<?php endif ?>


<div class="btn cart-plus btn-danger m-3 float-end rounded-pill">
<a href="Helper/prosell.php" class="nav-link"><i class="fas fa-cart-plus"></i></a>
</div>









<div class="contect  row" id="contect">
<div class="col-12 center">
<div class="dropdown">
<button class="btn btn-outline-primary my-2  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
MMK/$
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
<li><a class="dropdown-item" href="bought.php?money=MMK">MMK</a></li>
<li><a class="dropdown-item" href="bought.php?money=$">USD($)</a></li>
</ul>
</div>
</div>
<?php include"Helper/contect.php"; ?>


</div>

</div>



<script src="my/my.js"></script>
<script src="my/jquery-3.6.0.js"></script>
<script>


window.addEventListener('load', loadloader);
var loaderp=document.getElementById("loaderp");
function loadloader(){
 loaderp.style.display="none"
 home.style.opacity=1
 }
 


</script>

<script src="bootstrap-5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>