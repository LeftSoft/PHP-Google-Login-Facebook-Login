<?php include 'header.php'; 
require_once "baglan.php";

if(!empty($_POST['adi'])) {

$adi=$_POST['adi'];

echo $adi;

$ara= $db->query("select * from users where email='$adi'")->fetch(PDO::FETCH_ASSOC);

if($ara['uid']=="") {

echo "<script type='text/javascript'>alert('Böyle bir kullanıcı bulunamadı.');</script>";

echo "<script>location.href='sifreunuttum.php';</script>";

}else {



$length = 32;

$string = "";

$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-=+"; 

while ($length > 0) {

$string .= $characters[mt_rand(0,strlen($characters)-1)];

$length -= 1;

}

$sifirlama_anahtar = $string;

echo $sifirlama_anahtar;

$sifirlama_anahtar = sha1($ara['email']. $sifirlama_anahtar);

$host = $_SERVER['HTTP_HOST'];

 

$isim= $ara['name'];

$sifirlamaAdres = 'sifre_yenile.php?anahtar=' . $sifirlama_anahtar;

$konu = 'Şifre Hatırlatma';

$mesaj = '<p>Sayın&nbsp;' . $isim.',</p>

<p>Şifremi sıfırlama adresi aşağıdadır...</p>

<p>Şifre sıfırlama adresi:&nbsp; <a href="http://' . $host . '/sifre_yenile.php?anahtar=' . $sifirlama_anahtar . '">Tıklayınız</a></p>';

 

include("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir

$mail->SMTPAuth = true; //SMTP doğrulama olmalı

$mail->SMTPSecure = 'ssl'; // Normal bağlantı için tls , güvenli bağlantı için ssl

$mail->Host = "manchesterdilokullarisparta.com"; // Mail sunucusunun adresi

$mail->Port = 465; // Normal bağlantı için 587, güvenli bağlantı için 465 

$mail->IsHTML(true);

$mail->SetLanguage("tr", "phpmailer/language");

$mail->CharSet ="utf-8";

$mail->Username = "info@manchesterdilokullarisparta.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)

$mail->Password = ""; // Mail adresimizin sifresi

$mail->SetFrom("info@manchesterdilokullarisparta.com", "manchesterdilokullarisparta.com"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)

$mail->AddAddress($ara['email']); // Mailin gönderileceği alıcı adres

$mail->Subject = "Şifre Yenileme Bağlantısı"; // Email konu başlığı

$mail->Body = $mesaj; // Mailin içeriği

if(!$mail->Send()){

echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;

} else {

echo "Email Gonderildi";



 

$guncelle= $db->exec("update users set anahtar='$sifirlama_anahtar' where email='$adi'");

}

 

 

}

}
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
                                        <h3>Şifremi Unuttum</h3>

                                        <hr class="bg-primary">
                                    </div>
                                    
                                </tr>
                                <form method="post" action="sifreunuttum.php">
                                    <fieldset style="width: 30%; margin: auto;">

                                        <legend align="center"></legend>
                                        <table border="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td>E-posta</td>
                                                    <td>:</td>
                                                    <td><input id="adi" name="adi" autocomplete="off" type="email" size="38" required /></td>
                                                </tr>
                                                
                                                 
                                                <tr>
                                                    <td></td>
                                                    <td></td>

                                                    <div align="center">
                                                        <td>
                                                        	<input type="submit" class="btn btn-danger" value="Şifre Yenile">
                                                            
                                                          
                                                           
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

</html>
