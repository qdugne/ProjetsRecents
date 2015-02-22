<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Quentin Dugne" />
	<meta name="description" content="Le site d'un jeune dev web motivé ayant quelques bagages" />
	<meta name="keywords" content="Developpement web, webdesign, infographie" />
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" href="design/design.css" title="Design" type="text/css" media="all" /> 	

	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
	
	<script src="js/jquery.mCustomScrollbar.js"></script>
	<script src="js/jquery.mousewheel.js"></script>
	<link href="js/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,600' rel='stylesheet' type='text/css'>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<script type="text/javascript">$(document).ready(function() 
	{ 
		$("#tabs").tabs();
	});</script>
	<title>Bienvenu</title>

</head>
<body>

<?php
echo "Vous avez PHP ".phpversion();
$gd_info = gd_info();
if(!$gd_info)
	die("<br />La librairie GD n'est pas installée !");

echo "<br />Vous avez GD {$gd_info['GD Version']}";
?>
<!--
<script type="text/javascript">  
var timer1;
function scrollDiv(divId, depl) {
  var scroll_container = document.getElementById(divId);
  scroll_container.scrollLeft -= depl;
  timer1 = setTimeout('scrollDiv("'+divId+'", '+depl+')', 10);
}
</script>

<div style="float:left; width: 30px">
   <input type="button" value="«" style="height: 100px" onmousedown="scrollDiv('MyDiv', 3)" onmouseup="clearTimeout(timer1)" />
</div>
<div id="MyDiv" style="float: left; width: 150px; height: 100px; border: 1px solid; overflow: hidden">
   <div style="height: 100px; width: 600px"><img src="picture2.jpg" alt="image large"  /></div>
</div>
<div style="float:left; width: 30px">
   <input type="button" value="»" style="height: 100px" onmousedown="scrollDiv('MyDiv', -3)" onmouseup="clearTimeout(timer1)" />
</div>

<br style="clear:both" />-->

<script type="text/javascript">

function doScrollLeft(el, p)
{
	
  el.scrollLeft = p;
}

</script>

<div  class="span12" id="aDiv" style="width: 100px; height: 200px; overflow: hidden;">
	 <div style="height: 100px; width: 400px;">
		 <div class="row-fluid"> 
			<div class="span2" style="width: 100px; height: 100px">A</div>
			<div class="span2" style="width: 100px; height: 100px">B</div>
			<div class="span2" style="width: 100px; height: 100px">C</div>
		</div>
	</div>
</div>
<br>
<input type="button" value="Défile jusqu'à B"
       onclick="doScrollLeft(document.getElementById('aDiv'), +100);"
>
<input type="button" value="Défile jusqu'à C"
       onclick="doScrollLeft(document.getElementById('aDiv'), +200);"
>
<input type="button" value="Défile jusqu'à A"
       onclick="doScrollLeft(document.getElementById('aDiv'), -0);"
>
</body>
</html>