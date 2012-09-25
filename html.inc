<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Joveeter List Manager</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel='stylesheet' href='stile.css' type='text/css' media='screen' />
	<link href='http://fonts.googleapis.com/css?family=Alex+Brush|Quantico|IM+Fell+Double+Pica+SC|Flamenco|Special+Elite|Codystar' rel='stylesheet' type='text/css'>
	<link type="text/css" href="css/smoothness/jquery-ui-1.8.23.custom.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
	<script type="text/javascript" src="js/draganddrop.js"></script>

<!--
font-family: 'Alex Brush', cursive;
font-family: 'Quantico', sans-serif;
font-family: 'IM Fell Double Pica SC', serif;
-->
    
	<meta name="description" content="This site SHOULD be a tool to manage you twitter list account" />
	<meta name="keywords" content="twitter, lists, italia " />
	<meta name="language" content="it" />
	<meta name="robots" content="index, follow" />
	
	<meta property="og:title" content="This site SHOULD be a tool to manage you twitter list account" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.joviberton.com/joveeter" />
	<meta property="og:image" content="http://html.net/avatar.png" />
	<meta property="og:site_name" content="Joveeter List Manage" />
	<meta property="fb:admins" content="" />

	
  </head>
  <body>
    <div id="sopra">

		<div id="custom-tweet-button">
			<?php bottone($user); ?>
		</div>

      <h2 class="titolo">Welcome to Joveeter List Manager</h2>
	</div>
    <div id="main">

       <?php if (isset($user)) {  ?>
       <div id="contenitore">
	       <div id="listautenti"></div>
	       <div id="listaliste"></div>
 		</div>
       <?php 	} else { ?>
<h1 class="claim">Joveeter List Manager a tool to manage your twitter list account</h1>
       
<div style='margin:auto;width:600px;padding:40px;'>
Welcome!<br />
This is a tiny tool for manage your lists in your Twitter account <br />
Login and just <b>drag</b> a contact on a list <b>and drop</b> it to add to it. That's all<br />
<p>No data is stored in any way in this tool; it's all in your Twitter account.</p>


<div style="margin:40px 200px;width:170px;display:block;"><a href="./redirect.php" target="_self"  class="bottone">Access with Tweeter</a></div>

</div>      	
      <?php	} ?>

  </body>
</html>
