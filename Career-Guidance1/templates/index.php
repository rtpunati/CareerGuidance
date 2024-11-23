<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv='refresh' content ='3; url=http://127.0.0.1/Career-Guidance/index.php'>
		</head>
		<body>
		<centre>
			<div style="
    height: 200px;
    width: 400px;

    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -200px;">
	
	<img src="<?= "assets/logo/".$details['logo']?>" alt="logo" class="img-responsive" width="80" height="50">
	<h1> Welcome</h1>
	<h3> Advancing Placements </h3>
	<h4> Please Wait While we Redirect you to our Page </h4>
	<h6> Not Redirected?? <a href="http://127.0.0.1/Career-Guidance/index.php">Click Here</a></h6>
	</div>
</centre>
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
