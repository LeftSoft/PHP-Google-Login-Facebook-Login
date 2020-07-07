<?php 
ob_start();
session_start();
include 'baglan.php';

$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where id=:id");
$hakkimizdasor->execute(array(
    'id' => 0
    ));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);


if(!empty($_SESSION['uid']))
{
   
    header("Location:uye-anasayfa.php");
}

include('class/userClass.php');
$userClass = new userClass();

require_once 'googleLib/GoogleAuthenticator.php';
$ga = new GoogleAuthenticator();
$secret = $ga->createSecret();

$errorMsgReg='';
$errorMsgLogin='';
if (!empty($_POST['loginSubmit'])) 
{
$usernameEmail=$_POST['usernameEmail'];
$password=$_POST['password'];
 if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 )
   {
    $uid=$userClass->userLogin($usernameEmail,$password,$secret);
    if($uid)
    {
        $url=BASE_URL.'device_confirmations.php';
        header("Location: $url");
    }
    else
    {
        $errorMsgLogin="Lütfen giriş bilgilerini kontrol ediniz.";
    }
   }
}

if (!empty($_POST['signupSubmit'])) 
{

    $username=$_POST['usernameReg'];
    $email=$_POST['emailReg'];
    $password=$_POST['passwordReg'];
    $name=$_POST['nameReg'];
    $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
    $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
    $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

    if($username_check && $email_check && $password_check && strlen(trim($name))>0) 
    {
    
    $uid=$userClass->userRegistration($username,$password,$email,$name,$secret);
    if($uid)
    {
        $url=BASE_URL.'device_confirmations.php';
        header("Location: $url");
    }
    else
    {
      $errorMsgReg="Kullanıcı adı veya e-posta zaten mevcut.";
    }
    
    }
    else
    {
      $errorMsgReg="Geçerli detayları giriniz.";
    }


}





 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.dil').click(function(){
                var text="";
                $(".dil:checked").each(function(){
                    text+=$(this).val() + ',';
                });
                text=text.substring(0,text.length-1);
                $('#selectedtext').val(text);
                var count=$("[type='checkbox']:checked").length;
            });
        });



    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark " style=" background-image: url(background.jpg)">
        <div class="container">
            <a href="index.php" class="navbar-brand"><img src="mdo_logo.png" width="200" height="80"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuac">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuac">
                <ul class="navbar-nav ml-auto">
                    <?php 
                    if (!empty($_SESSION['uid'])) {
                        
                    

                     ?>
                   <li class="nav-item ">
                        <a class="btn btn-danger ml-1" href="uye-anasayfa.php" class="nav-link active"><i class="fa fa-home" aria-hidden="true"></i> ANASAYFA</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="uye-hakkimizda.php" class="nav-link active"> <i class="fa fa-book" aria-hidden="true"></i> HAKKIMIZDA</a>
                    </li>
                    <li class="nav-item ">
                        <a class="btn btn-danger ml-1" href="yorumlar.php" class="nav-link active"><i class="fa fa-comments" aria-hidden="true"></i> YORUMLAR</a>
                    </li>
                    <li class="nav-item ">
                        <a class="btn btn-danger ml-1" href="uye-yorum.php" class="nav-link active"><i class="fa fa-comment" aria-hidden="true"></i> SİZİN YORUMLARINIZ</a>
                    </li>
                    <li class="nav-item ">
                        <a class="btn btn-danger ml-1" href="uye-translate.php" class="nav-link active"><i class="fa fa-language" aria-hidden="true"></i> GOOGLE ÇEVİRİ</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="" class="nav-link active"> <i class="fa fa-gamepad" aria-hidden="true"></i> OYUN</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="sts.php" class="nav-link active"> <i class="fa fa-book" aria-hidden="true"></i> STS</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="logout2.php" class="nav-link active"><i class="fa fa-sign-out" aria-hidden="true"></i> ÇIKIŞ YAP</a>
                    </li>

<?php  }

          ?>

<?php if(empty($_SESSION['uid'])){

 ?>

                     <li class="nav-item ">
                        <a class="btn btn-danger ml-1" href="index.php" class="nav-link active"><i class="fa fa-home" aria-hidden="true"></i> ANASAYFA</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="hakkimizda.php" class="nav-link active"> <i class="fa fa-book" aria-hidden="true"></i> HAKKIMIZDA</a>
                    </li>
                    <li class="nav-item ">
                        <a class="btn btn-danger ml-1" href="translate.php" class="nav-link active"><i class="fa fa-language" aria-hidden="true"></i> GOOGLE ÇEVİRİ</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="giris-yap.php" class="nav-link active"><i class="fa fa-sign-in" aria-hidden="true"></i> GİRİŞ</a>
                    </li>
                    <?php  }

          ?>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>