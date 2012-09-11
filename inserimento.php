<?php
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
require_once('functions.php');

if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}

$access_token = $_SESSION['access_token'];
$connection = connessione(CONSUMER_KEY, CONSUMER_SECRET, $access_token);
//mail('joviberton@gmail.com', 'test su joveeter', $messaggio);

// controllo già inserito.
// se già inserito bom
// se non già inserito inserisco

$user = user($connection);

if (isset($_POST["attori"])){	
	$method = "users/show";
	$option = array('user_id' => $_POST["attori"][1]); // $_POST["attori"][1]; // draggato
	$draggato = ($connection->get($method, $option));
	
	$method = "lists/show";
	$option = array('list_id' => $_POST["attori"][0], 'owner_id' => $user->id ); // $_POST["attori"][0]; // lista
	$lista = ($connection->get($method, $option));
	
	$method = "lists/members/show";
	$option = array('owner_id' => $user->id, 'list_id' => $lista->id, 'slug' => $lista->slug, 'user_id' => $draggato->id, 'screen_name' => $draggato->screen_name, 'include_entities' => 0,'skip_status' => 1);
	$check = ($connection->get($method, $option));
	
	if ($draggato->screen_name == $check->screen_name){
		echo "<h5>presente</h5>";
		} else {
		// inserisco 
		echo "<h5>aggiunto</h5>";
		}

}		
	// refresh
$lists = lists($connection,$user->screen_name);
echo '<div class="lista">'.date('d M y - H:i:s', time()).'<br />+<br />new list</div>';
foreach ($lists->lists as $item){ 
	echo '<div class="lista" id='.$item->id.'>';
	echo $item->name."<br />";
	echo $item->id."<br />";
	echo "utenti ".$item->member_count."</div>";
	}

?>

