<?php 
/*


      _                     _      _                             
   _ | |   ___    __ __    (_)    | |_     ___     ___      _ _  
  | || |  / _ \   \ V /    | |    |  _|   / -_)   / -_)    | '_| 
  _\__/   \___/   _\_/_   _|_|_   _\__|   \___|   \___|   _|_|_  
_|"""""|_|"""""|_|"""""|_|"""""|_|"""""|_|"""""|_|"""""|_|"""""| 
"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-' 










*/
function bottone($user){
			if (isset($user)) {  
	       		echo '<a href="./clearsessions.php" target="_self" class="bottone">Disconnet @'.$user->screen_name.' from Tweeter</a>';
	       		echo '<hr style="border:1px #e1e1e1 solid;" />';
	      	} else { 
	      		// echo '<a href="./redirect.php" target="_self"  class="bottone">Access with Tweeter</a>';
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