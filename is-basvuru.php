<?php include 'header.php'; ?>

    <div style="background-image:url(background.jpg) ">
        <div class=" container">
            <div>

                <div class="card " style="background-color: azure">
                    <div class="card-body">
                        <form method="POST" action="islem.php" enctype="multipart/form-data">

                            <table border="0" align="center" cellpadding="3">
                                <tr>
                                    <td colspan="2" align="center">
                                        <h3>İş Başvurusu</h3>
                                        <hr class="bg-primary">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ad Soyad:</td>
                                    <td><input type="text" name="isim" required></td>
                                </tr>

                                <tr>
                                    <td>Doğum Tarihi:</td>
                                    <td><input type="date" name="dogumt" required></td>
                                </tr>

                                <tr>
                                    <td>Doğum Yeri:</td>
                                    <td>
                                        <input type="text" name="dogumy" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Telefon:</td>
                                    <td>
                                        <input type="tel" name="tel" placeholder="0 olmadan yazınız..." maxlength="10" minlength="10" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>E-posta:</td>
                                    <td><input type="email" name="mail" required></td>

                                </tr>

                                <tr>
                                    <td>Cinsiyet:</td>
                                    <td>
                                        <input type="radio" name="cinsiyet" value="Erkek" required> Erkek
                                        <input type="radio" name="cinsiyet" value="Kadın" required> Kadın
                                    </td>
                                </tr>

                                <tr>
                                    <td>Referanslar:</td>
                                    <td>
                                        <textarea cols="50" name="ref" rows="6" required></textarea>

                                    </td>
                                </tr>


                                <tr>
                                    <td>Yabancı Dil:</td>
                                    <td>
                                        <input type="checkbox" class="dil" value="en"> İngilizce<br>
                                        <input type="checkbox" class="dil"  value="de"> Almanca<br>
                                        <input type="checkbox" class="dil"  value="fr"> Fransızca<br>
                                        <input type="checkbox" class="dil" value="ing"> İspanyolca<br>
                                        <input type="checkbox" class="dil"  value="es"> Çince<br>
                                        <input type="checkbox" class="dil" value="ru"> Rusça
                                    </td>
                                </tr>
 <tr>
                                   
                                    <td>
                                        <textarea hidden="" type="text" name="dil" id='selectedtext'></textarea>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>Eğitim:</td>
                                    <td>
                                        <select name="egitim">
                                            <option value="Ön Lisans">Ön Lisans</option>
                                            <option value="Lisans">Lisans</option>
                                            <option value="Y.Lisans">Y.Lisans</option>
                                            <option value="Doktora">Doktora</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Geçmiş İşler:</td>
                                    <td>
                                        <textarea cols="50" name="gecmis" rows="6" required></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>CV Yükleyiniz:</td>
                                    <td>
                                        <input type="file" name="cv">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2" align="center">
                                        <button type="submit" name="basvuru" class="btn btn-danger">Gönder</button>
                                       
                                    </td>
                                </tr>
                                
                                        <?php 

              if ($_GET['durum']=="ok") {?>
                <div align="center">
              <b style="color:green;">İşlem Başarılı</b>
</div>
              <?php } elseif ($_GET['durum']=="no") {?>
<div align="center">
              <b style="color:red;">İşlem Başarısız</b>
</div>
              <?php }

              ?>
                                    


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

</body>

</html>
