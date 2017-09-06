<?php
	
	session_start();

	include('connection.php');

	if(isset($_SESSION['id']) && $_SESSION['id'] != ""){
	//Logged in...
			if (isset($_POST['diary'])) { $diary = $_POST['diary']; }  
			if (isset($_POST['diary'])) { $id= $_SESSION['id']; }
			$query = "UPDATE users SET diary='".mysqli_real_escape_string($conn, $diary)."' WHERE id='".$id."' ";
		
			mysqli_query($conn, $query);

			print_r($_SESSION);
		
	}else{
		//Not logged...
		echo '<script> window.location.href="index.php";</script>';
}

		
?>



