<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="assets/css/widget.css" />
        <!-- jQuery -->
		<link href="assets/js/jquery/css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
		<script src="assets/js/jquery/js/jquery-1.9.1.js"></script>
		<script src="assets/js/jquery/js/jquery-ui-1.10.2.custom.js"></script>
		<script type-"text/javascript">
		$(document).ready(function(){

		$("#asubmit").click(function(){
			var colorValue = document.getElementById('color').value;
			var widthValue = document.getElementById('width').value;
			var heightValue = document.getElementById('height').value;
			

			document.getElementById("outsideiframe").innerHTML = '<iframe name="iframe" id="iframe" src="http://a2hackforchange.org/webwidget.php" scrolling="no"  frameborder="0" border="0" cellspacing="0" style="border-style: none; width: '+widthValue+'px; height: '+heightValue+'px; background-color: '+colorValue+'; "></iframe>';
		});
		});
		</script>
	</head>
	<body>
	Background-Color hex:<input type="text" id="color" value="#FFF" size="8" maxlength="12" onfocus="(this.value = '#')">
	<br>Width:<input type="text" id="width" value="275" size="7" maxlength="7" onfocus="(this.value = '')">
	<br>Height:<input type="text" id="height" value="405" size="7" maxlength="7" onfocus="(this.value = '')">
	<br><button id="asubmit">Calculate</button>

	<div id="outsideiframe">
		<iframe name='iframe' id="iframe" src="http://a2hackforchange.org/webwidget.php" scrolling="no"  frameborder="0" border="0" cellspacing="0" style="border-style: none; width: 275px; height: 400px; background-color: #FFF; "></iframe>
	</div>
	</body>
</html>