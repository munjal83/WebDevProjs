<?php

	include("login.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thought Journal</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>

	#logo{
	
		color: #F0AD4E;

	
	}
	
	#topContainer{
	
		background-image: url("background2.jpg");
		height: 400px;
		width: 100%;
		background-size: cover;
	
	}
	#topRow{
	
		margin-top: 100px;
		text-align: center;
		color: white;

		
	}
	#topRow h1{
		
		color: #ccc3bb;
		font-size: 250%;
	
	}
	.bold{
		
		font-weight: bold;
	
	}
	.marginTop{
	
		margin-top: 30px;
	
	}
	
	.center{
	
		text-align : center;
	
	}
	.title{
	
		margin-top: 100px;
		font-size: 300%;
	
	}
	
	#footer{
		
		padding-top: 70px;
		background-color: #A9A9A9;
		width: 100%;
	}
	
	.marginBottom{
	
		margin-bottom: 30px;
	
	}
	
	.appStoreImage{
	
		width: 250px;
	
	}
	p{
		
		color: #ccc3bb;
	
	}
	
	</style>
	
  </head>
  <body>
  
   <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="logo" href="#">Thought Journal <span class="glyphicon glyphicon-camera"></span></a>
        </div>
        <div class="navbar-collapse collapse">
        
		
		
          <form class="navbar-form navbar-right" role="form" method="post">
            <div class="form-group">
              <input type="email" placeholder="Email" name="loginemail" class="form-control" value="<?php echo addslashes($_POST['loginemail']);?>"></input>
            </div>
            
			<div class="form-group">
              <input type="password" placeholder="Password" name="loginpassword" class="form-control" value="<?php echo addslashes($_POST['loginpassword']);?>"></input>
			</div>
            <input type="submit" name = "submit" class="btn btn-warning" value="Log In"></input>
          </form>
       
		</div>
	 </div>
	</div>	
	
	<div class="container contentContainer" id="topContainer">
	
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3" id="topRow">
				
				<h1 class="marginTop">Thought Journal</h1>
				<p class="lead">Never loose a million dollar idea or a beautiful quote from your mind. Jog it down into this light weight, handy journal wherever you travel</p>
				
				<?php
				
					if($error){
					
						echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
						
					}
					
					if($message){
					
						echo '<div class="alert alert-success">'.addslashes($message).'</div>';
						
					}
				
				?>
				
				<p class="bold marginTop">Join us now!! Sign up below</p>
			
				<form class="marginTop" method="post">
				
					<div class="form-group">
						
						<label for="email">Your Email Address</label>
						 <input type="email" placeholder="Email" name="email" class="form-control" value="<?php echo addslashes($_POST['email']);?>"></input>
					</div>

					<div class="form-group">	
						<label for="password">Password</label>
						 <input type="password" placeholder="password" name="password" class="form-control" value="<?php echo addslashes($_POST['password']);?>"></input>
						
					</div>
					
					<input type="submit" name ="submit" class="btn btn-danger btn-lg marginTop" value="Register"></input>
				</form>
			</div>
			
		</div>
	
	
	</div>

	
	
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
		
		$(".contentContainer").css("min-height" ,$(window).height()); 
	
	</script>
	
	
  </body>
</html>
