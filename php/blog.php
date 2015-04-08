<?php
$rss = new DOMDocument();
$rss->load('http://smorgastech.wordpress.com/feed/');
$counter = 3;
foreach ($rss->getElementsByTagName('item') as $node) {
	if ($counter == 0)
		break;
	$title = $node->getElementsByTagName('title')->item(0)->nodeValue;
	$date = date(' F jS, Y', strtotime($node->getElementsByTagName('pubDate')->item(0)->nodeValue));
	$link = $node->getElementsByTagName('link')->item(0)->nodeValue;
	echo '<span class = "blog_entry_title"><a href = "' . $link . '" target = "_blank">' . $title . '</a></span>' . 
			'<br /><span class = "small_date">' . $date . '</span><br /><br />';
	$counter--;
}