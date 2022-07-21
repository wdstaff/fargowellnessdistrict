<html>
<head>
  <meta http-equiv="Content-Security-Policy" content="script-src 'self' https://www.google-analytics.com/ https://kit.fontawesome.com https://tag.simpli.fi/sifitag/9ac9d0f0-ef72-0137-6109-06659b33d47c https://api.livechatinc.com/v3.3/customer/action/get_configuration?license_ https://api.livechatinc.com/v3.3/customer/action/get_localization?license_i https://api.livechatinc.com/v3.3/customer/action/get_dynamic_configuration https://cdn.livechatinc.com/tracking.js https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js http://www.googletagmanager.com/gtag/js https://i.simpli.fi/p" /></head>
<body>

<?php header('Location: https://fargowellnessdistrict.com');

// the message
$msg = $_POST['name'].' '.$_POST['date'].' '.$_POST['email'].' '.$_POST['tel'].' '.$_POST['subject'];

// wordwrap
$msg = wordwrap($msg,70);

// send Email
mail("beth@fargowellnessdistrict.com","Website Message",$msg);
die();

?>
</body>
</html>
