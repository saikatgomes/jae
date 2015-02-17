
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
            <a class="navbar-brand" href=<?php echo $HOME?>>Jae Seok Lee</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
				<li <?php echo $about_class?>><a href=<?php echo $HOME."about.php" ?>>About</a></li>
				<li <?php echo $services_class?>><a href=<?php echo $HOME."services.php" ?>>Services</a></li>
				<li <?php echo $appointment_class?>><a href=<?php echo $HOME."appointment.php" ?>>Book an Appointment</a></li>
				<li <?php echo $praise_class?>><a href=<?php echo $HOME."praise.php" ?>>Praise</a></li>
				<li <?php echo $new_class?>><a href=<?php echo $HOME."new.php" ?>>New Patient</a></li>				
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
