<?php
/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */

/* Load required lib files. */
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
require_once('functions.php');

/* If access tokens are not available redirect to connect page. */
if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}
/* Get user access tokens out of the session. */
$access_token = $_SESSION['access_token'];

/* Create a TwitterOauth object with consumer/user tokens. */
//$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
$connection = connessione(CONSUMER_KEY, CONSUMER_SECRET, $access_token);

/* If method is set change API call made. Test is called by default. */
// $user = $connection->get('account/verify_credentials');

$user = user($connection);

$friends = friends($connection, $_GET['cursor']);

$lists = lists($connection,$user->screen_name);


$content = $lists;

/* Include HTML to display on the page */
include('html.inc');

?>