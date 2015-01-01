<?php
header('Content-type: application/json');

if (preg_match('#.*@.*\..*#', $_REQUEST['email'])) {
	if (false === @file_put_contents('emails.php', trim($_REQUEST['email']) . "\n", FILE_APPEND)) {
		$response = array('success' => false, 'error' => 'Cannot write to emails.php. Please follow server setup instructions.');
	} else {
		$response = array('success' => true);
	}
} else {
	$response = array('success' => false, 'error' => 'Please enter a valid email address');
}

echo json_encode($response);