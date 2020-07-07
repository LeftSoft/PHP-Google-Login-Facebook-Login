<?php 
include 'header.php'; 
?>
    <div style="background-image:url(background.jpg) ">
        <div class=" container">
            <div>

                <div class="card " style="background-color: azure">
                    <div class="card-body">
                        <form method="POST" action="islem.php">

                            <table border="0" align="center" cellpadding="3">
                                <tr>
                                    <td colspan="2" align="center">
                                        <h3>İletişim/Destek/Şikayet</h3>
                                        <hr class="bg-primary">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ad Soyad:</td>
                                    <td><input type="text" name="ad" required></td>
                                </tr>
                                <tr>
                                    <td>Telefon:</td>
                                    <td>
                                        <input type="tel" name="tel" placeholder="0 olmadan yazınız..." required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>E-posta:</td>
                                    <td><input type="email" name="mail" required></td>

                                </tr>




                                <tr>
                                    <td>Mesaj Konunuz:</td>
                                    <td>
                                        <input type="radio" name="konu" value="İletişim"/>İletişim<br>    
                                        <input type="radio" name="konu" value="Şikayet"/>Şikayet<br>
                                        <input type="radio" name="konu" value="İstek"/>İstek<br>
                                        <input type="radio" name="konu" value="Destek"/>Destek<br>
                                    </td>
                                </tr>


                                <tr>
                                    <td>Mesajınız:</td>
                                    <td>
                                        <textarea cols="50" rows="6" name="mesaj" placeholder="Derdiniz Nedir?" required></textarea>
                                    </td>
                                </tr>


                                <tr>
                                    <td colspan="2" align="center">
                                        
                                        <button type="submit" name="iletisim" class="btn btn-danger">Kaydet</button>
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
                        <li><a style="text-decoration:none; color:white" href="is-basvuru.php">İş Başvurusu</a></li>
                        <li><a style="text-decoration:none; color:white" href="help.php">İletişim/Destek/Şikayet</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <h4 style="color: white">Ayrıntılı Bilgi İçin: 0555 555 55 55</h4>
                <h5 style="color: white" >info@mdo.com</h5>
                
                
                
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

  <script src="js/jquery-3.2.1.slim.min.js" ></script>
  <script src="js/popper.js" ></script>
  <script src="js/bootstrap.js"></script>

  <script>

    // Init tooltips
    $('[data-toggle="tooltip"]').tooltip();

  </script>
  
</body>
</html>