<?php include 'header.php'; ?>
 <div class="container">
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="card mb-4">
          <img class="card-img-top" src="<?php echo $hakkimizdacek['hakkimizda_resim']; ?>" >
          <div class="card-body">
            <h2 class="card-title"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?> <small style="font-size:13px;">Yayınlandığı Tarih 12.12.2012 12:12
            </small></h2>

            <hr>
            
            <?php echo $hakkimizdacek['hakkimizda_aciklama']; ?>

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
                        <li><a style="text-decoration:none; color:white" href="is-basvuru.html">İş Başvurusu</a></li>
                        <li><a style="text-decoration:none; color:white" href="help.html">İletişim/Destek/Şikayet</a></li>

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

    
    $('[data-toggle="tooltip"]').tooltip();

  </script>
  
</body>
</html>