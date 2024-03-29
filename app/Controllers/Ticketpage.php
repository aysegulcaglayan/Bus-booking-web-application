<?php

namespace App\Controllers;

class Ticketpage extends BaseController
{
    public function index()
    {
        $db=\Config\Database::connect();
        if(isset($_GET['rezervasyon'])){
            $tarih=$_GET['gidis-tarihi'];
            $saat=$_GET['sefer-saati'];
             // gidis ve sefer bilgisinden sefer_id alma
       $gquery=$db->query("SELECT * FROM `seferler` WHERE kalkis_tarihi ='$gidisTarihi'");
        $gresult=$gquery->getResultArray();
        

        $squery=$db->query("SELECT * FROM `seferler` WHERE kalkis_saati =$seferSaati'");
        $sresult=$squery->getResultArray();

       if((!empty($gresult))&&(!empty($sresult))){
        $sefer_id=$gresult[0]['sefer_id'];}
      
      
    }}
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
    <link rel="stylesheet" href="cssfile/login.css">
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
                background-size: cover;

            }
         label {
            display: block;
            color: black;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="date"] {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            margin-right: 200px;
        }
        #seyahat-tipi {
        color: black; 
        font-size: 16px; 
        border: 1px solid #ccc; 
        border-radius: 5px; 
        background-color: white; 
        margin-right: 50px;
}

        
        form {
            display: flex;
            flex-direction: row; 
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;

        }

        form>div {
            flex: 1;
            margin-right: 50px;
        }
            
        
    </style>
     </head>
  <body>
     <!--this is the header callling(nav bar)-->
     <?php include("nav2.php");?>
    <?php  $kalkisNoktasi = $_GET['city'];
    echo "<b style='color:black; '>Kalkış Noktası: $kalkisNoktasi</b><br><br>"; ;?>    
    <?php  $varisNoktasi = $_GET['city2'];
    echo "<b style='color:black; '>Varış Noktası: $varisNoktasi</b><br><br>"; ;?>    
   
    
   
    <form action="seat2" method="get">
        <div style="display: flex; flex-wrap: wrap;flex-direction: row;">
         <div style="flex: 1; margin-right: 20px;">
           <label style="color:black ;text-decoration: underline;"  for="gidis-tarihi">Gidiş Tarihi:</label>
           <input  style="color:black"  type="text" id="gidis-tarihi" name="gidis-tarihi"  required><br><br>
           <div>
            <label style="color:black;text-decoration: underline;" for="sefer-saati">Sefer Saati:</label>
            <input style="color:black ; width: 200px; height: 50px; border-radius: 10px;" list="sefer-saati-list" id="sefer-saati" name="sefer-saati" required>
            <datalist style="color:black; text-size:20%" id="sefer-saati-list">
                <option value="07.00"></option>
                <option value="15.00"></option>
                <option value="23.00"></option>
               
            </datalist><br><br>
       </div>
       
          
      <input style="color:white ;background-color:#006666;width: 200px; height: 50px; border-radius: 10px; font-size: 20px; "
        name="rezervasyon"  type="submit" value="Rezervasyon Yap">
    </form>      
    
   

</body>
</html>