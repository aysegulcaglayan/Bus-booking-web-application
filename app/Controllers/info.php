<?php

namespace App\Controllers;

class info extends BaseController
{
    public function index()
    {
     
      
    }}
?>

<style type="text/css">

body{

background-image: url("İmages/20.jpg");
background-position: center;
background-size: cover;
height: 700px;
background-repeat: no-repeat;
background-attachment: fixed;

}
.adminTopic{
text-align: center;
color: #fff;


}

table
{
width:99%;
border-collapse: separate !important;
margin:auto;
/*/table-layout:fixed;/*/
text-align:center;
margin-top:50px;
background-color: rgb(255, 255, 255);
border-radius: 10px 10px 0px 0px;

}
table th
{
border-bottom:2px solid rgb(187, 187, 187);
padding:10px 0px 10px 0px;
font-family: "balsamiq_sansitalic" !important;
}
table tr td
{
border-right: 2px solid rgb(187, 187, 187);
height: 58px;
padding: 22px 0px 0px 0px;
font-family: "monospace;" !important;
border-bottom: 2px solid rgb(187, 187, 187);
font-size: 20px;
}
table tr td a
{
/*background-color: rgb(255, 196, 0);*/
color: white;
border-radius: 10px;
padding: 6px;
text-decoration: none;
margin: 50px;
font-weight: 700;
}

table tr td button:hover
{

/*
background: rgb(255, 255, 255);
text-decoration:underline;
color:tomato;
padding: 4px;
border:2px solid tomato;
transition:background-color 0.2s;*/

padding: 5px 5px 5px 5px;
border: 2px solid yellow;
border-radius: 7px;
background-color: red;
color: white;
cursor: pointer;
}
button 
{
padding: 5px 5px 5px 5x;
}
.btnPolicy{

padding: 5px 5px 5px 5px;
border: 2px solid yellow;
border-radius: 7px;
background-color: red;
color: white;
margin-left: 50px;
}

.btnPolicy:hover{

background:red;
padding: 7px 7px 7px 7px;
cursor: pointer;

}

.forms-container {
display: flex;
justify-content: space-around;
align-items: center;
margin-top: 0px;
}

.form-container {
width: 100%; 
background-color: rgba(255, 255, 255, 0.7);
padding: 20px;
border-radius: 0px;
box-shadow: 0 0 0px rgba(0, 0, 0, 0.1);
}
.custom-button {
      background-color: #006666;
      color: white;
      width: 200px;
      height: 45px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      margin-left:1000px;
    }
    .custom-button2 {
      background-color: #006666;
      color: white;
      width: 200px;
      height: 45px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      margin-left:1000px;
    }




</style>
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
      <h2 style="color:black;  text-decoration: underline;margin-left:150px;">Ücret Bilgileri</h2>
      
      <button class="custom-button" onclick="window.location.href='card';">Kart Ekle</button>
      
      <form action="bilet" >
      <p style="color:black;margin-left:150px;font-weight: bold;">Bilet Bedeli</p><p style="margin-left:900px;color:black">* Bileti satın almadan rezervasyon yapabilirsiniz.Fakat seferden en geç 2 gün önce satın alınmayan biletler iptal edimektedir.</p>
      <ul style="color:black;margin-left:150px;">1000 TL</ul><br>
            
      <p style="color:black;margin-left:150px;font-weight: bold;">İndirim Oranı:</p><br>
     
      <p style="color:black;margin-left:150px;"></p><br>
          

      <p style="color:black;margin-left:150px;font-weight: bold;">Ödenecek Tutar</p><br>
       <p style="color:black;margin-left:150px;">850 TL</p>
     

            
      
      
      
      <script
    src="https://checkout.stripe.com/checkout.js"
    class="stripe-button"
    data-key="pk_test_51OwtSDIDgNfTKPGPHpUrTaXd6mcDkZ3WcRLby8vIOqhFCqHSjNWks6BwjJ19fmHX4y62EiScFFNJpx0g0q1FtPx60080aGHKZq"
    data-name="Bilet Satın Alma"
    data-description="Monthly subscription with 30 days trial"
    data-amount="1000"
    data-currency="TRY"
    data-label="ÖDEMEYİ TAMAMLA">
  </script>
      </form>

    </div>
  </div>
 




             