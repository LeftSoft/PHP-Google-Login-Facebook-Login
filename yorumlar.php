<?php 
include 'uyeheader.php';
include 'baglan.php';
include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);
include('session.php');
$userDetails=$userClass->userDetails($session_uid);
$yorumsor=$db->prepare("SELECT * FROM yorumlar");
$yorumsor->execute();
$kullanicisor=$db->prepare("SELECT * FROM users where uid=$session_uid");
$kullanicisor->execute();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)
?>
    <div style="background-image:url(background.jpg) ">
        <div class=" container">
            <div>

                <div class="card " style="background-color: azure">
                    <div class="card-body">

                        
                            <tr>
                                <td colspan="2" align="center">
                                    <h3 align="center">YORUMLAR</h3>
                                    <hr class="bg-primary">
                                </td>
                            </tr>

                            <?php 

                while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td><strong><?php echo $yorumcek['yorum_ad']." ".$yorumcek['yorum_soyad'].":"; ?></strong></td>
                            </tr>
                            <tr>

                                <td><?php echo $yorumcek['yorum_yorum']; ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <hr class="bg-primary">
                                </td>
                            </tr>
<?php  }

          ?>
                            <form method="POST" action="islem.php">
                            <table border="0" align="center" cellpadding="3">
                                <tr>
                                    <td colspan="2" align="center">
                                        <h3>YORUM EKLEYEBİLİRSİNİZ</h3>
                                        <hr class="bg-primary">
                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td><input hidden value="<?php echo $kullanicicek['name']; ?>" type="text" name="yorum_ad" required></td>
                                </tr>
                               
                                <tr>
                                 
                                    <td><input hidden value="<?php echo $kullanicicek['email']; ?>" type="email" name="yorum_mail" required></td>
                                </tr>
                                <tr>
                                    <td>Yorumlarınız:</td>
                                    <td>
                                        <textarea name="yorum_yorum" cols="50" rows="6" required></textarea>
                                    </td>
                                    <input type="hidden" name="uid" value="<?php echo $session_uid; ?>">
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <button type="submit" name="yorumekle" class="btn btn-danger">Yorum Ekle</button>
                                    </td>
                                </tr>










                            </table>

                        </form>
                    </div>
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
                        <li><a style="text-decoration:none; color:white" href="uye-is-basvuru.php">İş Başvurusu</a></li>
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

</body>

</html>
