<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style=" background-image: url(background.jpg)">
        <div class="container">
            <a href="uye-anasayfa.php" class="navbar-brand"><img src="mdo_logo.png" width="200" height="80"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuac">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuac">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="btn btn-danger ml-1" href="uye-anasayfa.php" class="nav-link active"><i class="fa fa-home" aria-hidden="true"></i> ANASAYFA</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="uye-hakkimizda.php" class="nav-link active"> <i class="fa fa-book" aria-hidden="true"></i> HAKKIMIZDA</a>
                    </li>
                    <li class="nav-item ">
                        <a class="btn btn-danger ml-1" href="yorumlar.php" class="nav-link active"><i class="fa fa-comments" aria-hidden="true"></i> YORUMLAR</a>
                    </li>
                    <li class="nav-item ">
                        <a class="btn btn-danger ml-1" href="uye-yorum.php" class="nav-link active"><i class="fa fa-comment" aria-hidden="true"></i> SİZİN YORUMLARINIZ</a>
                    </li>
                    <li class="nav-item ">
                        <a class="btn btn-danger ml-1" href="uye-translate.php" class="nav-link active"><i class="fa fa-language" aria-hidden="true"></i> GOOGLE ÇEVİRİ</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="" class="nav-link active"> <i class="fa fa-gamepad" aria-hidden="true"></i> OYUN</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="sts.php" class="nav-link active"> <i class="fa fa-book" aria-hidden="true"></i> STS</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ml-1" href="index.php" class="nav-link active"><i class="fa fa-sign-out" aria-hidden="true"></i> ÇIKIŞ YAP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="background-image:url(background.jpg) ">
        <div class=" container">
            <div>

                <div class="card " style="background-color: azure">
                    <div class="card-body">
                        <form method="POST" action="#">

                            <table border="0" align="center" cellpadding="3">
                                <tr>
                                    <td colspan="2" align="center">
                                        <h3>İş Başvurusu</h3>
                                        <hr class="bg-primary">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Adı:</td>
                                    <td><input type="text" name="ad" required></td>
                                </tr>

                                <tr>
                                    <td>Soyadı:</td>
                                    <td><input type="text" name="soyad" required></td>
                                </tr>

                                <tr>
                                    <td>Doğum Tarihi:</td>
                                    <td><input type="date" name="dtarihi" required></td>
                                </tr>

                                <tr>
                                    <td>Doğum Yeri:</td>
                                    <td>
                                        <input type="text" name="Doğum Yeri" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Telefon:</td>
                                    <td>
                                        <input type="tel" name="telno" placeholder="0 olmadan yazınız..." maxlength="10" minlength="10" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>E-posta:</td>
                                    <td><input type="email" name="eposta" required></td>

                                </tr>

                                <tr>
                                    <td>Cinsiyet:</td>
                                    <td>
                                        <input type="radio" name="cinsiyet" value="erkek" required> Erkek
                                        <input type="radio" name="cinsiyet" value="kadın" required> Kadın
                                    </td>
                                </tr>

                                <tr>
                                    <td>Referanslar:</td>
                                    <td>
                                        <textarea cols="50" rows="6" required></textarea>
                                    </td>
                                </tr>


                                <tr>
                                    <td>Yabancı Dil:</td>
                                    <td>
                                        <input type="checkbox" name="en"> İngilizce<br>
                                        <input type="checkbox" name="de"> Almanca<br>
                                        <input type="checkbox" name="fr"> Fransızca<br>
                                        <input type="checkbox" name="ing"> İspanyolca<br>
                                        <input type="checkbox" name="es"> Çince<br>
                                        <input type="checkbox" name="ru"> Rusça
                                    </td>
                                </tr>

                                <tr>
                                    <td>Eğitim:</td>
                                    <td>
                                        <select name="egitim">
                                            <option value="onlisans">Ön Lisans</option>
                                            <option value="lisans">Lisans</option>
                                            <option value="y.lisans">Y.Lisans</option>
                                            <option value="doktora">Doktora</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Geçmiş İşler:</td>
                                    <td>
                                        <textarea cols="50" rows="6" required></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>CV Yükleyiniz:</td>
                                    <td>
                                        <input type="FILE" name="dosya" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2" align="center">
                                        <input href="index.php" type="submit" class="btn btn-danger" />
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
