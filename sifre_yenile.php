<?php 
include 'header.php'; 
require_once "baglan.php"; 

$anahtar=$_GET['anahtar'];

if($anahtar=="") {

echo "<script type='text/javascript'>alert('Şifre Sıfırlama Başvurunuz Bulunamamıştır.');</script>";

echo "<script>location.href='giris-yap.php';</script>";

 

}

if($anahtar!="") {

$ara= $db->query("select * from users where anahtar='$anahtar'")->fetch(PDO::FETCH_ASSOC);


?>
<div style="background-image: url(background.jpg);">
        <div class="container">
            <div>
                <div class="card" style="background-color: azure">
                    <div class="card-body">
                        <form method="post" action="#">
                            <table border="0" align="center" cellpadding="3">
                                <br><br><br>
                                <tr>
                                    <div colspan="2" align="center">
                                        <h3>Şifre Yenileme</h3>

                                        <hr class="bg-primary">
                                    </div>
                                    
                                </tr>
                                <form method="post" action="sifre_yenile.php?uid=<?php echo $ara['uid']; ?>">
                                    <fieldset style="width: 30%; margin: auto;">

                                        <legend align="center"></legend>
                                        <table border="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td>E-posta</td>
                                                    <td>:</td>
                                                    <td><input id="adi" name="adi" disabled="disabled" value="<?php echo $ara['kullaniciadi']; ?>" autocomplete="off" type="email" size="38" /></td>
                                                </tr>
                                                <tr>
                                                    <td>Yeni Şifre</td>
                                                    <td>:</td>
                                                    <td><input type="password" name="sifre"/></td>
                                                </tr>
                                                  <tr>
                                                    <td>Yeni Şifre Tekrar</td>
                                                    <td>:</td>
                                                    <td><input type="password" name="sifree" /></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>

                                                    <div align="center">
                                                        <td>
                                                        	
                                                            <input type="submit" class="btn btn-danger" value="Değiştir" />
                                                          
                                                           
                                                    </div>
                                                    <br>
                                                  
                                                        

                                                        
                                                      
                                                        
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </fieldset>





                                </form>
                            </table>
                        </form>
                    </div>
                </div>


            </div>
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
                    <a href="anasayfa.php" class="navbar-brand" data-toggle="collapse" data-target="#altmenuac">Eğitim Haberlerinizi Mail Yoluyla Alın</a>

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
<?php }else {

$id=$_GET['uid'];

$sifre=$_POST['sifre'];

$sifree=$_POST['sifree'];

if($sifre!=$sifree) {

echo "<script type='text/javascript'>alert('Şifreler Farklı Yeniden Deneyiniz.');</script>";

}else {

$guncelle= $db->exec("update users set sifre='$sifre',anahtar='' where uid='$id'");

echo "<script type='text/javascript'>alert('Şifreniz Başarılı Bir Şekilde Değiştirilmiştir.');</script>";

echo "<script>location.href='giris-yap.php';</script>";

}

}

?>
</html>
