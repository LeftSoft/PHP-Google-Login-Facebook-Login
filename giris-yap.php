<?php include 'header.php'; 

require_once "baglan.php";

    if (isset($_SESSION['access_token'])) {
        header('Location: uye-anasayfa.php');
        exit();
    }

    $redirectURL = "http://localhost/fb/fb-callback.php";
    $permissions = ['email'];
    $loginURL = $helper->getLoginUrl($redirectURL, $permissions);
    $loginURL2 = $gClient->createAuthUrl();
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
                                        <h3>Giriş Yap</h3>

                                        <hr class="bg-primary">
                                    </div>
                                    <td><b style="color:red;"><?php echo $errorMsgLogin; ?></b></td>
                                </tr>
                                <form method="post" action="" name="login">
                                    <fieldset style="width: 30%; margin: auto;">

                                        <legend align="center"></legend>
                                        <table border="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td>E-posta</td>
                                                    <td>:</td>
                                                    <td><input name="usernameEmail" autocomplete="off" type="email" size="38" required /></td>
                                                </tr>
                                                <tr>
                                                    <td>Sifre</td>
                                                    <td>:</td>
                                                    <td><input type="password" name="password" autocomplete="off" size="38" required /></td>
                                                   
                                                    
                                                </tr>
                                                 
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <div align="center">
                                                        <td><input type="submit" class="btn btn-danger" name="loginSubmit" value="Giriş Yap">
                                                            <a class="btn btn-danger" href="kayit-ol.php" data-toggle="tooltip" data-placement="bottom" title="Üye Ol">Üye Ol</a>
                                                            <a class="btn btn-danger" href=""  data-toggle="tooltip" data-placement="bottom" title="Şifremi Unuttum">Şifremi Unuttum</a>
                                                            <a class="btn btn-danger" href="admin-giris.php" data-toggle="tooltip" data-placement="bottom" title="Admin Giriş">Admin Giriş</a></td>
                                                            <br>
                                                           
                                                    </div>
                                                    <br>
                                                    <div align="center">
                                                        

                                                        
                                                       <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Facebook İle Giriş Yap" class="btn btn-primary">
                                                       <input type="button" onclick="window.location = '<?php echo $loginURL2 ?>';" value="Google ile Giriş Yap" class="btn btn-danger">
                                                        
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

</html>
