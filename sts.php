<?php include 'uyeheader.php';
include 'baglan.php';
include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);

if($_POST['code'])
{
$code=$_POST['code'];
$secret=$userDetails->google_auth_code;
require_once 'googleLib/GoogleAuthenticator.php';
$ga = new GoogleAuthenticator();
$checkResult = $ga->verifyCode($secret, $code, 2);    // 2 = 2*30sec clock tolerance

if ($checkResult) 
{
$_SESSION['googleCode']=$code;


} 
else 
{
echo 'FAILED';
}

}


include('session.php');
$userDetails=$userClass->userDetails($session_uid);

$sinavsor=$db->prepare("SELECT * FROM sinav ORDER BY sinav_id");
$sinavsor->execute();
 ?>
    <div style="background-image:url(background.jpg) ">
        <div class=" container">
            <div>
                <div class="card " style="background-color: white">
                    <div class="card-body">
                        <div align="center">
                            <form method="POST" action="#">

                                <table border="0" align="center" cellpadding="3">
                                    <tr>
                                        <td colspan="2" align="center">
                                            <h3>Seviye Tespit Sınavı</h3>
                                            <hr class="bg-primary">
                                        </td>
                                    </tr>


				<?php 
                while($sinavcek=$sinavsor->fetch(PDO::FETCH_ASSOC)) { $sayy++;?>
                                    <tr>
                                        <td>
                                        <?php echo $sayy; ?>-) <?php echo $sinavcek['sinav_soru']; ?><br>
                                        <input type="radio" name="1a"  required> <?php echo $sinavcek['sikA']; ?> <br>
                                        <input type="radio" name="1b"  required> <?php echo $sinavcek['sikB']; ?> <br>
                                        <input type="radio" name="1c"  required> <?php echo $sinavcek['sikC']; ?> <br>
                                        <input type="radio" name="1d"  required> <?php echo $sinavcek['sikD']; ?> 
                                        </td>
                                    </tr>
<?php  }

          ?>
                                    <tr>
                                        <td><br><br></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" align="center">
                                            <a class="btn btn-danger" href="" data-toggle="tooltip" data-placement="bottom" title="Kaydet">Sınavı Bitir</a>
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

    



        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>

        <script>
            $('[data-toggle="tooltip"]').tooltip();

        </script>

</body>

</html>
