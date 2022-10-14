<?php
  $to = 'anib.maharjan@lunivatech.com';
  $subject = 'Career mail';
  $message = 'First Name: ' .$_POST['template-jobform-fname']."/r/n";
  $message = 'Last Name: ' .$_POST['template-jobform-lname']."/r/n";
  $message = 'E-mail: ' .$_POST['template-jobform-email']."/r/n";
  $message = 'Age: ' .$_POST['template-jobform-age']."/r/n";
  $message = 'Address: ' .$_POST['template-jobform-city']."/r/n";
  $message = 'Position: ' .$_POST['template-jobform-position']."/r/n";
  $message = 'Expected Salery: ' .$_POST['template-jobform-salary']."/r/n";
  $message = 'Start Date: ' .$_POST['template-jobform-start']."/r/n";
  $message = 'Website: ' .$_POST['template-jobform-website']."/r/n";
  $message = 'Experience: ' .$_POST['template-jobform-experience']."/r/n";
  $message = 'Application: ' .$_POST['template-jobform-application']."/r/n";
  $message = 'CV: ' .$_POST['template-jobform-cvfile']."/r/n";
  $message = 'Bot Check: ' .$_POST['template-jobform-botcheck']."/r/n";
  // $message = 'Address: ' .$_POST['']."/r/n";

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