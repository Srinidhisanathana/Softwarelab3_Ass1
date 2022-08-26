<?php 
	session_start();
	

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;
	
	<?php
	$con=mysqli_connect("localhost","srinidhi","Sweety@16","crud");
	if(!$con)
 	 {
   		 die("cannot connect to server");
 	 }    
?>

	//if save button is clicked
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		echo 'saving data'; 
		$query = "INSERT INTO info (name, address) VALUES ('$name', '$address')";
		mysqli_query($db, $query);  
		$_SESSION['message'] = "Address saved";
		header('location: index(1).php');
		
	}
	
	

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
		$_SESSION['message'] = "Address updated!"; 
		header('location: index(1).php');
}

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM info WHERE id=$id");
		$_SESSION['message'] = "Address deleted!"; 
		header('location: index(1).php');
} 

$results = mysqli_query($db, "SELECT * FROM info");
