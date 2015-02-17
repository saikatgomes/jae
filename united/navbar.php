
<?php
    if (empty($HOME)) {
        $HOME="http://pages.cs.wisc.edu/~saikat/projects/jae/";
    }
    $home_class="";
    $about_class="";
    $services_class="";
    $appointment_class="";
    $praise_class="";
    $new_class="";
    $contact_class="";
    $active_class="class='active'";
    if (!empty($HR_ACTIVE)){
        if(strcmp($HR_ACTIVE,"HOME")==0){
            $home_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"ABOUT")==0){
            $about_class =$active_class;
        }	elseif(strcmp($HR_ACTIVE,"SERVICES")==0){
            $services_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"APPOINTMENT")==0){
            $appointment_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"PRAISE")==0){
            $praise_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"NEW")==0){
            $new_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"CONTACT")==0){
            $contact_class =$active_class;
        }
    }
?>

<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=254311618073113&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=<?php echo $HOME?>><b>Jae Seok Lee - Normal</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
				<li <?php echo $home_class?>><a href=<?php echo $HOME ?>>Home</a></li>
				<li <?php echo $about_class?>><a href=<?php echo $HOME."about.php" ?>>About</a></li>
				<li <?php echo $services_class?>><a href=<?php echo $HOME."services.php" ?>>Services</a></li>
				<li <?php echo $appointment_class?>><a href=<?php echo $HOME."appointment.php" ?>>Book an Appointment</a></li>
				<li <?php echo $praise_class?>><a href=<?php echo $HOME."praise.php" ?>>Praise</a></li>
				<li <?php echo $new_class?>><a href=<?php echo $HOME."new.php" ?>>New Patient</a></li>	
				<!-- Themes - start -->
				<li class="dropdown">
		          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Themes <span class="caret"></span></a>
		          <ul class="dropdown-menu" aria-labelledby="themes">
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/">Default</a></li>
		            <li class="divider"></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/cerulean/">Cerulean</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/cosmo/">Cosmo</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/cyborg/">Cyborg</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/darkly/">Darkly</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/flatly/">Flatly</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/journal/">Journal</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/lumen/">Lumen</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/paper/">Paper</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/readable/">Readable</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/sandstone/">Sandstone</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/simplex/">Simplex</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/slate/">Slate</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/spacelab/">Spacelab</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/superhero/">Superhero</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/united/">United</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/yeti/">Yeti</a></li>
		          </ul>
		        </li>		
				<!-- Themes - start -->		
            </ul>
            <ul class="nav navbar-nav navbar-right">
				<li <?php echo $contact_class?>><a href=<?php echo $HOME."contact.php" ?>>Contact Us</a></li>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<br><br><br>

<nav class="navbar navbar-inverse ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=<?php echo $HOME?>><b>Jae Seok Lee - Inverse</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
				<li <?php echo $home_class?>><a href=<?php echo $HOME ?>>Home</a></li>
				<li <?php echo $about_class?>><a href=<?php echo $HOME."about.php" ?>>About</a></li>
				<li <?php echo $services_class?>><a href=<?php echo $HOME."services.php" ?>>Services</a></li>
				<li <?php echo $appointment_class?>><a href=<?php echo $HOME."appointment.php" ?>>Book an Appointment</a></li>
				<li <?php echo $praise_class?>><a href=<?php echo $HOME."praise.php" ?>>Praise</a></li>
				<li <?php echo $new_class?>><a href=<?php echo $HOME."new.php" ?>>New Patient</a></li>	
				<!-- Themes - start -->
				<li class="dropdown">
		          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Themes <span class="caret"></span></a>
		          <ul class="dropdown-menu" aria-labelledby="themes">
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/">Default</a></li>
		            <li class="divider"></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/cerulean/">Cerulean</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/cosmo/">Cosmo</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/cyborg/">Cyborg</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/darkly/">Darkly</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/flatly/">Flatly</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/journal/">Journal</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/lumen/">Lumen</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/paper/">Paper</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/readable/">Readable</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/sandstone/">Sandstone</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/simplex/">Simplex</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/slate/">Slate</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/spacelab/">Spacelab</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/superhero/">Superhero</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/united/">United</a></li>
		            <li><a href="http://pages.cs.wisc.edu/~saikat/projects/jae/yeti/">Yeti</a></li>
		          </ul>
		        </li>		
				<!-- Themes - start -->		
            </ul>
            <ul class="nav navbar-nav navbar-right">
				<li <?php echo $contact_class?>><a href=<?php echo $HOME."contact.php" ?>>Contact Us</a></li>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
