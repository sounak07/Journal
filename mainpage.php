<?php 

    define("TITLE","Privado"); 

    session_start();

    include('connection.php');

    $query = "SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";

    $result=mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

    $diary = $row['diary'];

    
 ?> 

<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE; ?></title>

    <!-- Bootstrap -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
      
    <link href="main.css" rel="stylesheet">  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        
      
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><?php echo TITLE; ?></a>
        </div>
        <div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php" id="logout">Log out</a></li>
             
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="cover">
                                
         <div class="row" id="toprow">
           <div class="col-md-6 col-md-offset-3">
             <textarea class="form-control"><?php echo $diary ?></textarea>
           </div>
         </div>
          
          
      </div>    
        
        
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="app.js"></script>

    <script type="text/javascript">
             $(".contentContainer").css("min-height",$(window).height()); 

             $("textarea").css("height",$(window).height()-110);

             $("textarea").keyup(function(){
                $.post("updatediary.php", {diary:$("textarea").val()} );
             })
    </script>
     
  </body>
</html>

		


