<?php
	/*
		PHP mail notify for tradingview alert
		version 1.0 by teddybugs
	*/
	
	$json = file_get_contents("php://input");
	$obj = json_decode($json);
	$pair = $obj->pair;
	$msgg = $obj->message;	

    $to      = 'your-own@email.com';
    $subject = 'Tradingview Alert for Pair:'.$pair;
    $message = $msgg;
    $headers = 'From: your-other-email@email.com'       . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>