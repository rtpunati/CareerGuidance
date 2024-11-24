
<?php ;

// -------------------------------------------------------------//

	include("config/function.php");
	include("include/login_val.php");
	
// -------------------------------------------------------------//
	
		if(isset($_SESSION['login_user'])){
			header("Location: dashboard.php");
		}

// -------------------------------------------------------------//
		
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
    <title>Login | <?= $details['business_name']; ?></title>
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="page">
    <!--<div id="spinner">
        <div class="spinner-img"> <img alt="Opportunities Preloader" src="images/loader.gif" />
            <h2>Please Wait.....</h2>
        </div>
    </div> -->
    <nav id="menu-1" class="mega-menu fa-change-black" data-color=""> 
        <section class="menu-list-items"> 
            <ul class="menu-logo">
                <li> <a href="index.php"> <img src="<?= "assets/logo/".$details['logo']?>" alt="logo" class="img-responsive" width="80" height="60"> </a> </li>
            </ul>
            <ul class="menu-links pull-right">
				<li> <a href="index.php"> <i class="fa fa-home fa-indicator"></i>  <?= $home['page_title']; ?></a></li>
				<li> <a href="articles.php"> <i class="fa fa-home fa-book"></i>  <?= $career['page_title']; ?></a></li>
				<li> <a href="counsellor_login.php"> <i class="fa fa-home fa-mortar-board"></i>  <?= $counsel['page_title']; ?></a></li>
				<li> <a href="contact.php"> <i class="fa fa-home fa-pencil-square"></i>  <?= $contact['page_title']; ?></a></li>
	
                <li class="no-bg login-btn-no-bg"><a href="admin.php" class="login-header-btn"><i class="fa fa-sign-in"></i> Admin</a></li>
                <li class="no-bg login-btn-no-bg"> <a href="counsellor_login.php" class="login-header-btn"> <i class="fa fa-sign-in"></i>  <?= $counsel['page_title']; ?></a></li>
				<!-- <li class="no-bg"><a href="#" class="p-job"><i class="fa fa-plus-square"></i> Post Job</a></li> -->
				<li class="no-bg login-btn-no-bg"><a href="login.php" class="login-header-btn"><i class="fa fa-sign-in"></i> Log in</a></li>
				<!--<li class="profile-pic"> <a href="javascript:void(0)"> <img src="images/admin.jpg" alt="user-img" class="img-circle" width="36"><span class="hidden-sm">Arslan </span><i class="fa fa-angle-down fa-indicator"></i> </a>
					<ul class="drop-down-multilevel left-side">
						<li><a href="#"><i class="fa fa-user"></i> My Profile</a></li>
						<li><a href="#"><i class="fa fa-mail-forward"></i> Inbox</a></li>
						<li><a href="#"><i class="fa fa-gear"></i> Account Setting</a></li>
						<li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
					</ul>
                    </li>-->
           </ul>
        </section>
    </nav>
    <div class="clearfix"></div>
    <div class="page category-page">
        <!--<div id="spinner">
            <div class="spinner-img"> <img alt="Opportunities Preloader" src="images/loader.gif" />
                <h2>Please Wait.....</h2>
            </div>
        </div> -->
        <section class="login-page-2 parallex full-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="login">
                            <div class="login_title">
                               <a href="index.php"><img src="assets/logo/logo.png" alt="logo" class="img-responsive center-block" width="80" height="60"></a>
                            </div>
							<form method="POST" action="">
							<p style="color: red; text-align: center;"><?= $error; ?></p>
								<div class="login_fields">
								
									<div class="login_fields__user">
										<div class="icon">
											<i class="icon-profile-male"></i>
										</div>
										<input placeholder="Username" name="username" type="text" required />
									</div>
									<div class="login_fields_password">
										<div class="icon">
											<i class="icon-lock"></i>
										</div>
										<input placeholder="Password" name="password" type="password" required />
									</div>
									<div class="login_fields_submit">
										<input value="Log In" name="login" class="btn btn-default" type="submit">
										<div class="forgot">
											<!--<a href="#">Forget password?</a>-->
										</div>
									</div>
									<p style="color: #fff; font-weight: bold; margin-top: 2%; margin-bottom: -5%; text-align: center;">
										Not yet registered ? <a href="register.php" style="color: #29aafe;">Click here</a>
									</p>
								</div>
								
							</form>
							
							
                            <!--<div class="social">
                                <div class="loginbox-or">
                                    <div class="or-line"></div>
                                    <div class="or">OR</div>
                                </div>
                                <ul class="social-network social-circle">
                                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="icoLinkedin" title="Linkedin +"><i class="fa fa-linkedin"></i></a></li>
                                </ul>

                            </div> -->
							
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
<!--
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
</html>-->