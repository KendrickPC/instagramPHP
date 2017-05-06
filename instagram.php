<?php
$username = 'brotherkendrick';
$json = file_get_contents('http://www.instagram.com/'_$username_'/media/');
$instagram_feed_data = json_decode($json, true);

?>