<?php
$db = mysqli_connect('localhost', 'root', '', 'reliable_portal');


if (!$db) {
	echo 'Database connection unsuccessful ' . mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
}

date_default_timezone_set("Africa/Nairobi");
$currentTime = time();
$dateTime = strftime("%d,%B %Y ", $currentTime);
