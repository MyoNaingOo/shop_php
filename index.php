<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
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
<body class="lightmode">
<div class="loaderp center" id="loaderp">
<img src="imgs/ploader.gif" class="loaderimg">

</div>
<?php

include"autoload.php";
include"Helper/Http.php";
include "login-out/logincheck.php";
include "Helper/usern.php";



?>
<div class="home" id="home">
<script>
var home=document.getElementById("home")
home.style.display="none"
</script>

<nav class="navbar  navbar-expand-lg mybg-light w-100 sticky-top">
<div class="container-fluid ">
<a class="navbar-brand title " href="#">MNO <span>Shop</span></a>
<a class="btn border  d-inline d-sm-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
 <span class="navbar-toggler-icon text-light"></span>
</a>
<form action="Helper/search.php" method="POST">
<div class="container m-3 ">
<input type="search" name="search-data" class="search rounded-pill float-start border p-2" list="search-data" />
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
<a class="nav-link border" aria-current="page" href="#"><i class="fas fa-house"></i> HOME</a>
</li>
<li class="nav-item">
<a class="nav-link border" href="bought.php"><i class="fas fa-cart-shopping" ></i>BOUGHT</a>
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
<button class="nav-item border px-3 " onclick="daf()"><i class="fas fa-moon" id="dlicon" ></i></button>

</ul>
</div>
</div>
</nav>


<div class="offcanvas d-inline d-sm-none offcanvas-start container nbo w-50" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
<div class="offcanvas-header title">
<h5 class="offcanvas-title " id="offcanvasExampleLabel">MNO Shop</h5>
<button type="button" class="btn-close btn " data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body ">



<ul class="nav  flex-column">
<li class="nav-item my-2">
<a class="nav-link border" aria-current="page" href="#"><i class="fas fa-house"></i> HOME</a>
</li>
<li class="nav-item">
<a class="nav-link border my-2" href="bought.php"><i class="fas fa-cart-shopping" ></i>BOUGHT</a>
</li>
<li class="nav-item">
<div class="dropdown">
<button class="nav-link w-100 btn border my-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
<button class="nav-item daf btn border my-2" onclick="daf()"><i class="nav-link fas fa-moon " id="ldicon"></i></button>
</ul>


</div>
</div>
<div class="container-fluid row ">
<div class="col-12">
<p class="text-primary mt-3">HOME></p>
<a class="btn border  float-end filter" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvasExample">
<i class="fas fa-filter"></i>
</a>
</div>
</div>

<div class="offcanvas offcanvas-start container-fluid nbo  w-75" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasExampleLabel">
<div class="offcanvas-header title">
<h5 class="offcanvas-title " id="offcanvasExampleLabel">Fitter</h5>
<button type="button" class="btn-close btn " data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body center" >

<form action="Helper/search.php" method="POST">
<div class="container-fluid m-3 ">
<input type="search" name="search-data" class="form-control border col-12 rounded-pill p-2" list="search-data" />
<datalist id="search-data">
<?php foreach($products as $product): ?>
<option value="<?= $product["proname"] ?>">
<option value="<?= $product["sellname"] ?>">
<option value="<?= $product["brand"] ?>">
<?php endforeach ?>
</datalist>
</div>


<div class="row">
<p class="col-6">MMK-low</p><p class="col-6">MMK-height</p></div>
<div class="row">


<input id="ran-min" type="tel" value="0" name="money-min" class="col-6  out-none center border">

<input id="ran-max" type="tel" value="1000000" name="money-max" class="col-6 out-none center border " />
</div>

<button class="btn mt-5 btn-primary" name="filter-submit" >filter</button>

</form>

</div>
</div>


<?php

if (isset($_GET["alert"])) : ?>
	<script>
	alert("<?= $_GET["alert"]; ?>");
	</script>
<?php endif ?>



<!-- carousel start-->

<div class="container-fluid row  center my-3 border ">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner promoimg">
<?php foreach($promphotos as $promphoto ): ?>
<div class="carousel-item active" data-bs-interval="3000">
<img src="imgs/<?= $promphoto ?>"  class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>ဘာမွမရွီေသာ promsion</h5>
<p>လုိခ်င္ဝယ္ေပါ့</p>
</div>
</div>
<?php endforeach ?>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden ">Previous</span>
</button>
<button class="carousel-control-next " type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
<span class="carousel-control-next-icon np" aria-hidden="true"></span>
<span class="visually-hidden ">Next</span>
</button>
</div>
</div>

<!-- carousel end-->
<!-- brand img start -->
<div class="container-fluid my-4 row">


<?php foreach($brands as  $brand): ?>
<div class="brand-box col-12 col-sm-6 center">
<h1 ><?= $brand ?></h1>
<img src="imgs/logo.jpg" class="brand-img w-100" />
</div>
<?php endforeach ?>



</div>

<!-- brand img end -->







<!-- products start  -->
<div class="row center ">

<?php foreach($brands as $brand_name): ?>
<div class="center col-12"><h4 class=" w-50 probrand-title center"><?=  $brand_name ?></h4></div>
<?php foreach($products as $product): ?>
<?php  if($product["brand"]==$brand_name):  ?>
<div class="col-sm-2  col-4 border mx-3 my-3  ">
<a href="Helper/product.php?pid=<?= $product["id"] ?>" class="nav-link">
<img src="imgs/<?= $product["proimg"][0] ?>" class="m-1 productsimg w-100" > 
<span id="name"><?php echo substr( $product["proname"], 0,7); ?></span>
<span id="name" class="prons"><?php echo substr( $product["proname"], 7, 2); ?></span>
<br>
<?php if($_GET["money"]=="$"): ?>
<?php if($product["propricemoney"]=="$"): ?>
<span>$-<?= substr($product["proprice"], 0,8) ?></span>
<span  class="prons"><?php echo substr( $product["proprice"], 8, 2); ?></span>
<?php else: ?>
<span>$-<?= substr($product["proprice"]/2100, 0,8) ?></span>
<span  class="prons"><?php echo substr( $product["proprice"]/2100, 8, 2); ?></span>
<?php endif ?>

<?php else: ?>
<?php if($product["propricemoney"]=="MMK"): ?>
<span>MMK-<?= substr($product["proprice"], 0,8) ?></span>
<span class="prons"><?php echo substr( $product["proprice"], 8, 2); ?></span>

<?php else: ?>
<span>MMK-<?= substr($product["proprice"]*2100, 0,8) ?></span>
<span class="prons"><?php echo substr( $product["proprice"]*2100, 8, 2); ?></span>

<?php endif ?>

<?php endif ?>
</a>
</div>
<?php endif ?>
<?php endforeach ?>

<?php endforeach ?>



</div>


 <!--- products end -->





<div class="row contect" id="contect">
<div class="col-12 center">
<div class="dropdown">
<button class="btn btn-outline-primary my-2  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
MMK/$
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
<li><a class="dropdown-item" href="index.php?money=MMK">MMK</a></li>
<li><a class="dropdown-item" href="index.php?money=$">USD($)</a></li>
</ul>
</div>
</div>





<?php 
include"Helper/contect.php";

 ?>

</div>
<script src="my/my.js"></script>
<script src="my/jquery.js"></script>
<script>

window.addEventListener('load', loadloader);
var loaderp=document.getElementById("loaderp");
function loadloader(){
 loaderp.style.display="none"
 home.style.display="inline"
 }
 


</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--script src="bootstrap-5.2.0/dist/js/bootstrap.bundle.min.js"></script-->
</body>
</html>


