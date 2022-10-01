<?php

namespace Helper\upload;

include "../login-out/logincheck.php";

 
 $proname=$_POST['proname'];
 $sellname=$_SESSION["username"];
 $promess=$_POST['promess'];
 $proprice=$_POST['proprice'];
 $money=$_POST['propricemoney'];
 $brand=$_POST['brand'];
 $proimg=$_FILES["imgfiles"];
 $proimgname=$_FILES["imgfiles"]['name'];


class price{
 public $proprice;
 
public function __construct($money,$proprice){
 	if($money=="MMK"){
 		$this->proprice=$proprice;
 	}elseif($money=="$"){
 		$this->proprice=$proprice * 2100;
 	}
 }
public function getprice(){
	return $this->proprice;
}

}


class upload{
	public $proname,$sellname,$promess,$proprice,$brand,$proimgname,$pricecla;

public function product($proname,$sellname,$promess,$brand,$proimgname,$money,$proprice){
    $this->proname=$proname;
    $this->sellname=$sellname;
    $this->promess=$promess;
    $this->brand=$brand;
    $this->proimgname=$proimgname;
    $this->pricecla=new price($money,$proprice);
    $this->proprice=$this->pricecla->getprice();
	
}




public function get(){
	
	
	echo $this->proname;
	echo $this->sellname;
	echo $this->promess;
	echo $this->proprice;
	echo $this->brand;
	
	print_r( $this->proimgname);
}



}
$obj=new upload();
$obj->product($proname,$sellname,$promess,$brand,$proimgname,$money,$proprice);
$nn=$obj->get();
echo $nn;


$images=$_FILES["imgfiles"];

$num_imgfiles=count($images["name"]);
echo $num_imgfiles;
for($i=0;$i<$num_imgfiles;$i++){
	$imgname=$images["name"][$i];
	$imgerror=$images["error"][$i];
	$imgtmp =$images["tmp_name"][$i];

   // echo $images["name"][$i];
	
	try{
	if($imgerror==0){
		move_uploaded_file($imgtmp,"../imgs/$imgname");   
		$em = "successe product sell";
		
	   //header("Location: ../index.php?alert=$em");
		
	}
	}catch(Exception $e){
		# error message
		$em = "Unknown Error Occurred while uploading";
		header("Location: ../index.php?alert=$e");
	}
	
}





?>