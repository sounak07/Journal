<?php

	include('connection.php');

	session_start();

	if(isset($_POST['submit'])) {

		$error = '';

		if(!$_POST['email']){
			$error = "<br>Please enter email.";
		}

		if ($_POST["email"]!="" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { 
            $error.="<br>Please enter a valid email address"; 
       } 

		if(!$_POST['password']){
			$error.= "<br>Please enter password.";
		} 
		else {

			if(strlen($_POST['password'])<8) $error.= "<br>Please enter a password with at least 8 characters";
			if(!preg_match('`[A-Z]`',  $_POST['password'])) $error.= "<br>Please include at least one capital letter.";
		}


        if ($error != '') {
            $error = "There were error(s) in your sign up details:".$error;
        }else{

        	$query = "SELECT * FROM users WHERE email ='".mysqli_real_escape_string($conn, $_POST['email'])."' ";

        	$result = mysqli_query($conn, $query);

		    $results = mysqli_num_rows($result);

		    if($results){
					$error = "That email is already registered.Do u want to log in?";
		    }else{

		     	$useremail = mysqli_real_escape_string($conn, $_POST['email']);
				$userpass =  md5(md5($_POST['email']).$_POST['password']);

				$query = "INSERT INTO `users` (`email`, `password`) VALUES ('$useremail', '$userpass')";

		    	 //$query = "INSERT INTO `users` (email, password) VALUES ('".mysqli_real_escape_string($conn, $_POST['email'])."','". md5(md5($_POST['email']).$_POST['password'])."')";

		    		mysqli_query($conn, $query);

		    		echo "You've been signed up!";

		    		$_SESSION['id'] = mysqli_insert_id($conn);

		    		//print_r($_SESSION);

		    		//Redirecting to logged in page
                
                    echo '<script>window.location.href="mainpage.php"</script>';

		    }

		}
		
	}


	if(isset($_POST['logsubmit'])){

		$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($conn, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";

		$result = mysqli_query($conn, $query);

		$row = mysqli_fetch_array($result);

		if($row) {

				$_SESSION['id'] = $row['id'];

				echo '<script>window.location.href="mainpage.php"</script>';

				//Redirect to logged in page

			}else{
				$error = "We could not find the email and password..Please try again";
			}
		}

?>