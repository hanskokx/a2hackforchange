<!DOCTYPE html>
	<head>
		<title>A2 Hack for Change</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
        
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300italic,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        
		<!-- Stylesheets -->
		<link rel="stylesheet" href="./assets/css/styles.css" media="all" type="text/css" />
        
		<!-- jQuery -->
		<link href="assets/js/jquery/css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
		<script src="assets/js/jquery/js/jquery-1.9.1.js"></script>
		<script src="assets/js/jquery/js/jquery-ui-1.10.2.custom.js"></script>
		<script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
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
		    // The following will highlight the buttons on scroll.
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
		</script>

		<!-- Google Map -->
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>

		    <script type="text/javascript">
				$(document).ready(function() {
				    
				    var $scrollTarget = $(window);
				    
                    $('.nav-item').on('click', function(e) {
                        e.preventDefault();
                        $('.nav-item').removeClass('highlight'); // Remove the 'highlight' class from link if they exists
                        $(this).addClass('highlight'); // Add the 'highlight' tag to the clicked nav item
                        var targetID = $(this).attr('href');
                        var $targetPosition = $(targetID).position();
                        $scrollTarget.stop().scrollTo(($targetPosition.top), 750);
                    });
                    
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
		<!--
		<a href="#about" class='nav-item'><span id="about_btn" class="nav_button">About</span></a>
		<a href="#event" class='nav-item'><span id="event_btn" class="nav_button">Event</span></a>
		<span class="nav_div">&nbsp;</span>
		<a href="#get_involved" class='nav-item'><span id="get_involved_btn" class="nav_button">Help Out</span></a>
		<a href="#faq" class='nav-item'><span id="faq_btn" class="nav_button">FAQ</span></a>
		-->
		
		<a href="#about" class='nav-item nav_button'>About</a>
        <a href="#event" class='nav-item nav_button'>Even</a>
        <span class="nav_div">&nbsp;</span>
        <a href="#help" class="nav-item nav_button">Help Out</a>
        <a href="#faq" class='nav-item nav_button'>FAQ</a>
		
		<div id="right-grad"></div>
	</div>
</div>

<div id="content">
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
	<p style="line-height: 50px">&nbsp;</p>
	<h1 id="event">The Event</h1>
		<span class="text">
			A2 Hack for Change will occur simultaneously as dozens of other Hack for Change events on the National Day of Civic Hacking, June 1-2, 2013.
			<br /><br />
			The event will leverage the expertise and entrepreneurial spirit of those outside federal, state and local government to drive meaningful, technology-based solutions for federal, state and local government. It demonstrates what's possible when we all work together to strengthen our society and our lives. YOU can make a difference no matter where you live. 
			<br /><br />
			<h2>Benefits</h2>
			You should participate in National Day of Civic Hacking because the toughest challenges are not one community’s alone to solve. This is a unique opportunity to get involved, connect with others like yourself, and develop technology that will make the world a better place.
			<ul>
				<li>Demonstrate a commitment to the principles of transparency, participation, and collaboration.</li>
				<li>Exercise a government’s interest in using open data and technology, in partnership with others, to address your local community’s felt needs.</li>
				<li>Liberate open data that can inform better problem solving in every community.</li>
				<li>Continue to collectively map a national innovation ecosystem and create new access points to that system.</li>
				<li>Engage citizens in cities with little technology infrastructure to contribute to changing their community through open source, open data, entrepreneurship and code development.</li>
				<li>Promote Science, Technology, Engineering and Mathematics (STEM) education by encouraging students to utilize open technology for solutions to real challenges.</li>
				<li>Encourage large scale partnership and mutual understanding.</li>
			</ul>
		</span>

	<div class="divider"></div>
	<p style="line-height: 50px">&nbsp;</p>
	<h1 id="help">Get involved</h1>
		<span class="text">
			There are many ways you can get involved in A2 Hack for Change. Our success will lie in government agencies, companies, organizations, universities and citizens working together to make a difference.
			<br /><br />
			We need volunteers from all backgrounds to help make this event a success.  Whether you would like to volunteer your skills, offer sponsorship, or help organize the event, we need you!
		</span>


	<div class="divider"></div>
	<p style="line-height: 50px">&nbsp;</p>
	<h1 id="faq">FAQ</h1>
		<span class="text">
			<h2>What is A2 Hack for Change and the National Day of Civic Hacking?</h2>
				National Day of Civic Hacking, and subsequently A2 Hack for Change, is a national initiative to promote transparency, participation and collaboration between governments and citizens.
			<h2>Who can participate in A2 Hack for Change?</h2>
				Anyone can participate in any National Day of Civic Hacking event, throughout the country.  To have a successful event, we are going to need people from all backgrounds, with a broad range of skills.  We'll need engineers, technologists, scientists, designers, artists, educators, students, entrepreneurs -- anyone who has a passion for changing their community and is willing to contribute.
			<h2>Can my company or organization get involved? How?</h2>
				Absolutely! We're looking for help in the following areas:
				<ol>
					<li>Contribute data, code, or a challenge to support the event.</li>
					<li>Support the planning of A2 Hack for Change by contributing resources or funding.</li>
					<li>Promote A2 Hack for Change and encourage subject matter experts, employees, and citizens to participate.</li>
					<li>Attend A2 Hack for Change on June 1-2, 2013!</li>
				</ol>
			<h2>Can city, state and federal government help?</h2>
				We are looking for city, state and federal government agencies who are interested in supporting events in their communities around the nation. Support by government and/or city leadership may include:
				<ol>
					<li>Contribute data, code, or a challenge to support the event.</li>
					<li>Promote A2 Hack for Change and encourage subject matter experts, employees, and citizens to participate.</li>
					<li>Attend A2 Hack for Change on June 1-2, 2013!</li>
				</ol>
			<h2>When is A2 Hack for Change taking place?</h2>
				A2 Hack for Change will be taking place simultaneously as dozens of National Day of Civic Hacking events around the country on June 1-2, 2013.
			<h2>I hear about "hackers" in the news.  Isn't hacking bad?</h2>
				To us, a hacker is someone who uses a minimum of resources and a maximum of brainpower and ingenuity to create, enhance or fix something. Although in some circumstances it is used in a negative sense, the term is not inherently negative, nor does it even have to be related to technology.
			<h2>How can I contact you for more information?</h2>
				Looking to sponsor? Help organize? Volunteer your skills? Or, perhaps you're just looking for more information.  Whatever the case is, go ahead and <a href="mailto:&#104;&#101;&#108;&#108;&#111;&#064;&#097;&#050;&#104;&#097;&#099;&#107;&#102;&#111;&#114;&#099;&#104;&#097;&#110;&#103;&#101;&#046;&#111;&#114;&#103;?subject=A2%20Hack%20for%20Change">send us an email</a>.
			<h2>Who is leading A2 Hack for Change?</h2>
				Lifelong tech enthusiast and Michigan resident, Hans Kokx.
			<h2 id="location">Where is the event going to be held?</h2>
				A2 Hack for Change will be hosted at the Tech Brewery, at 1327 Jones Dr, Ann Arbor, MI.
				<center><div id="map-canvas"/></div><center>
		</span>

<p style="line-height: 35px">&nbsp;</p>

</div><!-- end content -->

<div id="footer">
	<a href="mailto:&#104;&#101;&#108;&#108;&#111;&#064;&#097;&#050;&#104;&#097;&#099;&#107;&#102;&#111;&#114;&#099;&#104;&#097;&#110;&#103;&#101;&#046;&#111;&#114;&#103;?subject=A2%20Hack%20for%20Change"><span id="contact"></span></a>
</div>

</body>
</html>
