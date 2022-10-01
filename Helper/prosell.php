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
<title>product sell</title>
</head>
<body>
<?php
include"usern.php";

?>

<button onclick="history.back()" class="btn btn-primary m-4">back</button>
<div class="col-sm-8 border container-fluid">
<form class="px-4 py-3 " action="uploap.php" method="POST"  enctype="multipart/form-data">



<div class="m-3 p-2 center bg-warning border ">
<label for="imgfile" class="imgfile"><i class="fas fa-file-image float-start" ></i><p class="text-center img-text mt-1">please img choise 4photos</p></label>
<input type="file" class="d-none form-control" id="imgfile" name="imgfiles[]" accept="image/jpeg ,image/jpg,image/png" onchange="preview()" multiple="">
</div>
<div class="mb-3">
<label for="proname" class="form-label">Product Name</label>
<input type="name" class="form-control" id="proname" name="proname">
</div>

<div class="mb-3">
<label for="proprice" class="form-label">Product Price</label>
<div class="input-group">
<span class="input-group-text bg-warning">
<select name="propricemoney" class="select bg-warning">
<option>MMK</option>
<option>$</option>

</select>
</span>
<input type="tel" class="form-control" id="proprice" name="proprice">
</div>
</div>

<div class="mb-3">
<label for="promess" class="form-label">Product message</label>
<textarea  class="form-control" id="promess" name="promess"></textarea>
</div>

<select name="brand" class="form-select">
<?php foreach($brands as $brand): ?>
<option><?= $brand ?></option>

<?php endforeach ?>
</select>
<div class="row">
<button type="submit"  name="upload" class="btn btn-primary mt-2 col-3"/>uploap</button>

</div>
</form>
</div>
<script src="../my/my.js"></script>
<script src="../bootstrap-5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 