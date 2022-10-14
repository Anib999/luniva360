<?php 
    $to = 'anib.maharjan@lunivatech.com';
    $subject = 'Demo Request';
    $message .= 'Organization Name: '.$_POST['organization_name']."\r\n";
    $message = 'Name: '.$_POST['name']."\r\n";
    $message .= 'Contact No: '.$_POST['contact_no']."\r\n";
    $message .= 'Email: '.$_POST['email_address']."\r\n";
    $message .= 'Address: '.$_POST['address']."\r\n";
    $message .= 'Demo for: '.$_POST['demo_for'];

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