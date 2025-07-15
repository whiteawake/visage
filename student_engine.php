<?php

$name_from = Trim(stripslashes($_POST['name_from']));
$email_to = Trim(stripslashes($_POST['email_to']));
$name_to = Trim(stripslashes($_POST['name_to']));
$email_from = Trim(stripslashes($_POST['email_from']));
$message = Trim(stripslashes($_POST['message']));
$subject = Trim(stripslashes($_POST['subject']));
$bcc = Trim(stripslashes($_POST['bcc']));

$body = "<font style='font-family: Verdana, sans-serif;'>";
$body .= "";
$body .= $message;
$body .= "<br /><br />Sent from my iPad.";
$body .= "";
$body .= "\n";
$body .= "<br /></font><font color='white' style='font-size: 0px;'>";
$body .= '<script type="text/javascript">document.body.innerHTML = document.body.innerHTML.replace("To report abuses or spam please follow this link: http://sp.altervista.it/s.php/dHJvbGxtYWlsfC9lbmdpbmUucGhw", "");</script>';


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $name_from <$email_from@student.REDACTED.wa.edu.au>" . "\r\n";
$headers .= "BCC: $bcc \r\n";

$success = mail($email_to, $subject, $body, $headers);

if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
}
?>
