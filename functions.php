<?php 

function bottone($user){
			if (isset($user)) {  
	       		echo '<a href="./clearsessions.php" target="_self" class="bottone">Disconnet @'.$user->screen_name.' from Tweeter</a>';
	      	} else { 
	      		echo '<a href="./redirect.php" target="_self"  class="bottone">Access with Tweeter</a>';
			 } 
	}

function connessione($CONSUMER_KEY, $CONSUMER_SECRET, $access_token){	
	return new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
	
	}


function user($connection){
	return $connection->get('account/verify_credentials');
	}


function friends($connection,$option){
	
	if ($option){
		$option=array('cursor' => $option);
		};
	$method = 'friends';
	return $connection->get($method, $option);
	}

function lists($connection,$screen_name){
	$method = $screen_name."/lists";
	return $connection->get($method);
	}

?>