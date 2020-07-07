<?php include 'header.php'; ?>
    <div class=container>
        <div class="row mt-4">
            <div class="col-md-8">
                <h3>Öne Çıkan Makaleler</h3>
                <hr class="bg-primary">
                <?php 

        $makalesor=$db->prepare("SELECT * FROM makale");
        $makalesor->execute();

        while($makalecek=$makalesor->fetch(PDO::FETCH_ASSOC)) {

         ?>
                <div class="card mb-4">
                    <img class="card-img-top" src="<?php echo $makalecek['makale_resim']; ?>">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $makalecek['makale_baslik']; ?></h2>
                        <p class="card-text"><?php echo $makalecek['makale_aciklama']; ?></p>
                        <a href="" class="btn btn-primary">Devamını Oku <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="card-footer text-muted">
                        <span><?php echo $makalecek['makale_tarih']; ?></span>
                    </div>
                </div>
<?php } ?>       
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header bg-primary text-white">Arama</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Aranacak Kelimeyi Giriniz..." name="">
                            <span><a href="hata.php" class="btn btn-danger" type="button">Ara</a></span>
                        </div>
                    </div>
                </div>
                <div class="card my-4">
                    <h5 class="card-header bg-primary text-white">Ön Kayıt</h5>
                    <div class="card-body">
                        <div style="background-color: white">
                            <form method="POST" action="islem.php"  enctype="multipart/form-data" data-parsley-validate>

                                <table border="0" align="center" cellpadding="3">
                                    <tr>
                                        <td colspan="2" align="center">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ad Soyad</td>
                                        <td><input type="text" name="adi" required></td>
                                    </tr>

                                    

                                    <tr>
                                        <td>Doğum Tarihi</td>
                                        <td><input type="date" name="dogum" required></td>
                                    </tr>
                                    <tr>
                                        <td>Telefon</td>
                                        <td>
                                            <input type="tel" name="tel" placeholder="Başında 0 olmadan giriniz" maxlength="10" minlength="10" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>E-posta</td>
                                        <td><input type="email" name="mail" required></td>

                                    </tr>

                                    <tr>
                                        <td>Eğitim</td>
                                        <td>
                                            <select name="egitim">
                                                <option value="İlkokul">İlkokul</option>
                                                <option value="Lise">Lise</option>
                                                <option value="ÖnLisans">Ön Lisans</option>
                                                <option value="Lisans">Lisans</option>
                                                <option value="Y.Lisans">Y.Lisans</option>
                                                <option value="Doktora">Doktora</option>
                                            </select>
                                        </td>
                                    </tr>
                                    
                                    
                                    </table>
                                    
                                        
                                            <div class="col-lg-12 col-sm-12 text-center">
                                                <button class="btn btn-danger" name="onkayit" type="submit">Talep Oluştur</button>

                                       </div>
                                  
 <?php 

              if ($_GET['durum']=="ok") {?>
                <div align="center">
              <b style="color:green;">Talep Oluşturuldu</b>
</div>
              <?php } elseif ($_GET['durum']=="no") {?>
<div align="center">
              <b style="color:red;">Talep Oluşturulamadı</b>
</div>
              <?php }

              ?>

                                
                            </form>

                        </div>
                    </div>
                </div>
                <div class="card my-4">
                    <h5 class="card-header bg-primary text-white">Reklamlar</h5>
                    <div class="card-body">
                        <img src="englishtime.jpg">
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
