<?php

	session_start();
	
	include("connection.php");
	
	$query = "SELECT diary FROM Users WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link, $query);
	
	$row = mysqli_fetch_array($result);
	
	$diary = $row['diary'];

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
	
		background-image: url("background7.jpg");
		height: 400px;
		width: 100%;
		background-size: cover;
	
	}
	#topRow{
	
		margin-top: 80px;
		text-align: center;
		color: white;

		
	}
	#topRow h1{
		
		color: white;
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
	</style>
	
  </head>
  <body>
  
   <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header pull-left">
       
          <a class="navbar-brand" id="logo" href="#">Thought Journal <span class="glyphicon glyphicon-camera"></span></a>
        </div>
        <div class="pull-right">
        <ul class="navbar-nav nav pull-right">
			 <li><a href="index.php?logout=1">Log Out</a></li>
		
		
		</ul>
       
		</div>
	 </div>
	</div>	
	
	<div class="container contentContainer" id="topContainer">
	
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3" id="topRow">
				
				<textarea class="form-control"><?php echo $diary; ?></textarea>
			
				
			</div>
			
		</div>
	
	
	</div>

	
	
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
		
		$(".contentContainer").css("min-height" ,$(window).height()); 
		$("textarea").css("height" ,$(window).height()-110); 
		
		$("textarea").keyup(function(){
			
			$.post("updatediary.php",{diary : $("textarea").val()});
		
		});
	</script>
	
	
  </body>
</html>
