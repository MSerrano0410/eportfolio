<?php
/*
 * This is the PHP code used to connect to, grab, and stylize my tweets.
 * For security, the OAuth and consumer keys and tokens are in a separate config (.ini) file.
 */
require_once ("twitteroauth-0.5.1/autoload.php");
use Abraham\TwitterOAuth\TwitterOAuth;

function getConnectionWithAccessToken($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret) {
	$connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);
	return $connection;
}
	
$tokens=parse_ini_file('config/twitter.ini');

$connection = getConnectionWithAccessToken($tokens['consumer_key'], $tokens['consumer_secret'], 
		$tokens['oauth_token'], $tokens['oauth_token_secret']);

$content = $connection->get("statuses/user_timeline");
foreach($content as $key => $object) {
	if($key == 3)
		break;//limits to 3 entries
		
	print_r('<div class = "tweet">');
	$arr = get_object_vars($object);
	$text = $arr['text'];
		
	foreach($arr['entities']->urls as $url) {
		$expurl = $url->url;
		$text = str_replace($expurl, '<a href = "' . $expurl . '" target = "_blank">' .
				$expurl . '</a>',$text);
	}
		
	print_r($text . '<br />');
	print_r('<span class = "tweet_handle"><a target = "_blank" href = "https:\/\/twitter.com/' . $arr['user']->screen_name . '">@' .
			$arr['user']->screen_name . '</a></span><br />');//Twitter handle of user with link.
	print_r('<span class = "small_date">' . date("jS F Y", strtotime($arr['created_at'])) . "</span><br />");
	print_r("</div>");
}