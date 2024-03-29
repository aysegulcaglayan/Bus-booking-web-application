<?php

namespace App\Controllers;

class yolcu extends BaseController
{
    public function index()
    {
        $db=\Config\Database::connect();
        $query=$db->query("SELECT * FROM `kullanıcılar`");
        $result=$query->getResultArray();

        if (!empty($result)) {
            echo '<table style="background-color: rgba(255, 255, 255, 0.7);">';
            echo '<tr>';
            echo '<th>Kullanıcı Adı</th>';
            echo '<th>Email</th>';
            echo '<th>İsim</th>';
            echo '<th>Soyisim</th>';
            echo '<th>TC</th>';
            echo '<th>Telefon Numarası</th>';
            echo '<th>Cinsiyet</th>';
            echo '<th>Yaş</th>';
            echo '<th>Şifre</th>';
            echo '<th>Meslek</th>';
            echo '<th>Bakiye</th>';
            echo '</tr>';
            
            foreach ($result as $row) {
                echo '<tr>';
                echo '<td>' . $row['kullanıcı_Adı'] . '</td>';
                echo '<td>' . $row['e_mail'] . '</td>';
                echo '<td>' . $row['isim'] . '</td>';
                echo '<td>' . $row['soyisim'] . '</td>';
                echo '<td>' . $row['tc_kimlik'] . '</td>';
                echo '<td>' . $row['telefon_numarası'] . '</td>';
                echo '<td>' . $row['cinsiyet'] . '</td>';
                echo '<td>' . $row['yaş'] . '</td>';
                echo '<td>' . $row['şifre'] . '</td>';
                echo '<td>' . $row['müşteri_mesleği'] . '</td>';
                echo '<td>' . $row['bakiye'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "Hiçbir sonuç bulunamadı";
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