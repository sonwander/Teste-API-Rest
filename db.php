<?php

$con = mysqli_connect("localhost","root","","teste_api");
	if (mysqli_connect_errno()){
		echo "Falhou: " . mysqli_connect_error();
		die();
		}
?>