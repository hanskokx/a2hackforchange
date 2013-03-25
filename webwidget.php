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
		<script type="text/javascript">
		$(document).ready(function(){
			$('#mapimage').hide();
		$('#front').click(function() {
			
        	$("#logo").toggle();
        	$("#mapimage").toggle();
        });
		});
		</script>
	</head>
	<body>
		<div id="front">
			<div id="logo"></div>
			<div id="mapimage"></div>
		</div>
		
	</body>
</html>