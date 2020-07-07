 <?php
include('baglan.php');
if(empty($_SESSION['uid']))
{
	header("Location:index.php");
}

include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);
$secret=$userDetails->google_auth_code;
$email=$userDetails->email;

require_once 'googleLib/GoogleAuthenticator.php';

$ga = new GoogleAuthenticator();

$qrCodeUrl = $ga->getQRCodeGoogleUrl($email, $secret,'Proje');


?>
<!DOCTYPE html>
<html>
<head>
    <title>Google  Authenticator kullanarak 2 Adımlı Doğrulama</title>
    <link rel="stylesheet" type="text/css" href="style.css" charset="utf-8" />
</head>
<body>
	<div id="container">
		<h1>Google  Authenticator kullanarak 2 Adımlı Doğrulama</h1>
		<div id='device'>

<p>Telefonunuza Google Authenticator uygulaması tarafından oluşturulan doğrulama kodunu girin.</p>
<div id="img">
<img src='<?php echo $qrCodeUrl; ?>' />
</div>

<form method="post" action="uye-anasayfa.php">
<label>
Google Authenticator Kodunu Girin</label>
<input type="text" name="code" />
<input type="submit" class="button"/>
</form>
</div>
<div style="text-align:center">
	<h3>Google  Authenticator'ı telefonunuza indirin</h3>
<a href="https://itunes.apple.com/us/app/google-authenticator/id388497605?mt=8" target="_blank"><img class='app' src="images/iphone.png" /></a>

<a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="_blank"><img class="app" src="images/android.png" /></a>
</div>
</div>
</body>
</html>
