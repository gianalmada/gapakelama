<?php

function log_r($string=NULL,$var_dump=FALSE){
	if ($var_dump) {
		var_dump($string);
	}else{
		echo "<pre>";
		print_r($string);
	}
	exit;
}

?>
