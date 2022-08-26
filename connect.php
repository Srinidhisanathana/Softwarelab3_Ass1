<?php
	$con=mysqli_connect("localhost","dummy_user","{superSecretPass!123}","grocery");
	if(!$con)
 	 {
   		 die("cannot connect to server");
 	 }    
?>
