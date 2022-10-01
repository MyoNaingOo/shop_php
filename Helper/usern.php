<?php





namespace Helper\usern;


$promphotos=array("p1.jpg","p3.jpg","p2.jpg");
$products=[
    ["id"=> 1,"sellname"=> "mno","proimg" =>["xiaomi 12.jpg","xiaomi 12-2.jpg","xiaomi 12-3.jpg","xiaomi 12-4.jpg"] ,"proname"=> "xiaomi 12","proprice"=>"199","propricemoney"=>"$","brand"=>"phone"],
	["id"=> 2,"sellname"=> "mmt","proimg" =>["redmi.jpg","redmi.jpg"] ,"proname"=>"Redmi note 11 pro" ,"proprice"=>"166","propricemoney"=>"$","brand"=>"phone"],
	["id"=> 3,"sellname"=> "kns","proimg" =>["vivo.jpg","vivo.jpg"] ,"proname"=> "vivo T1 pro","proprice"=>"100","propricemoney"=>"$","brand"=>"phone"],
    ["id"=> 4,"sellname"=> "nks","proimg" =>["moto.jpg","moto.jpg"] ,"proname"=>"moto G22" ,"proprice"=>"159000","propricemoney"=>"MMK","brand"=>"phone"],
	["id"=> 5,"sellname"=> "mlw","proimg" =>["1+.jpg","1+.jpg"] ,"proname"=> "oneplaus","proprice"=>"120","propricemoney"=>"$","brand"=>"phone"],
    ["id"=> 6,"sellname"=> "tzh","proimg" =>["honor.jpg","honor.jpg"]  ,"proname"=> "hownor","proprice"=>"88","propricemoney"=>"$","brand"=>"phone"],
	["id"=> 7,"proname"=> "Huawei Nova Y70 ","proimg"=>["IMG_20220803_202147.jpg"],"proprice" => "399000","propricemoney"=>"MMK","promess" => "Price : 339,000 MMK Display : 6.75″ FHD + (720 x 1600 pixels) Memory & Storage : 128 GB ROM + 4GB RAM SIM Capability : Dual SIM(nano-SIM, dual stand-by) Battery:Li-Po 6000 mAh, non-removable Dimensions:168.3 x 77.7 x 9 mm (6.63 x 3.06 x 0.35 in) ","sellname" => "mno","brand"=>"phone"],
    ["id"=> 8,"sellname"=> "mno","proimg" =>["xiaomi 12.jpg","xiaomi 12-2.jpg","xiaomi 12-3.jpg","xiaomi 12-4.jpg"] ,"proname"=> "xiaomi 12","proprice"=>"199","propricemoney"=>"$","brand"=>"electronicronicronicronic"],
    ["id"=> 9,"sellname"=> "mmt","proimg" =>["redmi.jpg","redmi.jpg"] ,"proname"=>"Redmi note 11 pro" ,"proprice"=>"166","propricemoney"=>"$","brand"=>"computer"],
    ["id"=> 10,"sellname"=> "kns","proimg" =>["vivo.jpg","vivo.jpg"] ,"proname"=> "vivo T1 pro","proprice"=>"100","propricemoney"=>"$","brand"=>"tool"],
    ["id"=> 11,"sellname"=> "nks","proimg" =>["moto.jpg","moto.jpg"] ,"proname"=>"moto G22" ,"proprice"=>"159000","propricemoney"=>"MMK","brand"=>"tool"],
    ["id"=> 12,"sellname"=> "mlw","proimg" =>["1+.jpg","1+.jpg"] ,"proname"=> "oneplaus","proprice"=>"120","propricemoney"=>"$","brand"=>"computer"],
    ["id"=> 13,"sellname"=> "tzh","proimg" =>["honor.jpg","honor.jpg"]  ,"proname"=> "hownor","proprice"=>"88","propricemoney"=>"$","brand"=>"computer"],
    ["id"=> 14,"proname"=> "Huawei Nova Y70 ","proimg"=>["IMG_20220803_202147.jpg"],"proprice" => "399000","propricemoney"=>"MMK","promess" => "Price : 339,000 MMK Display : 6.75″ FHD + (720 x 1600 pixels) Memory & Storage : 128 GB ROM + 4GB RAM SIM Capability : Dual SIM(nano-SIM, dual stand-by) Battery:Li-Po 6000 mAh, non-removable Dimensions:168.3 x 77.7 x 9 mm (6.63 x 3.06 x 0.35 in) ","sellname" => "mno","brand"=>"electronic"],
    ["id"=> 15,"sellname"=> "mlw","proimg" =>["1+.jpg","1+.jpg"] ,"proname"=> "oneplaus","proprice"=>"12000","propricemoney"=>"MMK","brand"=>"electronicronic"],
    ["id"=> 16,"sellname"=> "tzh","proimg" =>["honor.jpg","honor.jpg"]  ,"proname"=> "hownor","proprice"=>"88","propricemoney"=>"$","brand"=>"electronic"],
    ["id"=> 17,"proname"=> "Huawei Nova Y70 ","proimg"=>["IMG_20220803_202147.jpg"],"proprice" => "399000","propricemoney"=>"MMK","promess" => "Price : 339,000 MMK Display : 6.75″ FHD + (720 x 1600 pixels) Memory & Storage : 128 GB ROM + 4GB RAM SIM Capability : Dual SIM(nano-SIM, dual stand-by) Battery:Li-Po 6000 mAh, non-removable Dimensions:168.3 x 77.7 x 9 mm (6.63 x 3.06 x 0.35 in) ","sellname" => "mno","brand"=>"electronic"],
    ["id"=> 18,"sellname"=> "mno","proimg" =>["xiaomi 12.jpg","xiaomi 12-2.jpg","xiaomi 12-3.jpg","xiaomi 12-4.jpg"] ,"proname"=> "xiaomi 12","proprice"=>"199","propricemoney"=>"$","brand"=>"computer"],
    ["id"=> 19,"sellname"=> "mmt","proimg" =>["redmi.jpg","redmi.jpg"] ,"proname"=>"Redmi note 11 pro" ,"proprice"=>"160006","propricemoney"=>"$","brand"=>"computer"],
    ["id"=> 20,"sellname"=> "kns","proimg" =>["vivo.jpg","vivo.jpg"] ,"proname"=> "vivo T1 pro","proprice"=>"100","propricemoney"=>"$","brand"=>"tool"],
];

$users=[
	["email"=>"myonaingoo623@gmail.com","pass"=>"200366","name"=>"MNO AD"],
	["email"=>"maymonthant661@gmail.com","pass"=>"200412","name"=>"MMT MG"]
];

/*
 * user bought product =$ubp
 */

$ubp=[
	["name"=>"MNO AD","boughtpro"=>[2,5,7,8]],
	["name"=>"MMT MG","boughtpro"=>[4,7,8,9,15,17]]
];


/*

foreach($users[0] as $key=>$val){
	echo "key is $key value is $val";
}

*/


$brands=["phone","computer","electronic","tool"];
$combrand=["asuer","apple","hp"];
$phomebrand=["xiaomi","oppo","huawei","sansung","vivo"];

class usern{
	public $users;
	
	public function check($email,$pass){
		foreach($this->users as $user){
			if($user["email"]==$email&&$user["pass"]==$pass){
			return $user["name"];
			}
		}
		
	}

	
	
	
	
		
}
	

$user=new usern;
$user->users=$users;
/*$nn=$user->check("myonaingoo623@gmail.com","200366");
echo $nn;
*/

error_reporting(0);

?>