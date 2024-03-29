<?php

namespace App\Controllers;

class seat extends BaseController
{
    public function index()
    {
      $db=\Config\Database::connect();
    
          

       if(isset($_GET['koltukekle'])){
        $isim=$_GET['isim'];
        $tc=$_GET['tc'];
        $koltukno=$_GET['koltuk'];
        $tur=$_GET['biletTuru'];
        $koltukrezerve='rezerve';

       
        //tc'den user_id alma
        $query=$db->query("SELECT * FROM `kullanıcılar` WHERE tc_kimlik='$tc'");
        $result=$query->getResultArray();
        if(!empty($result)){
          $user_id = $result[0]['kullanici_id'];
        }
        // gidis ve sefer bilgisinden sefer_id alma
        $gquery=$db->query("SELECT * FROM `seferler` WHERE kalkis_tarihi ='$gidisTarihi'");
        $gresult=$gquery->getResult();
        

        $squery=$db->query("SELECT * FROM `seferler` WHERE kalkis_saati =$seferSaati'");
        $sresult=$squery->getResult();

      if((!empty($gresult))&&(!empty($sresult))){
        $sefer_id=$gresult[0]['sefer_id'];
      }

       $koltukekle=$db->query("INSERT INTO koltuklar (koltuk_id,sefer_id,user_id,koltuk_durum,koltukNumarasi,indirim_orani) VALUES
       ('','2','$user_id','rezerve','$koltukno','$tur')");
       if($koltukekle){
        header("Location:info");
        exit();
       } else{
        echo"<script>alert('Koltuk eklenemedi');</script>";
  }

        
       }
      
     
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
         background-color: rgba(100, 255, 255, 0.22);
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;

       .container{
        display: flex; 
        align-items: flex-start; /}
         
         .bus {
    background-image: url(İmages/seat.jpg); /* Otobüs resmi */
    border: 2px solid black;
    width: 900px; /* Otobüs resminin genişliği */
    height: 300px; /* Otobüs resminin yüksekliği */
    background-position: center 10px; /* Fotoğrafı aşağı kaydırır */
    background-size: contain;
    position: relative;
    cursor: pointer; /* İmlecin fare şeklini değiştir */
  }
  .seat {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.05); /* Koltuk rengi */
    width: 40px; /* Koltuğun genişliği */
    height: 40px; /* Koltuğun yüksekliği */
    border-radius: 20%; /* Koltuk şekli */
    cursor: pointer; /* İmlecin fare şeklini değiştir */
  }   
 
}
  .bos{
    position: absolute;
    background-color: rgba(0,0,0, 0.3); 
    width: 40px; 
    height: 40px; 
    border-radius: 20%; 
    

  }
  .satili{
    position: absolute;
    background-color: rgba(48, 194, 124, 0.5); 
    width: 40px; 
    height: 40px; 
    border-radius: 20%; 
    margin-left:80px;
  }
  .rzrve{
    position: absolute;
    background-color: rgba(250, 247, 90); 
    width: 40px; 
    height: 40px; 
    border-radius: 20%; 
    margin-left:160px;
  }
  .secili{
    position: absolute;
    background-color: rgba(219, 20, 20); 
    width: 40px; 
    height: 40px; 
    border-radius: 20%; 
    margin-left:240px;
  }
  #veriAlani{
    position: relative;
    margin-left:100px;
  }
  #rezerve{
    width: 150px; 
    height: 80px;
    background-color:#006666;
    margin-left:1200px;
    font-weight: bold;
    border: 2px solid black;
  }
  #odeme{
    width: 150px; 
    height: 80px;
    background-color:#006666;
    font-weight: bold;
    border: 2px solid black;
  }
  
  #bayButton{
    width: 150px; 
    height: 40px;
    background-color:#4287f5;
   
  }
  #bayanButton{
    width: 150px; 
    height: 40px;
    background-color:#cd76d6;
    
  }

  #bilgiFormu,
  #biletFormu {
    display: inline-flex;
    vertical-align: top;
    margin-right: 50px;
  }
</style>


     
     </style>
     </head>
  <body>
     <!--this is the header callling(nav bar)-->
     <?php include("nav2.php");
             ?>
     <?php  $gidisTarihi = $_GET['gidis-tarihi'];
    echo "<b style='color:black; '>Gidiş Tarihi: $gidisTarihi </b><br><br>"; ;?>    
    <?php  $seferSaati = $_GET['sefer-saati'];
    echo "<b style='color:black; '>Sefer Saati: $seferSaati</b><br><br>"; ;?>    
    <h3><u style="color:#006666">KOLTUK SEÇİMİ</u></h3>
   <div id="myModal" class="modal">

  <div class="modal-content">
  <b id="modalText" style="color:black">İlk Koltuk Sonrasında Cinsiyet Seçiniz /Lütfen Yolcu Bilgilerini eksiksiz Giriniz
  /Maksimum 2 bilet seçebilirsiniz/*İndirimli Bilet türlerinde gerekli belge yolculuk günü talep edilecektir. </b><br><br>
    <button id="bayButton" style="color:black">Bay</button>
    <button id="bayanButton" style="color:black">Bayan</button>
  
   
    
 
</div>
<div class="container">     
   <div class="bus" id="bus">

  <div class="seat" id="32" style="left: 836px; top: 45px;"></div>
  <div class="seat" id="29" style="left: 778px; top: 45px;"></div>
  <div class="seat" id="26" style="left: 721px; top: 45px;"></div>
  <div class="seat" id="23" style="left: 560px; top: 45px;"></div>
  <div class="seat" id="18" style="left: 505px; top: 45px;"></div>
  <div class="seat" id="15" style="left: 448px; top: 45px;"></div>
  <div class="seat" id="12" style="left: 392px; top: 45px;"></div>
  <div class="seat" id="9" style="left: 335px; top: 45px;"></div>
  <div class="seat" id="6" style="left: 280px; top: 45px;"></div>
  <div class="seat" id="3" style="left: 223px; top: 45px;"></div>
  <div class="seat" id="31" style="left: 836px; top: 93px;"></div>
  <div class="seat" id="28" style="left: 778px; top: 93px;"></div>
  <div class="seat" id="25" style="left: 721px; top: 93px;"></div>
  <div class="seat" id="22" style="left: 560px; top: 93px;"></div>
  <div class="seat" id="17" style="left: 505px; top: 93px;"></div>
  <div class="seat" id="14" style="left: 448px; top: 93px;"></div>
  <div class="seat" id="11" style="left: 392px; top: 93px;"></div>
  <div class="seat" id="8" style="left: 335px; top: 93px;"></div>
  <div class="seat" id="5" style="left: 280px; top: 93px;"></div>
  <div class="seat" id="2" style="left: 223px; top: 93px;"></div>
  <div class="seat" id="30" style="left: 836px; top: 230px;"></div>
  <div class="seat" id="27" style="left: 778px; top: 230px;"></div>
  <div class="seat" id="24" style="left: 721px; top: 230px;"></div>
  <div class="seat" id="21" style="left: 670px; top: 230px;"></div>
  <div class="seat" id="20" style="left: 618px; top: 230px;"></div>
  <div class="seat" id="19" style="left: 560px; top: 230px;"></div>
  <div class="seat" id="16" style="left: 505px; top: 230px;"></div>
  <div class="seat" id="13" style="left: 448px; top: 230px;"></div>
  <div class="seat" id="10" style="left: 392px; top: 230px;"></div>
  <div class="seat" id="7" style="left: 335px; top: 230px;"></div>
  <div class="seat" id="4" style="left: 280px; top: 230px;"></div>
  <div class="seat" id="1" style="left: 223px; top: 230px;"></div>
</div>



<div id="veriAlani" style="color:black "></div>
</div>



<div class="bos" id="bos"><br><br>
<p style="color:black">Boş</p></div>
<div class="satili" id="satili"><br><br>
<p style="color:black">Seçili</p></div>
<div class="rzrve" id="rzrve"><br><br>
<p style="color:black">Rezerve </p></div>
<div class="secili" id="secili"><br><br>
<p style="color:black">Satın Alındı</p></div>

<button id="rezerve" style="color:black" onclick="window.location.href='info'">REZERVE ET</button>
<button id="odeme" style="color:black">ÖDEMEYE GEÇ</button>
<h3><u style="color:#006666" >YOLCU BİLGİLERİ </u></h3><br>

<form  style="margin-right:300px; " method="get" >
  <label for="isim" style="color:black">İsim - Soyisim</label>
  <input type="text"style="color:black" id="isim" name="isim" required><br><br>
  <label for="tc" style="color:black">Tc Kimlik No:</label>
  <input type="number" style="color:black"id="tc" name="tc" required><br><br>
  <label for="koltuk" style="color:black">Koltuk No:</label>
  <input type="number" style="color:black" id="koltuk" name="koltuk" required><br><br>
  <label for="biletTuru" style="color:black">Bilet Türü:</label>
  <select id="biletTuru" name="biletTuru" style="color:black" required>
    <option style="color:black" value="ogrenci">*Öğrenci(%15 indirimli)</option>
    <option style="color:black" value="memur">*Memur(%15 indirimli)</option>
    <option style="color:black" value="65yas">*65 Yaş ve Üstü(%15 indirimli)</option>
    <option style="color:black" value="asker">*Güvenlik Güçleri(Ücretsiz)</option>
    <option style="color:black" value="diger">Diğer(7 yaş ve üstü)</option>
  </select>
  <input  style="color:black"type="submit" name="koltukekle" value="Ekle"> <br><br>
</form>





<script>

var gelenVeri = "";
    
    // Veriyi HTML içine yerleştirme
    var veriAlani = document.getElementById("veriAlani");
    veriAlani.textContent = gelenVeri ;

const bus = document.getElementById('bus');
const seats = bus.querySelectorAll('.seat');
const modal = document.getElementById("myModal");
const modalText = document.getElementById("modalText");
const bayButton = document.getElementById("bayButton");
const bayanButton = document.getElementById("bayanButton");
const devametButton = document.getElementById("devamet");


let selectedSeat = null;
let seatColor = null;
let selectedSeatInfo = [];


// Her koltuğa tıklama olayı ekleme
seats.forEach(seat => {
  seat.addEventListener('click', () => {
    if (selectedSeat) {
      selectedSeat.style.backgroundColor = '';
    }

    // Koltuğun id'sini alma
    const seatId = seat.id;

    // Seçili koltuğu güncelleme
    selectedSeat = seat;
    seatColor = seat.style.backgroundColor;
    

    // Eğer koltuk zaten seçili ise seçimi iptal etme
    if (seat.style.backgroundColor === 'blue' || seat.style.backgroundColor === 'pink') {
      seat.style.backgroundColor = '';
      selectedSeat = null;
      seatColor = null;
      return;
    }


modal.style.display = "block";





bayButton.onclick = function() {
  seat.style.backgroundColor = 'rgba(48, 194, 124,0.5)'; 
  selectedSeat = null;
  seatColor = null;
  selectedSeatInfo = "Seçilen Koltuk Numarası: " + seatId + ", Cinsiyet: Bay";
      updateSelectedSeatInfo(selectedSeatInfo);
}


bayanButton.onclick = function() {
  seat.style.backgroundColor = 'rgba(48, 194, 124,0.5)';
  selectedSeat = null;
  seatColor = null;
  selectedSeatInfo = "Seçilen Koltuk Numarası: " + seatId + ", Cinsiyet:Bayan";
  updateSelectedSeatInfo(selectedSeatInfo);
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    selectedSeat = null;
    seatColor = null;
  }
}

  });
});
// Seçilen koltuğun bilgisini güncelleyen fonksiyon
function updateSelectedSeatInfo(info) {
  selectedSeatInfo = info;
  veriAlani.innerHTML += selectedSeatInfo + "<br>";
}

devamet.onclick = function() {
  // Yönlendirilecek sayfanın URL'ini belirtin
  window.location.href = "info";
  const selectedSeatInfoQueryString = encodeURIComponent(selectedSeatInfo);
  window.location.href = "info?selectedSeatInfo=" + selectedSeatInfoQueryString;
};

</script>


</body>           



   
