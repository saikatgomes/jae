<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jae Lee's Webpage</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<?php
		$HR_ACTIVE="HOME";
		include 'header.php';
	?>

	<div class="row">
	    <div class="col-md-1"></div>
	    <div class="col-md-5">
			<div class="panel panel-default">
				<div class="panel-body">
					Picture of accupunture<br>
					bla<br>
					bla<br>
					bla<br>
					bla<br>
				</div>
			</div>
		</div>
	    <div class="col-md-5">
			<div class="panel panel-default">
				<div class="panel-body">
					Picture of Massage<br>
					bla<br>
					bla<br>
					bla<br>
					bla<br>
				</div>
			</div>
		</div>
	    <div class="col-md-1"></div>
	</div>

	<div class="row">
	    <div class="col-md-1"></div>
	    <div class="col-md-5">
			<center>
				<iframe 
					width="450" 
					height="400" 
					frameborder="0" 
					style="border:0"
					src="https://www.google.com/maps/embed/v1/place?q=
						1904+Kendall+Avenue,+Madison,+WI,+United+States&
						key=AIzaSyBaFa2SllLz8eiXrGpx2j_OjkyVnA2lHXQ">
				</iframe>
			</center>
		</div>
	    <div class="col-md-5">		
			<center>	
				<a class="twitter-timeline" 
					width="450" 
					height="400" 
					href="https://twitter.com/hashtag/ICCworldcup" 
					data-widget-id="567145677910966272">
						#ICCworldcup Tweets
				</a>
				<script>
						!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
						if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
						fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
				</script>
			</center>
		</div>
	    <div class="col-md-1"></div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap-table-master/src/bootstrap-table.js"></script>
</body>

</html>
