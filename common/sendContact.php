<?php 
    $to = 'anib.maharjan@lunivatech.com';
    $subject = 'Contact Us';
    $message = 'Name: '.$_POST['contactform-name']."\r\n";
    $message .= 'Email: '.$_POST['contactform-email']."\r\n";
    $message .= 'Subject: '.$_POST['subject']."\r\n";
    $message .= 'Message: '.$_POST['contactform-message'];

    $headers = "From: anib.maharjan@lunivatech.com";
    $headers .='X-Mailer: PHP/' . phpversion();
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

    if(mail($to,$subject,$message, $headers)){
        header("Refresh:0");
    }else{
        header("Location: http://192.168.100.74:90/lunivatech");
        exit();
    }
?>