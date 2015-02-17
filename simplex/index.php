<!DOCTYPE html>
<html lang="en">

<?php
	$MY_TITLE="Jae Seok Lee's Webpage - Home";
	include 'head.php';
?>

<body>


	<?php
		$HR_ACTIVE="HOME";
		include 'navbar.php';
	?>

	<div class="row">
		<div class="col-md-12">
			<center>
				<br><br><br>
			</center>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-1"></div>
	    <div class="col-md-5">
			<!--				
			<div class="panel panel-default">
				<div class="panel-body">
			-->
			<center>
				<a data-toggle="collapse" href="#collapseAccu" aria-expanded="false" aria-controls="collapseAccu">
					<img src="img/accupunture.jpg" class="img-responsive img-rounded" alt="Responsive image">
					<h3>Accuputure</h3>
				</a>
				<div class="collapse" id="collapseAccu">
					<br>
					<div class="well">
					<h4>
						Accupunture uses specific points on the body to relieve symptoms casued by diffrent ailments.
						Accupunture focuses in bringing back the balance to one's body. There is a substantial low to zero side 
						effects during an accuputure treatment. Most people deel minimal or no pain during the insertion of the needle.
					<h4>
					</div>
				</div>	
			</center>
			<!--
				</div>
			</div>
			-->
		</div>
	    <div class="col-md-5">
			<center>
				<a data-toggle="collapse" href="#collapseMassage" aria-expanded="false" aria-controls="collapseMassage">		
					<img src="img/massage.jpg" class="img-responsive img-rounded" alt="Responsive image">
					<h3>Massage Therapy</h3>
				</a>
				<div class="collapse" id="collapseMassage">
					<br>
					<div class="well">
					<h4>
						Deep fascia work to provide relief from everdy chronic pain to acute injuries.
						We provide therapeutic massage to get rid of the nagging aches and pain and relief
						stress from everyday work. The deep tissue focus on realigning deep layer of the muscles
						amd restore normal body moverment.
					<h4>
					</div>
				</div>	
			</center>
		</div>
	    <div class="col-md-1"></div>
	</div>
	
	<br>
	<div class="row">
		<div class="col-md-12">
			<center>
				<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
			</center>
		</div>
	</div>
    <br>

	<div class="row">
	    <div class="col-md-1"></div>
	    <div class="col-md-5">
			<center>
	            <div class="embed-responsive embed-responsive-4by3">
    			<iframe 
					width="450" 
					height="400" 
					frameborder="0" 
					style="border:0"
                    class="embed-responsive-item"
					src="https://www.google.com/maps/embed/v1/place?q=
						1904+Kendall+Avenue,+Madison,+WI,+United+States&
						key=AIzaSyBaFa2SllLz8eiXrGpx2j_OjkyVnA2lHXQ">
				</iframe>
                </div>
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

	<?php
		include 'scripts.php';
	?>
</body>

</html>
