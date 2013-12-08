<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Contact | Juliana Lazzaro - Artist, NYC</title>
	<meta name="description" content="For studio visits contact Juliana Lazzaro here">
	<meta name="author" content="Juliana Lazzaro">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">

	<!-- LE JAVASCRIPT
  ================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript"></script>
	
		<!-- Typekit
		================================================== -->
		<script type="text/javascript" src="//use.typekit.net/kta0xjw.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>

<body class="contact">
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-3641392-16']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<!-- Primary Page Layout
	================================================== -->

	<header class="header clearfix">
		<div class="container wrapper">
			<a href="http://julianalazzaro.com" title="Juliana Lazzaro">
				<img class="logo" src="images/juliana-lazzaro.png" width="300" height="66" alt="Juliana Lazzaro">
			</a>
		
			<nav class="menu">
				<ul>
					<!--<li><a href="index.html">Home</a></li>-->
					<li><a href="work.html">Work</a></li>
					<li><a href="biography.html">Bio</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container wrapper">
		<div class="padding">
			<h1>contact</h1>
		
			<?php
			if (isset($_REQUEST['email']))
			//if "email" is filled out, send email
			  {
			  //send email
			  $email = $_REQUEST['email'] ;
			  $subject = "JulianaLazzaro.Com Web Message";
			  $message = "Name: " . $_REQUEST['name'] ."\r";
			  $message .= "Message: " . $_REQUEST['message'] ;
			  mail("francesco@kinopicz.com, julianalazzaro@gmail.com", $subject,
			  $message, "From:" . $email);
			  echo "Thank you for your inquiry. Please expect a reply within one business day.";
			  }
			else
			//if "email" is not filled out, display the form
			  {
			  echo "<form method='post' action='contact.php'>
			  Name: <input name='name' type='text'><br>
			  Email: <input name='email' type='text'><br>
			  Message (please include your telephone number):<br>
			  <textarea name='message' rows='12' cols='40'>
			  </textarea><br>
			  <input type='submit' value='Send Message'>
			  </form>";
			  }
			?>			
			
		</div>
	</div><!-- container wrapper -->

	<footer class="clearfix">
		<div class="container wrapper">
			<p class="copyright">&copy; 2012 Juliana Lazzaro - All Rights Reserved</p>
			<p class="credits">Site by: <a href="http://kinopicz.com" target="_blank">Kinopicz American</a></p>
		</div>
	</footer>

<!-- End Document
================================================== -->
</body>
</html>