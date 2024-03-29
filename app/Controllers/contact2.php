<?php

namespace App\Controllers;

class contact2 extends BaseController
{
    public function index()
    {
       
        
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>İLETİŞİM</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
     <link rel="stylesheet" href="cssfile/contact_us.css">
  <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <style type="text/css">

     
       body{
       padding: 0;
       margin: 0;
       line-height: 1.5;
       box-sizing: border-box;
       color:rgba(248, 248, 248, 0.938);
       background-image: url(İmages/7.jpg);
       background-size: cover;
       background-repeat: no-repeat;
       background-attachment: fixed;
 
      }
      
    </style>

  </head>
  <body>



  


              <!--this is the header callling(nav bar)-->

            <?php include("nav2.php");
             ?>


            <section id="fancy-form">
   <div class="container">
    <div class="form-sections">
      <!-- Form left -->
      <div class="Form-left">
        <h1 style="color:black"> İLETİŞİM BİLGİLERİ</h1>
        <div class="line"></div> <!--border-bottom line-->
       <br>

        <!--first Heading -->
        <h4>GENEL MERKEZ</h4>
         <span>Tepecik İş Merkezi Tepecik-İzmit/Kocaeli</span>
         <hr><br><br>

         <!--second Heading -->
        <h4>TELEFON NUMARAMIZ</h4>
         <span>(+90) 262 555 47 30</span>
         <hr><br><br>

       <!--third Heading -->
        <h4>EMAİL ADRESİMİZ</h4>
         <span>umuttepeturizm@gmail.com</span>
         <hr> <br>

         <!-- social media icons 
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>-->
      </div>

      <!-- form right -->
      <div class="Form-right">
        <h1 style="color:black">İLETİŞİM FORMU</h1>
        <div class="line"></div>
        <!-- form -->
        <form action="" >
          <h5 style="color:black" >İsim Soyisim</h5>
          <input type="text" style="color:black"><br><br>
          <h5 style="color:black">E-mail Adresi</h5>
          <input type="email" style="color:black"><br><br>
          <h5 style="color:black">Telefon Numarası</h5>
          <input type="number" style="color:black"><br><br>
          <h5 style="color:black">Mesajınız</h5>
          <textarea name="" id="" cols="50" rows="7" style="color:black"></textarea><br>
          <button>Gönder</button>
        </form>
      </div>
    </div>
    </div>
  </section>

             


  </body>
</html>
