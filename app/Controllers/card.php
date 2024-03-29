<?php

namespace App\Controllers;

class card extends BaseController
{
    public function index()
    {
       
      $db=\Config\Database::connect();
      if(isset($_GET['kartekle'])){

      $kart_adi=$_GET['ad'];
      $no=$_GET['no'];
      $tarih=$_GET['son_tarih'];
      $cvv=$_GET['cvv'];
      $kartekle=$db->query("INSERT INTO ödemeler (ödeme_id,sefer_id,koltuk_id,user_id,kart_adi,odeme_miktari,kredi_karti_numarasi,
      son_tarih,cvv )VALUES('','6','25','2','$kart_adi','850.00','$no','$tarih','$cvv')");
      if($kartekle){
        header("Location:info");
        exit();
       } else{
        echo"<script>alert('Kart eklenemedi');</script>";



          
      }}
      
        
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UMUTTEPE TURİZM</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
    <!--link rel="stylesheet" href="cssfile/login.css"-->
    <link rel="stylesheet" a href="css\font-awesome.min.css">
   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    <style type="text/css">
        
      body{
         margin: 0;
         padding: 0;
         width: 100%;
         height: 100%;
         background-image: url(İmages/21.jpg);
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;}
         </style>
     </head>
  <body>
     <!--this is the header callling(nav bar)-->
     <?php include("nav2.php");
             ?>
      
      <div class="form-container">
      <h2 style="color:black;margin-left:100px;  text-decoration: underline;">Kredi Kartı Bilgileri</h2 ><br><br>
      <form >
      <p style="color:black;margin-left:100px;font-weight: bold;">Kart Adı</p><br>
      <input style="color:black ;margin-left:100px;"  type="text" id="ad" name="ad" required><br><br>
      <p style="color:black;margin-left:100px;font-weight: bold;">Kart Numarası</p><br>
      <input style="color:black;margin-left:100px; " type="number"id="no" name="no" required><br><br>
      <p style="color:black;margin-left:100px;font-weight: bold;">Son Kullanma Tarihi(Ay-Yıl)</p><br>
      <input  style="color:black;margin-left:100px;"type="number" name="son_tarih" id="son_tarih" placeholder="AA/YYYY"><br><br>
      <p style="color:black;margin-left:100px;font-weight: bold;">Güvenlik Kodu(CVV)</p><br>
      <input style="color:black;margin-left:100px; " type="number" id="cvv" name="cvv" required><br><br>
      <input  style="background-color:#006666;width:200px;height:45px;margin-left:100px;margin-top:20px;"type="submit" name="kartekle" value="KART EKLE">        
