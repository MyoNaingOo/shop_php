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
<title>Search</title>
</head>
<body>






<?php $search=$_POST["search-data"];
include"usern.php";

?>
<p class="text-primary mt-3">HOME>Search</p>
<div class="row center">
<?php foreach($products as $product): ?>
<?php if(preg_match("/$search/i",$product["sellname"]) || preg_match("/$search/i",$product["brand"]) || preg_match("/$search/i",$product["proname"])): ?>

<?php if((isset($_POST["filter-submit"])&&$product["proprice"]>=$_POST["money-min"] && $product["proprice"]<=$_POST["money-max"])||isset($_POST["search-submit"])):  ?>

<div class="col-sm-2  col-4 border mx-3 my-3  ">
<a href="product.php?pid=<?= $product["id"] ?>" class="nav-link">
<img src="imgs/<?= $product["proimg"][0] ?>" class="m-1 productsimg w-100" >
<span id="name"><?php echo substr( $product["proname"], 0,7); ?></span>
<span id="name" class="prons"><?php echo substr( $product["proname"], 7, 2); ?></span>
<br>
<?php if($_GET["usd"]=="$"): ?>
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
</a>
</div>


<?php endif ?>
<?php endif ?>
<?php endforeach ?>


</div>

<script src="../my/my.js"></script>
<script>
</script>
<script src="../bootstrap-5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>