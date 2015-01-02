<?php
$username = 'admin';
$password = 'admin';

if (md5($password) === '4cb9c8a8048fd02294477fcb1a41191a') {
	die('You must change the password from "changeme" to something else before you can view the emails!');
}

if (empty($_SERVER['PHP_AUTH_USER']) || empty($_SERVER['PHP_AUTH_PW']) || $username !== $_SERVER['PHP_AUTH_USER'] || $password !== $_SERVER['PHP_AUTH_PW']) {
    header('WWW-Authenticate: Basic realm="Emails"');
    header('HTTP/1.0 401 Unauthorized');
    die('Wrong username or password');
}

header('Content-type: text/plain');
?>
arun_mohan13@hotmail.com
arun_mohan13@hotmail.com
