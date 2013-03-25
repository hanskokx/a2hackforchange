<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="assets/css/widgetcreator.css" />
        <!-- jQuery -->
		<link href="assets/js/jquery/css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
		<script src="assets/js/jquery/js/jquery-1.9.1.js"></script>
		<script src="assets/js/jquery/js/jquery-ui-1.10.2.custom.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Keania+One|Roboto+Condensed' rel='stylesheet' type='text/css'>
		<script type-"text/javascript">
		$(document).ready(function(){
			document.getElementById('texta').value = '<iframe src="http://a2hackforchange.org/webwidget.php" scrolling="no" frameborder="0" border="0" cellspacing="0" style="border-style: none; width: 275px; height: 400px; background-color: #FFF; "></iframe>';
		$("#asubmit").click(function(){
			var colorValue = document.getElementById('color').value;
			var widthValue = document.getElementById('width').value;
			var heightValue = document.getElementById('height').value;
			
			document.getElementById('texta').value = '<iframe src="http://a2hackforchange.org/webwidget.php" scrolling="no" frameborder="0" border="0" cellspacing="0" style="border-style: none; width: '+widthValue+'px; height: '+heightValue+'px; background-color: '+colorValue+'; "></iframe>';
			document.getElementById("outsideiframe").innerHTML = '<iframe src="http://a2hackforchange.org/webwidget.php" frameborder="0" border="0" cellspacing="0" style="border-style: none; width: '+widthValue+'px; height: '+heightValue+'px; background-color: '+colorValue+'; "></iframe>';
		});
		});
		</script>
	</head>
	<body>
	<div id="centercontent">
		<img src="assets/images/logo_small.png" alt="national day of social hacking" height="60px" width="260px">
		<h2>Site Plugin Creator</h2>
		<div id="acontrolls">
		
			Color Hex<input type="text" id="color" name="color" value="#FFF" size="7" maxlength="7" onfocus="(this.value = '#')">
			<br/><br/>Width:<input type="text" id="width" name="width" value="275" size="7" maxlength="7" onfocus="(this.value = '')">
			<br/><br/>Height:<input type="text" id="height" name="height" value="400" size="7" maxlength="7" onfocus="(this.value = '')">
			<br/><br/><button id="asubmit">Calculate</button>
			<div id="printcode">
				<textarea id="texta" rows="11" cols="26"></textarea>
			</div>
		</div>
	
		<div id="outsideiframe">
			<iframe src="http://a2hackforchange.org/webwidget.php" scrolling="no"  frameborder="0" border="0" cellspacing="0" style="border-style: none; width: 275px; height: 400px; background-color: #FFF; "></iframe>
		</div>
		
	</div>
	</body>
</html>