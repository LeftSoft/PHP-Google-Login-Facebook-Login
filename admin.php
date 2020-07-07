<?php 
ob_start();
session_start();
include 'baglan.php';

$kullanicisor=$db->prepare("SELECT * FROM admin where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['kullanici_mail']
  ));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
$_SESSION['kullanici'] = $say;
if ($say==0) {

  Header("Location:admin-giris.php");
  exit;

}

$sinavsor=$db->prepare("SELECT * FROM sinav ORDER BY sinav_id");
$sinavsor->execute();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        #box1 {
            box-sizing: content-box;
            width: 200px;
            height: 150px;
            background: white;
            margin-bottom: 10px;
            padding: 10px;
            border: 3px solid black;
        }

    </style>


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
                            
                            
                            <a class="btn btn-primary" data-toggle="tooltip" href="sinavekle.php" data-placement="bottom" title="Sınav Ekle">Sınav Ekle</a>
                            <a class="btn btn-danger" data-toggle="tooltip" href="logout.php" data-placement="bottom" title="Çıkış Yap">Çıkış Yap</a>
                            <hr class="bg-primary">
                            <div>
<tr>
                                        <td colspan="2" align="center">
                                            <?php 

              if ($_GET['durum']=="silok") {?>
                <div align="center">
              <b style="color:green;">Soru Silindi</b>
</div>
              <?php } elseif ($_GET['durum']=="silno") {?>
<div align="center">
              <b style="color:red;">Soru Silinemedi</b>
</div>
              <?php }

              ?>
                                        </td>
                                    </tr>
                                <H3>SINAVLAR</H3>


                            </div>

                            <div>
<?php 
                
               
               
                
                while($sinavcek=$sinavsor->fetch(PDO::FETCH_ASSOC)) { $sayy++;?>
                                <div id="box1">
                                    Soru <?php echo $sayy; ?>
                                    <br>
                                
                                    <br>
                                    <a class="btn btn-primary" data-toggle="tooltip" href="soru-duzenle.php?sinav_id=<?php echo $sinavcek['sinav_id']; ?>" data-placement="bottom" title="Soru Güncelle">Güncelle</a>
                                   <br>
                                    
                                    <a class="btn btn-danger" data-toggle="tooltip" href="islem.php?sinav_id=<?php echo $sinavcek['sinav_id']; ?>&sinavsil=ok" data-placement="bottom" title="Soruyu Sil">Sil</a>
                                    <br>
                                   
                                </div>

<?php  }

          ?>

                                



                            </div>
                            <div><br><br><br><br><br><br><br><br><br></div>

                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br><br><br>
    </div>




    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

    <script>
        $('[data-toggle="tooltip"]').tooltip();

    </script>



</body>

</html>
