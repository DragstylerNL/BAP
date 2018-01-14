<?php

$to ='24314@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: '.$_POST['from'];

mail($to,$subject,$message,$headers);

echo 'Uw mail is verstuurd. Thx for the nudes';

?>