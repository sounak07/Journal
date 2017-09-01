<?php
	
	session_start();

	include('connection.php');

	

	if(isset($_POST['submit'])){

		if (isset($_POST['diary'])) { $diary = $_POST['diary']; }  
		if (isset($_POST['diary'])) { $id= $_SESSION['id']; }
		$query = "UPDATE users SET diary='$diary' WHERE id='$id' LIMIT 1";
		
		mysqli_query($conn, $query);
	}

		
?>

<form method="post" action="updatediary.php">
	<input type="text" name="diary">

	<input type="submit" name="submit" value="submit">

</form>