<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Joveeter List Manager</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel='stylesheet' href='stile.css' type='text/css' media='screen' />
	<link href='http://fonts.googleapis.com/css?family=Alex+Brush|Quantico|IM+Fell+Double+Pica+SC' rel='stylesheet' type='text/css'>
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
      <h2 class="titolo">Welcome to Joveeter List Manager.</h2>
	</div>
    <div id="main">
      <h1 class="claim">This site SHOULD, one day, be a tool to manage you twitter list account. </h1>
      
      
      
		<div id="custom-tweet-button">
			<?php bottone($user);  ?>
		</div>
      
            
      <hr />


       <?php if (isset($user)) {  ?>
       <div id="contenitore">
	       <div id="listautenti">
		 			 
			</div>
		
		
	       <div id="listaliste">
	       
	       			 		
	 		</div>
 		</div>
       <?php 	} else { ?>
    <p>
      <pre>
      	<?php print_r($content); ?>
      </pre>
    </p>
      	
      <?php	} ?>

  </body>
</html>
