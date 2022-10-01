<?php


namespace Helper\Http;



class Http{
	static function redirect($part,$query=""){
		$url=$part;
		if($query)$url.="?$query";
		header("location: $url");
		exit();

	}
}




?>



