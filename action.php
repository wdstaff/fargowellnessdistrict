

<?php

ob_start();

header('Location: https://fargowellnessdistrict.com/');

// the message
$msg = $_POST['name'].' '.$_POST['date'].' '.$_POST['email'].' '.$_POST['tel'].' '.$_POST['subject'];

// wordwrap
$msg = wordwrap($msg,70);

// send Email
mail("beth@fargowellnessdistrict.com","Website Message",$msg);
die();

?>
