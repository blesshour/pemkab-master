<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
        'message'=>'"Suara Anda" sudah masuk ke sistem kami! Admin akan memproses data anda, mohon menunggu dengan sabar untuk balasan dari kami. Mohon cek email dan/atau website kami secara berkala. Terima Kasih! '
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $category = @trim(stripslashes($_POST['category'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'email@email.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'category: ' . $category . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $category, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;