<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$sub = $_POST['subject'];
	$dep = $_POST['department'];
	$message = $_POST['message'];
    
	
	$to      = 'support@hostingspell.com';
	$subject = 'Ticket - Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
	$status = mail($to, $sub, $dep, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
		echo'hii';
	
		$res['message'] = 'Your message has been send, I will respond soon.';
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail us to support@hostingspell.com';
	}
	
	
	echo json_encode($res);
}

?>