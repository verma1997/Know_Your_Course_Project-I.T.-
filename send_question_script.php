<?php
$email = "priyanshuverma036@gmail.com";
$to = "priyanshuverma185@gmail.com";
$subject = "Kuch Bi";
$headers = "From: $email\n";
$message = "Message";

$user = $email;
$usersubject = "Thank You";
$userheaders = "From: priyanshuverma036@gmail.com\n";
$usermessage = "Thank You for subscribing to our mailing list.";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
?>