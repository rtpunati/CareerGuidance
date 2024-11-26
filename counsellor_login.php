<?php 

// -------------------------------------------------------------//

	include("config/function.php");
	include("include/counsel_val.php");
	

		
	$home = page_query("home");
	$career = page_query("career");
	$job = page_query("job");
	$contact = page_query("contact");
	$reg_page = page_query("register");
	$counsel = page_query("con_dashboard");
	
	$details = details();
	
// -------------------------------------------------------------//
	

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from templates.scriptsbundle.com/opportunities/demo/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Oct 2016 14:25:27 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>Counsellor Login | <?= $details['business_name']; ?></title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- BOOTSTRAPE STYLESHEET CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- JQUERY MENU -->
    <link rel="stylesheet" href="css/mega_menu.min.css">

    <!-- ANIMATION -->
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- OWl  CAROUSEL-->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.style.css">

    <!-- TEMPLATE CORE CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FOR THIS PAGE ONLY -->
    <link href="css/select2.min.css" rel="stylesheet" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900,300" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>

</head>

<body>
<div class="page">

    <nav id="menu-1" class="mega-menu fa-change-black" data-color=""> 
        <section class="menu-list-items"> 
            <ul class="menu-logo">
                <li> <a href="index.php"> <img src="<?= "assets/logo/".$details['logo']?>" alt="logo" class="img-responsive" width="80" height="60"> </a> </li>
            </ul>
            <ul class="menu-links pull-right">
				<li> <a href="index.php"> <i class="fa fa-home fa-indicator"></i>  <?= $home['page_title']; ?></a></li>
				<li> <a href="articles.php"> <i class="fa fa-home fa-book"></i>  <?= $career['page_title']; ?></a></li>
				<li> <a href="contact.php"> <i class="fa fa-home fa-pencil-square"></i>  <?= $contact['page_title']; ?></a></li>
                <li class="no-bg login-btn-no-bg"><a href="admin.php" class="login-header-btn"><i class="fa fa-sign-in"></i> Admin</a></li>
                <li class="no-bg login-btn-no-bg"> <a href="counsellor_login.php" class="login-header-btn"> <i class="fa fa-sign-in"></i>  <?= $counsel['page_title']; ?></a></li>

				<!-- <li class="no-bg"><a href="#" class="p-job"><i class="fa fa-plus-square"></i> Post Job</a></li> -->
				<li class="no-bg login-btn-no-bg"><a href="login.php" class="login-header-btn"><i class="fa fa-sign-in"></i> Student</a></li>

           </ul>
        </section>
    </nav>
    <div class="clearfix"></div>
    <div class="page category-page">

        <section class="login-page-2 parallex full-page" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" >
                        <div class="login">
                             <div class="login_title">
                               <a href="index.php"><img src="assets/logo/logo.png" alt="logo" class="img-responsive center-block" width="80" height="60"></a>
                            </div>
							<form method="POST" action="">
							<p style="color: red; text-align: center;"><?= $error;?></p>
								<div class="login_fields">
								
									<div class="login_fields__user">
										<div class="icon">
											<i class="icon-profile-male"></i>
										</div>
										<input placeholder="Email" name="email" type="email" required />
									</div>
									<div class="login_fields_password">
										<div class="icon">
											<i class="icon-lock"></i>
										</div>
										<input placeholder="Password" name="password" type="password" required />
									</div>
									<div class="loginbox-submit">
										<input type="submit" name="con_login" class="btn btn-default btn-block" value="Login">
									</div>
									<p style="color: #fff; font-weight: bold; margin-top: 2%; margin-bottom: -5%; text-align: center;">
										We are happy to have you around.
									</p>
								</div>
								
							</form>
							

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>

        <!-- JAVASCRIPT JS  -->
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

        <!-- BOOTSTRAP CORE JS -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- JQUERY SELECT --> 
        <script type="text/javascript" src="js/select2.min.js"></script> 
    
        <!-- MEGA MENU -->
        <script type="text/javascript" src="js/mega_menu.min.js"></script>

        <!-- JQUERY EASING -->
        <script type="text/javascript" src="js/easing.js"></script>

        <!-- JQUERY COUNTERUP -->
        <script type="text/javascript" src="js/counterup.js"></script>

        <!-- JQUERY WAYPOINT -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>

        <!-- JQUERY REVEAL -->
        <script type="text/javascript" src="js/footer-reveal.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owl-carousel.js"></script>

        <!-- CORE JS -->
        <script type="text/javascript" src="js/custom.js"></script>

        <script type="text/javascript">
            $(".full-page").height($(window).height());
            $(window).resize(function() {
                $(".full-page").height($(window).height());
            });
        </script>

    </div>
</body>
<script>
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
return false;
}
function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>


<!-- Mirrored from templates.scriptsbundle.com/opportunities/demo/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Oct 2016 14:25:27 GMT -->
</html>