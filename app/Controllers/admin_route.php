<?php

namespace App\Controllers;

class admin_route extends BaseController
{
    public function index()
    {
        $db=\Config\Database::connect();
        if(isset($_GET['sehirekle'])) {
           $sehir=$_GET['sehir'];
       
          $sehirekle=$db->query("INSERT INTO şehiler(sehir_id,şehir_adi) VALUES ('', '$sehir')");
          if($sehirekle){
           header("Location: admin_route");
           exit(); }
           else{
                echo"<script>alert('Şehir eklenemedi');</script>";
          }
        }
        if(isset($_GET['seferekle'])) {
            $ksehir=$_GET['ksehir'];
            $vsehir=$_GET['vsehir'];
            $ktarih=$_GET['ktarihi'];
            $cikis_saati=$_GET['cikis-saati'];
            $vzamanı=$_GET['vzamanı'];
            $sure=$_GET['sure'];
            $ucret=$_GET['ucret'];
            $plaka=$_GET['plaka'];
            $kquery=$db->query("SELECT * FROM `şehiler` WHERE şehir_adi='$ksehir'");
            $kresult=$kquery->getResultArray();

            $vquery=$db->query("SELECT * FROM `şehiler` WHERE şehir_adi='$vsehir'");
            $vresult=$vquery->getResultArray();

            $otoquery=$db->query("SELECT * FROM `otobüsler` WHERE plaka='$plaka'");
            $otoresult=$otoquery->getResultArray();
    
          
            if (!empty($kresult) && !empty($vresult) && !empty($otoresult)) {
                $ksehir_id = $kresult[0]['sehir_id'];
                $vsehir_id = $vresult[0]['sehir_id'];
                $otobus_id = $otoresult[0]['otobüs_id'];

                $seferekle=$db->query("INSERT INTO seferler(sefer_id,kalkis_sehir_id,varis_sehir_id,kalkis_tarihi,kalkis_saati,varis_saati,yolculuk_suresi,otobüs_id,ücret)
                VALUES ('', '$ksehir_id','$vsehir_id ','$ktarih',$cikis_saati,$vzamanı,$sure,'$otobus_id ','$ucret')");

               if($seferekle){
                header("Location: admin_route");
                exit(); }
                else{
                  echo"<script>alert('sefer eklenemedi');</script>";
               }
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
 
 .forms-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin-top: 50px;
    }

    .form-container {
      width: 45%; 
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
      <h2 style="color:black">Şehir Ekle</h2>
      <form  ><br>
      <p style="color:black">Şehir</p><br>
      <input  style="color:black"type="text" name="sehir" id="sehir" placeholder="Şehir "><br><br>
      
      <input style="color:black" type="submit" name="sehirekle" value="Ekle">  
      </form>
    </div>
    <div class="form-container">
      <h2 style="color:black">Sefer Bilgisi Ekle</h2><br>
      <form >
      <p style="color:black">Kalkış Şehri</p>
      <input style="color:black " list="kalkis-sehri-list" id="ksehir" name="ksehir" required>
            <datalist style="color:black" id="kalkis-sehri-list">
                <option value="Kocaeli"></option>
                <option value="Artvin"></option>
                <option value="Bursa"></option>
                <option value="Sinop"></option>
            </datalist><br><br>
            <p style="color:black">Varış Şehri</p>
      <input style="color:black " list="varis-sehri-list" id="vsehir" name="vsehir" required>
            <datalist style="color:black" id="varis-sehri-list">
                <option value="Kocaeli"></option>
                <option value="Artvin"></option>
                <option value="Bursa"></option>
                <option value="Sinop"></option>
            </datalist><br><br>  

        <p style="color:black">Kalkış Tarihi</p>
      <input  style="color:black"type="text" name="ktarihi" id="ktarihi" placeholder="GG/AA/YYYY"><br><br>    
     
      <p style="color:black">Kalkış  Zamanı</p>
      <input style="color:black " list="cikis-saati-list" id="cikis-saati" name="cikis-saati" required>
            <datalist style="color:black" id="cikis-saati-list">
                <option value="07.00"></option>
                <option value="15.00"></option>
                <option value="23.00"></option>
                
            </datalist><br><br>
      <p style="color:black">Varış Zamanı</p>
      <input  style="color:black"type="text" name="vzamanı" id="vzamanı" placeholder="Varış zamanı"><br><br>
      <p style="color:black">Yolculuk Süresi</p>
      <input  style="color:black"type="text" name="sure" id="sure" placeholder="Yolculuk Süresi"><br><br>
      <p style="color:black">Otobüs Plakası</p>
      <input  style="color:black"type="text" name="plaka" id="plaka" placeholder="Otobüs Plakası"><br><br>
      <p  style="color:black">Ücret</p>
      <input style="color:black" type="ucret" name="ucret" placeholder="Ücret"><br><br>
      <input  style="color:black"type="submit" name="seferekle" value="Ekle"> 
      </form>
    </div>
  </div>
 



