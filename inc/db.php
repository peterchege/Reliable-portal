<?php
if ($_SERVER['DOCUMENT_ROOT'] == 'C:/xampp/htdocs') {
	//make sure vhost file in apache folder has same information as $_SERVER['DOCUMENT_ROOT'
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$db = mysqli_connect('localhost', 'root', '', 'reliable_portal');
} else {
	$db = mysqli_connect('localhost', 'vinehubc_apa_admin', 'apa_admin', 'vinehubc_apa');
}


if (!$db) {
	echo 'Database connection unsuccessful ' . mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
}

date_default_timezone_set("Africa/Nairobi");
$currentTime = time();
$dateTime = strftime("%d,%B %Y ", $currentTime);
