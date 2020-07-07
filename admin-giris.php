

<?php 
ob_start();
session_start();
if ($_SESSION['kullanici']==1) {

  Header("Location:admin.php");
  exit;

}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        .div {
            display: inline-block;
        }

    </style>



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
            <a class="btn btn-danger ml-1"  href="index.php" class="nav-link active"><i class="fa fa-home" aria-hidden="true"></i> ANASAYFA</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger ml-1" href="hakkimizda.php"  class="nav-link active"> <i class="fa fa-home" aria-hidden="true"></i>HAKKIMIZDA</a>
          </li>
           <li class="nav-item ">
            <a class="btn btn-danger ml-1"  href="https://translate.google.com/" class="nav-link active"><i class="fa fa-language" aria-hidden="true"></i> GOOGLE ÇEVİRİ</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger ml-1" href="giris-yap.php" class="nav-link active"><i class="fa fa-angle-right" aria-hidden="true"></i> GİRİŞ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div style="background-image: url(background.jpg);">
        <div class="container">
            
                <div class="card" style="background-color: azure">
                    <div class="card-body">
                        <table border="0" align="center" cellpadding="3">
                            <br><br><br>
                            <div align="center">
                                <h3>Giriş Yap</h3>
                                <hr class="bg-primary">
                            </div>

                            <form action="islem.php" method="post">
                                <fieldset style="width: 30%; margin: auto;">

                                    <legend align="center"></legend>
                                    <table border="0" align="center">
                                        <tbody>
                                            <tr>
                                                <td>Admin ID</td>
                                                <td>:</td>
                                                <td><input name="kullanici_mail" type="text" size="38" /></td>
                                            </tr>
                                            <tr>
                                                <td>Şifre</td>
                                                <td>:</td>
                                                <td><input name="kullanici_password" type="password" size="38" /></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <div align="center">
                                                    <td>
                                                            <button type="submit" name="admingiris" class="btn btn-danger">Giriş Yap</button>
                                                        
                                                </div>
                                                <br>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </fieldset>

 <?php 

              if ($_GET['durum']=="no") {?>
                <div align="center">
              <b style="color:red;">Giriş Başarısız.</b>
</div>
              <?php } elseif ($_GET['durum']=="exit") {?>
<div align="center">
              <b style="color:green;">Çıkış Yapıldı.</b>
</div>
              <?php }

              ?>


                            </form>
                        </table>
                    </div>
                </div>

            

        </div>

<br><br><br>
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
            $('[data-toggle="tooltip"]').tooltip();

        </script>
    </div>
</body>

</html>