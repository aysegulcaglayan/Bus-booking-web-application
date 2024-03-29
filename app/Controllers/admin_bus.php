<?php

namespace App\Controllers;

class admin_bus extends BaseController
{
    public function index()
    {
        $db=\Config\Database::connect();
        if(isset($_GET['otoekle'])) {
           $marka=$_GET['marka'];
           $model=$_GET['model'];
           $plaka=$_GET['plaka'];
           $koltuk=$_GET['koltuk'];
       
          $otoekle=$db->query("INSERT INTO otobüsler(otobüs_id,marka,model,plaka,koltuk_sayisi) 
          VALUES ('', '$marka','$model','$plaka','$koltuk')");
          if($otoekle){
           header("Location: admin_bus");
           exit(); }
           else{
                echo"<script>alert('Otobüs eklenemedi');</script>";
          }
        }
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
	
     <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
</head>
<body>

   
              
             
   

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Yönetici Paneli</title>
  <!--cdn icon library -->
  
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
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
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
    margin-left: 20px;
}

.btnPolicy:hover{

	background:red;
    padding: 7px 7px 7px 7px;
    cursor: pointer;

}
 /* Add new CSS for form positioning */
 .forms-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin-top: 50px;
    }

    .form-container {
      width: 45%; /* Adjust as needed */
      background-color: rgba(255, 255, 255, 0.7);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }



	</style>
</head>
<body>
  <input type="checkbox" id="check">

  <label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>

</label>
  <div class="sidebar">
<header><img src="İmages/Re.png">

</header>
<ul>


    <li><a href="admin_route">Rotaları Yönet</a></li>
    <li><a href="admin_bus">Araçları Yönet</a></li>
    <li><a href="yolcu">Yolcu Bilgileri</a></li>
    <li><a href="admin_odeme">Ödeme İşlemleri</a></li>
    <li><a href="Login_v">Çıkış Yap</a></li>
    
  <!--  <li><a href="#">Event</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Service</a></li>
    <li><a href="#">Contact</a></li>-->
    </ul>
 <!--  <li>
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-youtube"></i></a>
        
      </div>
    </li>-->
   

</div>

 <!-- Form containers -->
 <div class="forms-container">
    <div class="form-container">
      <h2 style="color:black">Otobüs  Ekle</h2>
      <form  ><br>
      <p style="color:black">Marka</p><br>
      <input  style="color:black"type="text" name="marka" id="marka" placeholder="Marka "><br><br>
      <p style="color:black">Model</p><br>
      <input  style="color:black"type="text" name="model" id="model" placeholder="Model"><br><br>
      <p style="color:black">Plaka</p><br>
      <input  style="color:black"type="text" name="plaka" id="plaka" placeholder="Plaka"><br><br>
      <p style="color:black">Koltuk Sayısı</p><br>
      <input  style="color:black"type="text" name="koltuk" id="koltuk" placeholder="Koltuk Sayısı"><br><br>
      <input style="color:black" type="submit" name="otoekle" value="Ekle">  
      </form>
    </div>
    
 



