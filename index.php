<?php 

    include('login.php');
    define("TITLE","Privado");
 ?> 

<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title> <?php echo TITLE; ?> </title>

    <!-- Bootstrap -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
      
    <link href="app.css" rel="stylesheet">  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    
  <body data-spy="scroll" data-target="#navbar-scroll">
        
      
      <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar-scroll">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="border: none">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Privado</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
              <form method="post" class="form-inline">
                          <div class="form-group">
                              <label for="formName" class="sr-only">Email Addresse</label>
                              <input type="email" name="loginemail" id="loginemail" value="<?php echo addslashes((isset($_POST['loginemail']))? $_POST['loginemail']:''); ?>" class="form-control" placeholder="Email">
                          </div>
                          <div class="form-group">
                              <label for="formEmail" class="sr-only">Password</label>
                              <input type="password" name="loginpassword" value="<?php echo addslashes((isset($_POST['loginpassword']))? $_POST['loginpassword']:''); ?>" class="form-control" placeholder="Password">

                          </div>
                                                              
                                              
                          <input value="Log In" type="submit" class="btn btn-success btn-lg" name="logsubmit" id="log">
              </form>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      
      <div class="cover">
          <div class="cover-text">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
               <h1><?php echo TITLE; ?></h1>

               <p class="lead">Your own private portal,with u wherever u go.</p>

               <?php 

                  if(isset($error) && $error != '')
                  echo '<div class="alert alert-danger">'.addslashes((isset($error))? $error:'').'</div>' ;
               ?>

              <p  id="cv">Interested? Sign up Below!</p>

                                    
                      <form method="post">
                          <div class="form-group">
                              <label for="formName">Email Address</label>
                              <input type="email" name="email" id="email" value="<?php echo addslashes((isset($_POST['email']))? $_POST['email']:''); ?>" placeholder="Your email" class="form-control">
                          </div>
                          <div class="form-group">
                              <label for="formEmail">Password</label>
                              <input type="password" name="password" value="<?php echo addslashes((isset($_POST['password']))? $_POST['password']:''); ?>" placeholder="Your Password" class="form-control">
                          </div>
                                                              
                                              
                          <input value="Sign up" type="submit" class="btn btn-success btn-lg marginTop" name="submit" id="sign">
                      </form>
                  </div>
                </div><!--Row-->

                                          
         </div>
          
          
      </div>
      
      
           
      <footer>
          Crafted with &hearts; in calgary by <a href="">Sounak</a>
      </footer>
      
        
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
     
  </body>
</html>

		


