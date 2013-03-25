

<!DOCTYPE html>
	<head>
		<title>A2 Hack for Change</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->

		<!-- Stylesheets -->
		<link rel="stylesheet" href="./assets/css/styles.css" media="all" type="text/css" />

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300italic,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

		<!-- jQuery -->
		<link href="assets/js/jquery/css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
		<script src="assets/js/jquery/js/jquery-1.9.1.js"></script>
		<script src="assets/js/jquery/js/jquery-ui-1.10.2.custom.js"></script>
		<script type="text/javascript">
		$(window).scroll(function () {
		
			var top = $(document).scrollTop();
			//document.getElementById("topheader").innerHTML = top;
			if (top > 347) {
		        $("#header").addClass("navup");
		    }
		    else {
		    	$("#header").removeClass("navup");
		    }

		    var oabout = $("#about").offset().top;
		    var oevent = $("#event").offset().top;
		    var owho = $("#who").offset().top;
		    var ofaq = $("#faq").offset().top;
		    // The following will highlight the buttons on scroll. if the height of the text changes,
		    // all of the following numbers may be adjusted to match to new the new pixel heights.
		    if (top > oabout && top < oevent)
		    {
		    	$("#about_btn").addClass("highlight");
		    }
		    else{
		    	$("#about_btn").removeClass("highlight");
		    }

		    if (top > oevent && top < owho)
		    {
		    	$("#event_btn").addClass("highlight");
		    }
		    else{
		    	$("#event_btn").removeClass("highlight");
		    }

		    if (top > owho && top < ofaq)
		    {
		    	$("#get_involved_btn").addClass("highlight");
		    }
		    else{
		    	$("#get_involved_btn").removeClass("highlight");
		    }

		    if (top > ofaq)
		    {
		    	$("#faq_btn").addClass("highlight");
		    }
		    else{
		    	$("#faq_btn").removeClass("highlight");
		    }
		});
		$(document).ready(function(){
			$("#about_btn").mouseover(function(){
				$("#about").addClass("highlight");
			});
			$("#about_btn").mouseleave(function(){
				$("#about").removeClass("highlight");
			});

			$("#event_btn").mouseover(function(){
				$("#event").addClass("highlight");
			});
			$("#event_btn").mouseleave(function(){
				$("#event").removeClass("highlight");
			});

			$("#get_involved_btn").mouseover(function(){
				$("#who").addClass("highlight");
			});
			$("#get_involved_btn").mouseleave(function(){
				$("#who").removeClass("highlight");
			});

			$("#faq_btn").mouseover(function(){
				$("#faq").addClass("highlight");
			});
			$("#faq_btn").mouseleave(function(){
				$("#faq").removeClass("highlight");
			});
		});
		</script>

		<!-- Start of Woopra Code -->
			<script type="text/javascript">
			function woopraReady(tracker) {
			    tracker.setDomain('a2hackforchange.org');
			    tracker.setIdleTimeout(300000);

			    // Make sure you add the visitor properties before the track() function.
			    tracker.addVisitorProperty('name', '$account.name');
			    tracker.addVisitorProperty('email', '$account.email');
			    tracker.addVisitorProperty('company', '$account.company');

			    tracker.trackPageview({type:'pageview',url:window.location.pathname+window.location.search,title:document.title});
			    return false;
			}
			(function() {
			    var wsc = document.createElement('script');
			    wsc.src = document.location.protocol+'//static.woopra.com/js/woopra.js';
			    wsc.type = 'text/javascript';
			    wsc.async = true;
			    var ssc = document.getElementsByTagName('script')[0];
			    ssc.parentNode.insertBefore(wsc, ssc);
			})();
			</script>
		<!-- End of Woopra Code -->
	</head>
<body>

<div id="topheader"><div id="headerimg"></div></div>
<div id="header" class="shadow">
	<div class="nav">
		<div id="left-grad"></div>
		<a href="#about"><span id="about_btn" class="nav_button">About</span></a>
		<a href="#event"><span id="event_btn" class="nav_button">Event</span></a>
		<span class="nav_div">&nbsp;</span>
		<a href="#get_involved"><span id="get_involved_btn" class="nav_button">Help Out</span></a>
		<a href="#faq"><span id="faq_btn" class="nav_button">FAQ</span></a>
		<div id="right-grad"></div>
	</div>
</div>

<div id="content">
	<a name="about"></a>
	<p style="line-height: 150px">&nbsp;</p>
	<h1 id="about">What's happening?</h1>
		<span class="text">
			The National Day of Civic Hacking is a national event that will take place June 1-2, 2013, in cities across the nation. The event will bring together citizens, software developers, and entrepreneurs from all over the nation to collaboratively create, build, and invent new solutions using publicly-released data, code and technology to solve challenges relevant to our neighborhoods, our cities, our states and our country. The National Day of Civic Hacking will provide citizens an opportunity to do what is most quintessentially American: roll up our sleeves, get involved and work together to improve our society.
			<br /><br />
			The event will leverage the expertise and entrepreneurial spirit of those outside federal, state and local government to drive meaningful, technology-based solutions for federal, state and local government. It demonstrates what's possible when we all work together to strengthen our society and our lives. YOU can make a difference no matter where you live.
			<br /><br />
			Ann Arbor is proud to participate in this national event by hosting our very own A2 Hack for Change.  Occuring simultaneously with dozens of events throughout the country, we aim to show the rest of the world what Ann Arbor is made of.
			<br /><br />
			By leveraging public datasets, the goal of the A2 Hack for Change is to improve the lives of all the peoples in and around Ann Arbor.  Creativity and ingenuity are going to play key roles in determining how the community can best be served by what we aim to create.
		</span>

	<div class="divider"></div>
	<a name="event"></a>
	<p style="line-height: 50px">&nbsp;</p>
	<h1 id="event">The Event</h1>
		<span class="text">
			A2 Hack for Change will occur simultaneously as dozens of other Hack for Change events on the National Day of Civic Hacking, June 1-2, 2013.
		</span>

	<div class="divider"></div>
	<a name="get_involved"></a>
	<p style="line-height: 50px">&nbsp;</p>
	<h1 id="who">Who</h1>
		<span class="text">
			We need volunteers from all backgrounds to help make this event a success.  Whether you would like to volunteer your skills, offer sponsorship, or help organize the event, we need you!
		</span>


	<div class="divider"></div>
	<a name="faq"></a>
	<p style="line-height: 50px">&nbsp;</p>
	<h1 id="faq">FAQ</h1>
		<span class="text">
			<h2>How can I contact you for more information?</h2>
			Looking to sponsor? Help organize? Volunteer your skills? Or, perhaps you're just looking for more information.  Whatever the case is, go ahead and <a href="mailto:&#104;&#101;&#108;&#108;&#111;&#064;&#097;&#050;&#104;&#097;&#099;&#107;&#102;&#111;&#114;&#099;&#104;&#097;&#110;&#103;&#101;&#046;&#111;&#114;&#103;?subject=A2%20Hack%20for%20Change">send us an email</a>.
		</span>

<p style="line-height: 35px">&nbsp;</p>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>

    <script type="text/javascript">
		$(document).ready(function() {
		//if you change the address of the venue, update the latitude and longitude to match, use http://www.latlong.net/convert-address-to-lat-long.html
        var myLatlng = new google.maps.LatLng(42.292867,-83.734420);
        var mapOptions = {
          zoom: 6,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        //update this text to update the infoWindow text in google maps, also note the title below for mouseover text
        var contentString = '<h2>Tech Brewery</h2><span>1327 Jones Drive, Ann Arbor, MI 48105</span>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Tech Brewery, 1327 Jones Drive'
        });
        infowindow.open(map,marker);
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
        });
        });
    </script>

<h1 id="location">Location</h1>
<span class="text">
	<center><div id="map-canvas"/></div><center>
</span>


</div><!-- end content -->

<div id="footer">
	<a href="mailto:&#104;&#101;&#108;&#108;&#111;&#064;&#097;&#050;&#104;&#097;&#099;&#107;&#102;&#111;&#114;&#099;&#104;&#097;&#110;&#103;&#101;&#046;&#111;&#114;&#103;?subject=A2%20Hack%20for%20Change"><span id="contact"></span></a>
</div>

</body>
</html>
