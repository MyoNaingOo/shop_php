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
<title>product</title>
</head>
<body>
<?php
 include"usern.php";
?>
<p class="text-primary mt-3">HOME>Product</p>

<?php foreach($products as $product): ?>
<?php if($product["id"]==$_GET["pid"]): ?>
<div class="row">
<div class="col-12 col-sm-6">
<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner ">
<?php foreach($product["proimg"] as $img): ?>
<div class="carousel-item active">
<img src="../imgs/<?=$img ?>" class="d-block proimg w-100" alt="...">
</div>
<?php endforeach ?>
</div>
<button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
<span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
<span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
</div>
<div class="smallimgs ">
<?php foreach($product["proimg"] as $img): ?>

<img src="../imgs/<?= $img ?>" class="smallimg" />
<?php endforeach ?>
</div>
</div>
<div class="col-12 col-sm-6 p-5">
<h3 class="text-primary"><?= $product["proname"] ?></h3>
<?php if($_GET["money"]=="$"): ?>
<?php if($product["propricemoney"]=="$"): ?>
<span>$-<?= substr($product["proprice"], 0,8) ?></span>
<span  class="prons"><?php echo substr( $product["proprice"], 8, 2); ?></span>
<?php else: ?>
<span>$-<?= substr($product["proprice"]/2100, 0,8) ?></span>
<span  class="prons"><?php echo substr( $product["proprice"]/2100, 8, 2); ?></span>
<?php endif ?>

<?php else: ?><?php if($product["propricemoney"]=="MMK"): ?>
<span>MMK-<?= substr($product["proprice"], 0,8) ?></span>
<span class="prons"><?php echo substr( $product["proprice"], 8, 2); ?></span>

<?php else: ?>
<span>MMK-<?= substr($product["proprice"]*2100, 0,8) ?></span>
<span class="prons"><?php echo substr( $product["proprice"]*2100, 8, 2); ?></span>

<?php endif ?>

<?php endif ?>
<p class="promess"><?= $product["promess"] ?></p>

<?php if($_GET["buy"]=="buy"): ?>
<a onclick="return confirm('you are sure.\ncancel this product not buy');" href="mailproduct.php?nbuy=<?= $product["id"] ?>" class="btn btn-primary float-end">cancel</a>
<?php else: ?>
<a onclick='return confirm("you are sure.\nthis product buy");' href="mailproduct.php?pid=<?= $product["id"] ?>" class="btn btn-primary float-end">buy</a>
<?php endif ?>

</div>
</div>

<?php endif ?>
<?php endforeach ?>
<?php
/*
foreach($_GET as $key=>$val){
 echo "key is $key value is $val";
}
*/
?>

<script src="../my/my.js"></script>
<script>
</script>
<script src="../bootstrap-5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>