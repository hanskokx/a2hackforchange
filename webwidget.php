<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="assets/css/widget.css" />
        <link href='http://fonts.googleapis.com/css?family=Keania+One|Roboto+Condensed' rel='stylesheet' type='text/css'>

        <!-- jQuery -->
		<link href="assets/js/jquery/css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
		<script src="assets/js/jquery/js/jquery-1.9.1.js"></script>
		<script src="assets/js/jquery/js/jquery-ui-1.10.2.custom.js"></script>
		<script src="assets/js/jquery.flip.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#side2').hide();
			i=0;
			$('body').click(function() {
        		//$("#side1").toggle();
        		//$("#side2").toggle();
        			i++;
			        if(i % 2 == 0){
			        	$("#flipbox").revertFlip()
			        }
			        else {
			        $("#flipbox").flip({
						direction:'lr',
						color:'white',
						content:'<div id="side2"><div id="logo"></div><div id="mapimage"></div></div>'
					})
			        }
			    
        		
				
        	});
		});
		</script>
	</head>
	<body>
		
			<div id="flipbox">
				<div id="centercontent">
				<img src="assets/images/logo.png" alt="national day of social hacking" height="60px" width="260px">
				<a href="http://a2hackforchange.org" target="_blank" class="classname">Ann Arbor</a>
				<h2>June 1-2, 2013</h2>
				</div>
				<div id="abouttext">The event will leverage the expertise and entrepreneurial spirit of those outside federal, state and local government to drive meaningful, technology-based solutions for federal, state and local government. It demonstrates what's possible when we all work together to strengthen our society and our lives. YOU can make a difference no matter where you live. Head to <a href="http://hackforchange.org/" target="_blank">hackforchange.org</a> for more info.</div>
				
			</div>
			<div id="side2">
				<div id="logo"></div>
				<div id="mapimage"></div>
			</div>
		<div id="front"></div>
		
	</body>
</html>