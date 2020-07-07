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

?>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card mb-4">
                    <img class="card-img-top" src="manchester.jpg">
                    <div class="card-body">
                        <h2 class="card-title">HAKKIMIZDA <small style="font-size:13px;">Yayınlandığı Tarih 12.12.2012 12:12
                            </small></h2>

                        <hr>

                        <p class="card-text lead">Kurulmuş olduğu 1997 yılından bu yana kaliteden taviz vermeden hizmetlerini sürdüren Manchester Dil Okulları ağırlıklı olarak İngilizce eğitim vermek için kurulan dil okuludur. Kurulmuş olduğumuz günden bu yana 1997 yılında mezun etmiş olduğumuz ilk kursiyerlerimiz de dâhil olmak üzere kurumumuz eğitim memnuniyeti her zaman yüksek olan yüzlerce kursiyer mezun etmiş olup bu sayıyı her geçen yıl biraz daha yukarıya çekmektedir. Hem ulusal hem de uluslararası yetkinliğini kanıtlayarak sektörde farklı bir konuma ulaşan Manchester Dil Okulları eğitim kalitesi ile de dikkat çekmektedir. Eğitim modeli ve geliştirdiği kendine özel eğitim sistemi ile İstanbul merkezli olarak kurulan Manchester Dil Okulları ardından Erzurum’da ilk şubesini açmış ve Kayseri, Samsun, Çorum, Çanakkale, Erzincan, Isparta ve Muğla’da şubeler açarak istikrarlı bir şekilde büyümeyi sürdürmüştür</p>

                        <p class="card-text">Manchester Dil Okulları olarak Genel İngilizce kurslarının yanı sıra aynı zamanda özel test sınavlarına hazırlık içinde kurs programları düzenlemektedir. Özelliklede uluslararası geçerliliğe sahip olan TOEFL, TOEIC VE IELTS ile ülkemizde düzenlenen YDS sınavlarından yüksek sonuç almak isteyen öğrencilere yönelik destek kursları da verilmektedir. Yine Manchester Dil Okulları olarak Tıp İngilizcesi, Pilot İngilizcesi ve İş İngilizcesi gibi meslek gruplarının ihtiyaç duyduğu özel kurs programlarımızda bulunmaktadır. English For Specific Purposes (ESP) olarak isimlendirilen özel amaçlı İngilizce kurslarımız size mesleki anlamda başarının kapılarını açacak ve kariyerinizi destekleyecektir.</p>

                        <h4>Vizyonumuz</h4>

                        <p>Her geçen gün daha da kabul gören ve küresel bir dil olma yolunda hızla ilerleyen İngilizcenin büyük bir ihtiyaç olduğunun farkında olan herkesin hedef kitlesi olarak gören, sürekli olarak yenilenen ve hızla gelişen teknolojiyi dinamik yapısı ile sürekli takip eden ve bu değişime başarı ile ayak uyduran, eğitim sektöründe her zaman kalitesi ile öne çıkan güvenilir bir dünya markası olmayı başarmak….</p>

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
