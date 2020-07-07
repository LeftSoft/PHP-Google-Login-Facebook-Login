<?php 

session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '1567741233367306',
		'app_secret' => 'c7f50f0a9c3a2bcefcefba44587b16ac',
		'default_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();
	
	$gClient = new Google_Client();
	$gClient->setClientId("544707339329-nofh54d96n6t7q84p1urjdkf1inl6ad1.apps.googleusercontent.com");
	$gClient->setClientSecret("d-EyNQGoUPCiqCRWGXbkx3TO");
	$gClient->setApplicationName("Proje");
	$gClient->setRedirectUri("http://localhost/ufuk/g-callback.php");
		$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123456789');
define('DB_DATABASE', '');
define("BASE_URL", "http://localhost/ufuk/");
try {

	$db=new PDO("mysql:host=localhost;dbname=ufuk;charset=utf8",'root','123456789');
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}
function getDB() 
{
	$dbhost=DB_SERVER;
	$dbuser=DB_USERNAME;
	$dbpass=DB_PASSWORD;
	$dbname=DB_DATABASE;
	try {
	$dbConnection = new PDO("mysql:host=localhost;dbname=ufuk;charset=utf8",'root','123456789');	
	$dbConnection->exec("set names utf8");
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbConnection;
    }
    catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
	}
}

 ?>