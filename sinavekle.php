<?php 
include 'baglan.php';
$kullanicisor=$db->prepare("SELECT * FROM admin where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['kullanici_mail']
  ));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
$_SESSION['kullanici'] = $say;
if ($say==0) {

  Header("Location:index.php");
  exit;

}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style=" background-image: url(background.jpg)">
        <div class="container">
            <a href="admin.php" class="navbar-brand"><img src="mdo_logo.png" width="200" height="80"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuac">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuac">

                <ul class="navbar-nav ml-auto">

                    <H2>ADMİN PANELİ</H2>
                </ul>

            </div>

        </div>

    </nav>
    <div style="background-image:url(background.jpg) ">
        <div class=" container">
            <div>
                <div class="card " style="background-color: azure">
                    <div class="card-body">
                        <div align="center">
                            <a class="btn btn-primary" data-toggle="tooltip" href="admin.php" data-placement="bottom" title="Geri Dön">Geri Dön</a>
                            <form method="POST" action="islem.php">

                                <table border="0" align="center" cellpadding="3">
                                    <tr>
                                        <td colspan="2" align="center">
                                            <h3>Sınav Ekle</h3>
                                            <hr class="bg-primary">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Soru 1 :</td>
                                        <td><textarea cols="50" name="soru" rows="6" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>A:</td>
                                        <td><input type="text" name="1a" required><input required type="radio" name="sik" value="1"/>Doğru Cevabı Seç</td>
                                    </tr>
                                    <tr>
                                        <td>B:</td>
                                        <td><input type="text" name="1b" required><input required type="radio" name="sik" value="2"/>Doğru Cevabı Seç</td>
                                    </tr>
                                    <tr>
                                        <td>C:</td>
                                        <td><input type="text" name="1c" required><input required type="radio" name="sik" value="3"/>Doğru Cevabı Seç</td>
                                    </tr>
                                    <tr>
                                        <td>D:</td>
                                        <td><input type="text" name="1d" required><input required type="radio" name="sik" value="4"/>Doğru Cevabı Seç</td>
                                    </tr>
                                   
                                    <tr>
                                        <td><br></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" align="center">
                                            
                                            <button type="submit" name="sinavekle" data-toggle="tooltip" data-placement="bottom" class="btn btn-danger" title="Kaydet">Kaydet</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" align="center">
                                            <?php 

              if ($_GET['durum']=="ok") {?>
                <div align="center">
              <b style="color:green;">Soru Eklendi</b>
</div>
              <?php } elseif ($_GET['durum']=="no") {?>
<div align="center">
              <b style="color:red;">Soru Eklenemedi</b>
</div>
              <?php }

              ?>
                                        </td>
                                    </tr>




                                </table>
                            </form>


                        </div>

                    </div>
                </div>
            </div>
        </div><br>
    </div>
    
    
     <footer>

        <nav class="navbar navbar-expand-lg navbar-dark" style=" background-image: url(background.jpg)">
            <div>
                <br>
                <br><br><br><br><br>
                
                
            </div>
        </nav>
    </footer>
    

   

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

    <script>
        $('[data-toggle="tooltip"]').tooltip();

    </script>

</body>

</html>
