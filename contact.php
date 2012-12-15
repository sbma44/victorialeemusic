<?php
include('settings.php');

// simple function to test for non-emptiness of all three fields
function message_complete($fields) {
	$t = 1;
	foreach($fields as $x) {
		$t = $t * strlen(trim($x));
	}
	return ($t>0);
}

$inputName = $_POST['inputName'];
$inputEmail = $_POST['inputEmail'];
$inputMessage = $_POST['inputMessage'];

if (!message_complete(array($inputName, $inputEmail, $inputMessage))) {
	$result = 'incomplete';
}
elseif (!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
    $result = 'email';
}
else {
	$result = 'thanks';

	$subject = '[victorialeemusic] Message from ' . $inputName . ' <' . $inputEmail . '>';
	
	$remote_addr = $_SERVER['REMOTE_ADDR'];
	$remote_host = $_SERVER['REMOTE_HOST'];
	$http_referer = $_SERVER['HTTP_REFERER'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$request_time = $_SERVER['REQUEST_TIME'];

	$message = <<<MESSAGE
You have received a message from $inputName <$inputEmail> via victorialeemusic.com.
-------------------------------------------------------------------------------
$inputMessage
-------------------------------------------------------------------------------
If you wish to respond to them you may do so by replying to this message.

Submission Information:
$remote_addr / $remote_host
$user_agent
Referer: $http_referer
Timestamp: $request_time
MESSAGE;
$headers = 'From: contact@victorialeemusic.com' . "\r\n" .
    'Reply-To: ' . $inputEmail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail(EMAIL_ADDRESS, $subject, $message, $headers);
}

if ($_POST['nojs']=='true') {	
	header('Location: index.php?q=' . $result);	
}
else {
	header('Content-type: application/json');
	print json_encode(array('result' => $result));	
}