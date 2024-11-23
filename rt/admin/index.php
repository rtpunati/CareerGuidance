<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="../assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="../assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/unix.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/own.css" rel="stylesheet">
</head>

<body class="sidebar-hide">

   

<?php 
ob_start();
//session_start();

$page = "con_dashboard";
$active = "con_dashboard";

	include("layouts/admin.php");
	include("header3.php");

	if(!(isset($_SESSION['login_counsellor']))){
			header("Location: ../../admin.php");
	}
	
	

?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                   
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
               

                <!-- /# STUDENT content -->

                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-header">
                            <h4>Student List</h4>
                        </div>
                        <div class="card-body" style="width:auto;">
                            <table class="table table-responsive table-hover">
                                <tbody>
                                    <tr>
                                      
                                        <td class="no-border">
                                            <h4>Firstname</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Lastname</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Role</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Username</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Password</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Email</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>phone</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Gender</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Country</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Address</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Manage</h4>
                                        </td>
                                        <td class="no-border"></td>
                                    </tr>
                                    <?php
                                    include_once("config.php");

                                    $result = $dbConn->query("SELECT * FROM user ORDER BY id DESC");


                                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                        $t = $row['identity'];

                                        if ($t == "1") {
                                            $role_permission = "Company";
                                        }  else {
                                            $role_permission = "student";
                                        }
                                        echo '<tr>';
                                        echo '<td class="no-border">' . $row['first_name'] . '</td>';
                                        echo '<td class="no-border">' . $row['last_name'] . '</td>';
                                        echo '<td class="no-border">' . $role_permission . '</td>';
                                        echo '<td class="no-border">' . $row['username'] . '</td>';
                                        echo '<td class="no-border">' . $row['password'] . '</td>';
                                        echo '<td class="no-border">' . $row['email'] . '</td>';
                                        echo '<td class="no-border">' . $row['phone'] . '</td>';
                                        echo '<td class="no-border">' . $row['gender'] . '</td>';
                                        echo '<td class="no-border">' . $row['state'] . '</td>';
                                        echo '<td class="no-border">' . $row['address'] . '</td>';


                                        echo "<td class='no-border'><span class='btn btn-primary'><a href=\"user_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></span></td>";
                                        echo '</tr>';

                                        $dbConn = null;
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--END-->

                <!--COUNSELLOR CONTENT-->
                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-header">
                            <h4>Counsellor List</h4>
                        </div>
                        <div class="card-body" style="width:auto;">
                            <table class="table table-responsive table-hover">
                                <tbody>
                                    <tr>
                                 
                                        <td class="no-border">
                                            <h4>ID</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Name</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Role</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Username</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>Password</h4>
                                        </td>
                                        <td class="no-border">
                                            <h4>manage</h4>
                                        </td>
                                    </tr>
                                    <?php
                                    $dbHost = 'localhost';
                                    $dbName = 'career1';
                                    $dbUser = 'root';
                                    $dbPasw = '';
                                    try {
                                         $dbConn = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPasw);
                                         $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        } catch(PDOException $e)
                                        {
                                            echo $e->getMessage();
                                        }

                                    $hi = $dbConn->query("SELECT * FROM add_counsellor ORDER BY cat_id ASC");


                                    while ($row = $hi->fetch(PDO::FETCH_ASSOC)) {
                                        $t = $row['cat_id'];

                                        if ($t == "0") {
                                            $role_permission = "Company";
                                        }  else {
                                            $role_permission = "counsellor";
                                        }
                                        echo '<tr>';
                                        echo '<td class="no-border">' . $row['cat_id'] . '</td>';
                                        echo '<td class="no-border">' . $row['name'] . '</td>';
                                        echo '<td class="no-border">' . $role_permission . '</td>';
                                        echo '<td class="no-border">' . $row['email'] . '</td>';
                                        echo '<td class="no-border">' . $row['password'] . '</td>';
                                        echo "<td class='no-border'><span class='btn btn-primary'><a href=\"user_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></span></td>";
                                        echo '</tr>';

                                        $dbConn = null;
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--END-->
            </div>
            <!-- /# container-fluid -->
        </div>
        <!-- /# main -->
    </div>
    <!-- /# content wrap -->
    



    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->
    <script src="../assets/js/lib/mmc-common.js"></script>
    <script src="../assets/js/lib/mmc-chat.js"></script>
    <!--  Chart js -->
    <script src="../assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../assets/js/lib/chart-js/chartjs-init.js"></script>
    <!-- // Chart js -->

    <!--  Datamap -->
    <script src="../assets/js/lib/datamap/d3.min.js"></script>
    <script src="../assets/js/lib/datamap/topojson.js"></script>
    <script src="../assets/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="../assets/js/lib/datamap/datamap-init.js"></script>
    <!-- // Datamap -->
    <script src="../assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="../assets/js/lib/weather/weather-init.js"></script>
    <script src="../assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <!-- scripit init-->
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
</html>
