<?php 
include "baglan.php";
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
if (!empty($_POST['signupSubmit'])) 
{

    $username=$_POST['usernameReg'];
    $email=$_POST['emailReg'];
    $password=$_POST['passwordReg'];
    $name=$_POST['nameReg'];
    $tel=$_POST['tel'];
    $cinsiyet=$_POST['cinsiyet'];
    $dogum=$_POST['dogum'];
    $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
    $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
    $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

    if($username_check && $email_check && $password_check && strlen(trim($name))>0) 
    {
    
    $uid=$userClass->userRegistration($username,$password,$email,$name,$tel,$cinsiyet,$dogum,$secret);
    if($uid)
    {
        $url=BASE_URL.'device_confirmations.php';
        header("Location: $url");
    }
    else
    {
      $errorMsgReg="Böyle bir kullanıcı adı veya e-posta zaten mevcut.";
    }
    
    }
    else
    {
      $errorMsgReg="Geçerli ayrıntıları girin.";
    }


}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
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

                    <li class="nav-item ">
                        <a class="btn btn-danger ml-1" href="index.php" class="nav-link active"><i class="fa fa-home" aria-hidden="true"></i> ANASAYFA</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="#" class="nav-link active"> <i class="fa fa-book" aria-hidden="true"></i>HAKKIMIZDA</a>
                    </li>

                    

                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="giris-yap.php" class="nav-link active"><i class="fa fa-sign-in" aria-hidden="true"></i>GİRİŞ</a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>
    <div align="center">
        <form method="post" action="" name="signup">
            <h2> Kayıt Ol</h2>

              <b style="color:green;">Üyelik Google 2FA ile gerçekleşmektedir.Lütfen hatasız eposta giriniz.</b>

            <table border="0">
                <tr>
                    <td>Ad Soyad *</td>
                    <td>
                        <input type="text" name="nameReg" size="40" required />
                    </td>
                </tr>
                
                <tr>
                    <td>Kullanıcı Adı *</td>
                    <td>
                        <input type="text" name="usernameReg" autocomplete="off" autocomplete="off" size="40" required />
                    </td>
                </tr>
                <tr>
                    <td>E-Posta Adresi *</td>
                    <td>
                        <input type="text" name="emailReg" autocomplete="off" size="40" required />
                    </td>
                </tr>
                <tr>
                    <td>Şifre *</td>
                    <td>
                        <input type="password" name="passwordReg" autocomplete="off" minlength="8" size="40" required />
                    </td>
                </tr>
               
                <tr>
                    <td>Telefon *</td>
                    <td>
                        <input type="tel" name="tel" placeholder="(___)(_______) Başında 0 olmadan giriniz" maxlength="10" minlength="10" size="40" required />
                    </td>
                </tr>
                <tr>
                    <td>Cinsiyet *</td>
                    <td>
                        <input type="radio" name="cinsiyet" value="Erkek" /> Erkek
                        <input type="radio" name="cinsiyet" value="Kadın" /> Kadın
                    </td>
                </tr>
                <tr>
                    <td>Doğum Tarihi *</td>
                    <td>
                        <input type="date" name="dogum" style="width:100%" required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" id="" required /> Üyelik Sözleşmesi şartlarını okudum ve kabul ediyorum.
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="button" name="signupSubmit" value="KAYIT OL">
                    </td>
                </tr>
                <div class="errorMsg"><b style="color:red;"><?php echo $errorMsgReg; ?></b></div>
                
            </table>
        </form>

        
    </div>

    <footer>

        <nav class="navbar navbar-expand-lg navbar-dark " style=" background-image: url(background.jpg); min-height:250px">
            <div class="col-md-4">
                <div class="container">
                    <a href="index.php" class="navbar-brand"><img src="mdo_logo.png" width="250" height="100"></a>

                </div>
            </div>
            <div class="col-md-4">



                <div>
                    <ul class="">
                        <h5 style="color: white">Hizmetlerimiz</h5>
                        <li><a style="text-decoration:none; color:white" href="is-basvuru.php">İş Başvurusu</a></li>
                        <li><a style="text-decoration:none; color:white" href="help.php">İletişim/Destek/Şikayet</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <h4 style="color: white">Ayrıntılı Bilgi İçin: 0555 555 55 55</h4>
                <h5 style="color: white">info@mdo.com</h5>



            </div>
        </nav>
    </footer>

    <footer>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-bottom" style=" background-image: url(background.jpg)">
            <div class="container">
                <a href="index.php" class="navbar-brand" data-toggle="collapse" data-target="#altmenuac">Eğitim Haberlerinizi Mail Yoluyla Alın</a>

            </div>
            <div class="collapse navbar-collapse" id="altmenuac">
                <form class="form-inline">
                    <input type="email" placeholder="E-mail" class="form-control col-auto mr-2" name="">
                    <input type="text" placeholder="Ad ve Soyad" class="form-control col-auto mr-2" name="">
                    <button class="btn btn-danger ml-2">Kayıt Ol</button>
                </form>
            </div>
        </nav>
    </footer>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

    <script>
        // Init tooltips
        $('[data-toggle="tooltip"]').tooltip();

    </script>
    
</body>

</html>
