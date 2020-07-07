<?php 
ob_start();
session_start();
include 'baglan.php';
include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);
include('session.php');
$userDetails=$userClass->userDetails($session_uid);
function islemkontrol () { //Giriş ve Postlarda Oluşacak Zaafiyetleri Kapatalım.

    if (empty($_SESSION['kullanici_mail'])) {
        
        Header("Location:admin-giris.php");
        exit;
    }
}
function islemkontrol2 () { //Giriş ve Postlarda Oluşacak Zaafiyetleri Kapatalım.

    if (empty($_SESSION['uid'])) {
        
        Header("Location:index.php");
        exit;
    }
}

if (isset($_POST['admingiris'])) {

  $kullanici_mail=$_POST['kullanici_mail'];
  $kullanici_password=$_POST['kullanici_password'];

  $kullanicisor=$db->prepare("SELECT * FROM admin where kullanici_mail=:mail and kullanici_password=:password");
  $kullanicisor->execute(array(
    'mail' => $kullanici_mail,
    'password' => $kullanici_password
    ));

  echo $say=$kullanicisor->rowCount();

  if ($say==1) {

    $_SESSION['kullanici_mail']=$kullanici_mail;
    header("Location:admin.php");
    exit;



  } else {

    header("Location:admin-giris.php?durum=no");
    exit;
  }
  

}
if (isset($_POST['yorumekle'])) {
  islemkontrol2();
  $kaydet=$db->prepare("INSERT INTO yorumlar SET
   yorum_ad=:yorum_ad,
    uid=:uid,
    yorum_mail=:yorum_mail,
    yorum_yorum=:yorum_yorum
    ");
  $insert=$kaydet->execute(array(
   'yorum_ad' => $_POST['yorum_ad'],
    'uid' => $_POST['uid'],
    'yorum_mail' => $_POST['yorum_mail'],
    'yorum_yorum' => $_POST['yorum_yorum']
    ));

  if ($insert) {

    Header("Location:yorumlar.php?durum=ok");

  } else {

    Header("Location:yorumlar.php?durum=no");
  }
}
if ($_GET['yorumsil']=="ok") {
islemkontrol2();
  $sil=$db->prepare("DELETE from yorumlar where yorum_id=:yorum_id");
  $kontrol=$sil->execute(array(
    'yorum_id' => $_GET['yorum_id']
    ));

  if ($kontrol) {

    Header("Location:uye-yorum.php?durum=ok");

  } else {

    Header("Location:uye-yorum.php?durum=no");
  }

}
if (isset($_POST['iletisim'])) {
  
  $kaydet=$db->prepare("INSERT INTO iletisim SET
    ad=:ad,
    tel=:tel,
    mail=:mail,
    konu=:konu,
    mesaj=:mesaj
    ");
  $insert=$kaydet->execute(array(
   'ad' => $_POST['ad'],
    'tel' => $_POST['tel'],
    'mail' => $_POST['mail'],
    'konu' => $_POST['konu'],
    'mesaj' => $_POST['mesaj']
    ));

  if ($insert) {

    Header("Location:help.php?durum=ok");

  } else {

    Header("Location:help.php?durum=no");
  }
}

if (isset($_POST['basvuru'])) {

if($_FILES["cv"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
{
$dil = $_POST['dil'];
  $uploads_dir = 'basvuru';
  @$tmp_name = $_FILES['cv']["tmp_name"];
  @$name = $_FILES['cv']["name"];
  //resmin isminin benzersiz olması
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);  
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
  $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
  $kaydet=$db->prepare("INSERT INTO basvuru SET
    isim=:isim,
    dogumt=:dogumt,
    dogumy=:dogumy,
    tel=:tel,
    mail=:mail,
    cinsiyet=:cinsiyet,
    ref=:ref,
    dil=:dil,
    egitim=:egitim,
    gecmis=:gecmis,
    cv=:cv
    ");
  $insert=$kaydet->execute(array(
    'isim' => $_POST['isim'],
    'dogumt' => $_POST['dogumt'],
    'dogumy' => $_POST['dogumy'],
    'tel' => $_POST['tel'],
    'mail' => $_POST['mail'],
    'cinsiyet' => $_POST['cinsiyet'],
    'ref' => $_POST['ref'],
    'dil' => $dil,
    'egitim' => $_POST['egitim'],
    'gecmis' => $_POST['gecmis'],
    'cv' => $refimgyol,
    ));

  if ($insert) {

    Header("Location:is-basvuru.php?durum=ok");

  } else {

    Header("Location:is-basvuru.php?durum=no");
  }
}

else{
  Header("Location:is-basvuru.php?durum=word");
}
}
if (isset($_POST['onkayituye'])) {

                            $isim = $_POST['adi'];
                            $eposta = $_POST['mail'];
                            $telefon = $_POST['tel'];
                            $dogum = $_POST['dogum'];
                            $egitim = $_POST['egitim'];
                            
                             if(!filter_var($eposta, FILTER_VALIDATE_EMAIL))
                            {
                                Header("Location:uye-anasayfa.php?durum=eksik");
                            }
                            else if(filter_var($eposta, FILTER_VALIDATE_EMAIL))
                            {
                              
                      
                            $ayarekle=$db->prepare("INSERT INTO kayit SET
                              adi=:adi,
                              dogum=:dogum,
                              tel=:tel,
                              mail=:mail,
                              egitim=:egitim
                              ");

                            $insert=$ayarekle->execute(array(
                              'adi' => $isim,
                              'dogum' => $dogum,
                              'tel' => $telefon,
                              'mail' => $eposta,
                              'egitim' => $egitim
                              ));
                            if ($insert) {
                              Header("Location:uye-anasayfa.php?durum=ok");
                            } else {
                              Header("Location:uye-anasayfa.php?durum=no");
                            }
              }
                          }
if (isset($_POST['onkayit'])) {

                            $isim = $_POST['adi'];
                            $eposta = $_POST['mail'];
                            $telefon = $_POST['tel'];
                            $dogum = $_POST['dogum'];
                            $egitim = $_POST['egitim'];
                            
                             if(!filter_var($eposta, FILTER_VALIDATE_EMAIL))
                            {
                                Header("Location:index.php?durum=eksik");
                            }
                            else if(filter_var($eposta, FILTER_VALIDATE_EMAIL))
                            {
                              
                      
                            $ayarekle=$db->prepare("INSERT INTO kayit SET
                              adi=:adi,
                              dogum=:dogum,
                              tel=:tel,
                              mail=:mail,
                              egitim=:egitim
                              ");

                            $insert=$ayarekle->execute(array(
                              'adi' => $isim,
                              'dogum' => $dogum,
                              'tel' => $telefon,
                              'mail' => $eposta,
                              'egitim' => $egitim
                              ));
                            if ($insert) {
                              Header("Location:index.php?durum=ok");
                            } else {
                              Header("Location:index.php?durum=no");
                            }
              }
                          }

if (isset($_POST['sinavekle'])) {
islemkontrol();

  $kaydet=$db->prepare("INSERT INTO sinav SET
   sinav_soru=:sinav_soru,
    sikA=:sikA,
    sikB=:sikB,
    sikC=:sikC,
    sikD=:sikD,
    sinav_dogru=:sinav_dogru
    ");

  $insert=$kaydet->execute(array(
   'sinav_soru' => $_POST['soru'],
    'sikA' => $_POST['1a'],
    'sikB' => $_POST['1b'],
    'sikC' => $_POST['1c'],
    'sikD' => $_POST['1d'],
    'sinav_dogru' => $_POST['sik']
    ));
 


  if ($insert) {

    Header("Location:sinavekle.php?durum=ok");

  } else {
Header("Location:sinavekle.php?durum=no");
  
  }
}
 
if (isset($_POST['soruekle'])) {
islemkontrol();

  $kaydet=$db->prepare("INSERT INTO sinav SET
    sinav_g=:sinav_g,
   sinav_soru=:sinav_soru,
    sikA=:sikA,
    sikB=:sikB,
    sikC=:sikC,
    sikD=:sikD,
    sinav_dogru=:sinav_dogru
    ");

  $insert=$kaydet->execute(array(
    'sinav_g' => $_POST['sinav_g'],
   'sinav_soru' => $_POST['soru'],
    'sikA' => $_POST['1a'],
    'sikB' => $_POST['1b'],
    'sikC' => $_POST['1c'],
    'sikD' => $_POST['1d'],
    'sinav_dogru' => $_POST['sik']
    ));
 


  if ($insert) {

    Header("Location:sinavekle.php?durum=ok");

  } else {
Header("Location:sinavekle.php?durum=no");
  
  }
}



if (isset($_POST['soruguncelle'])) {
islemkontrol();
  $sinav_id=$_POST['sinav_g'];
  

  $kaydet=$db->prepare("UPDATE sinav SET
    sinav_soru=:sinav_soru,
    sikA=:sikA,
    sikB=:sikB,
    sikC=:sikC,
    sikD=:sikD,
    sinav_dogru=:sinav_dogru
    WHERE sinav_id={$_POST['sinav_g']}");
  $update=$kaydet->execute(array(
    'sinav_soru' => $_POST['soru'],
    'sikA' => $_POST['1a'],
    'sikB' => $_POST['1b'],
    'sikC' => $_POST['1c'],
    'sikD' => $_POST['1d'],
    'sinav_dogru' => $_POST['sik'],
    ));

  if ($update) {

    Header("Location:soru-duzenle.php?durum=ok&sinav_id=$sinav_id");

  } else {

    Header("Location:soru-duzenle.php?durum=no&sinav_id=$sinav_id");
  }

}
if ($_GET['sinavsil']=="ok") {
islemkontrol();
  $sil=$db->prepare("DELETE from sinav where sinav_id=:sinav_id");
  $kontrol=$sil->execute(array(
    'sinav_id' => $_GET['sinav_id']
    ));

  if ($kontrol) {

    Header("Location:admin.php?durum=silok");

  } else {

    Header("Location:admin.php?durum=silno");
  }

}
 ?>