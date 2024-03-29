<?php

namespace App\Controllers;

class seat2 extends BaseController
{
  
    public function index()
    {
      
    
      $db = \Config\Database::connect();

      if (isset($_GET['koltukekle'])) {
          $isim = $_GET['isim'];
          $tc = $_GET['tc'];
          $koltukno = $_GET['koltuk'];
          $tur = $_GET['biletTuru'];
          $gidis = $_GET['gidis'];
          $saat = $_GET['saat'];
      
          // Seçilen bilet turuna göre indirim oranını belirle
          switch ($tur) {
              case "ogrenci":
              case "memur":
              case "65yas":
                  $indirimOrani = 15;
                  break;
              case "asker":
                  $indirimOrani = 100; // Askerler için tam indirim
                  break;
              case "diger":
              default:
                  $indirimOrani = 0; // Diğer kategoriler için indirim yok
                  break;

          }
          

    
          // tc'den user_id alma
          $query = $db->query("SELECT * FROM `kullanıcılar` WHERE tc_kimlik='$tc'");
          $result = $query->getResultArray();
          
          if (!empty($result)) {
              $user_id = $result[0]['kullanici_id'];
      
              // gidis ve sefer bilgisinden sefer_id alma
              $gquery = $db->query("SELECT * FROM `seferler` WHERE kalkis_tarihi ='$gidis'");
              $gresult = $gquery->getResultArray();
      
              if (!empty($gresult)) {
                  $sefer_id = $gresult[0]['sefer_id'];

                  // Koltuk eklemeyi ve rezervasyon yapmayı dene
                  $koltukekle = $db->query("INSERT INTO koltuklar (koltuk_id,sefer_id,user_id,koltuk_durum,koltukNumarasi,indirim_orani) VALUES
                                          ('','$sefer_id','$user_id','rezerve','$koltukno','$indirimOrani')");
                    
                  $rezervedurum = 'rezerve'; // Doğru şekilde ata
                  $an = date("Y-m-d H:i:s");
              
                  /*$rezerve=$db->query("INSERT INTO rezervasyonlar(rezervasyon_id,user_id,sefer_id,koltuk_no,rezervasyon_tarihi,rezervasyon_durumu)
                  VALUES('','$user_id','$sefer_id','$koltukno','$an','$rezervedurum')");*/


            
                  if($koltukekle){
                    echo "<script>
                     if(confirm('Rezervasyon tamamlandı. Ödeme işlemine geçmek ister misiniz?')) {
                window.location.href = 'info'; // Yönlendirme
                    }
                    </script>";
                  }
                  else{
                    echo"<script>alert('Rezerve İşlemi Tamamlanamadı');</script>";
                  }
                

                   }}  

    }}}
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
     </head>
  <body>
     <!--this is the header callling(nav bar)-->
     <?php include("nav2.php");
             ?>
    
    <br><br><h3><u style="color:#006666">KOLTUK SEÇİMİ</u></h3><br>
   <div id="myModal" class="modal">

  <div class="modal-content">
  <b id="modalText" style="color:black">İlk Koltuk Sonrasında Cinsiyet Seçiniz /Lütfen Yolcu Bilgilerini eksiksiz Giriniz
  /Sadece 1 bilet seçebilirsiniz/*İndirimli Bilet türlerinde gerekli belge yolculuk günü talep edilecektir. </b><br><br>
    <button id="bayButton" style="color:black">Bay</button>
    <button id="bayanButton" style="color:black">Bayan</button><br>
    <br><br>
   
   
    
 
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



<br><br><div class="bos" id="bos"><br><br>
<p style="color:black">Boş</p></div>
<div class="satili" id="satili"><br><br>
<p style="color:black">Seçili</p></div>
<div class="rzrve" id="rzrve"><br><br>
<p style="color:black">Rezerve </p></div>
<div class="secili" id="secili"><br><br>
<p style="color:black">Satın Alındı</p></div><br>


<br><br><h3><u style="color:#006666;margin-left:700px;" >YOLCU BİLGİLERİ </u></h3><br><br><br><br>

<form  style="margin-right:300px;" >
  <label for="isim" style="color:black;margin-left:20px;">İsim - Soyisim:</label>
  <input type="text"style="color:black;margin-left:30px;" id="isim" name="isim" required>
  <label for="tc" style="color:black;margin-left:200px;">Tc Kimlik No:</label>
  <input type="number" style="color:black;margin-left:20px;"id="tc" name="tc" required>
  <label for="koltuk" style="color:black;margin-left:120px;">Koltuk No:</label>
  <input type="number" style="color:black" id="koltuk" name="koltuk" required><br><br><br><br>
  <label for="biletTuru" style="color:black;margin-left:20px;">Bilet Türü:</label>
  <select id="biletTuru" name="biletTuru" style="color:black;margin-left:30px;" required>
    <option style="color:black" value="ogrenci">*Öğrenci(%15 indirimli)</option>
    <option style="color:black" value="memur">*Memur(%15 indirimli)</option>
    <option style="color:black" value="65yas">*65 Yaş ve Üstü(%15 indirimli)</option>
    <option style="color:black" value="asker">*Güvenlik Güçleri(Ücretsiz)</option>
    <option style="color:black" value="diger">Diğer(7 yaş ve üstü)</option>
  </select>
  
<label for="tc" style="color:black;margin-left:180px;">Gidiş Tarihi:</label>
  <input type="text" style="color:black;margin-left:20px;"id="gidis" name="gidis" required>
  <label for="saat" style="color:black;margin-left:120px;">Sefer Saati:</label>
  <select id="saat" name="saat" style="color:black;margin-left:120px;" required>
    <option style="color:black" value="yedi">07.00</option>
    <option style="color:black" value="onbes">15.00</option>
    <option style="color:black" value="yirmiuc">23.00</option></select><br><br><br>
     <label  style="color:black;margin-left:20px" for="seyahat-tipi">Seyahat Tipi:</label>
           <select  style="color:black;margin-left:30px;" id="seyahat-tipi" name="seyahat-tipi" required>
            <option style="color:black" value="gidis">Gidiş</option>
            <option style="color:black" value="gidis-donus">Gidiş-Dönüş</option>
           </select>
          
      
         <!--div id="donus-tarihi-div" style="display: none;">
            <label style="color:black;margin-left:530px;"  for="donus-tarihi">Dönüş Tarihi:</label>
            <input style="color:black;margin-left:20px;"  type="text" id="donus-tarihi" name="donus-tarihi" value="GG/AA/YYYY">
        </div>
        <div id="cikis-saati-div" style="display: none;" >
            <label style="color:black;margin-left:950px;" for="cikis-saati">Sefer Saati:</label>
            <input style="color:black ;" list="cikis-saati-list" id="cikis-saati" name="cikis-saati" required>
            <datalist style="color:black" id="cikis-saati-list">
                <option value="07.00"></option>
                <option value="15.00"></option>
                <option value="23.00"></option>
                
        </datalist><br><br>
        </div><br><br-->

  
        
  <input  style="color:black;  width: 170px; 
    height: 50px;
    background-color:#006666;
    font-weight: bold;
    margin-left:700px;
    border: 2px solid black;"type="submit" name="koltukekle" value="DEVAM ET">
     
    </form>      
    <script>
        document.getElementById('seyahat-tipi').addEventListener('change', function() {
            var donusTarihiDiv = document.getElementById('donus-tarihi-div');
            var cikisSaatiDiv = document.getElementById('cikis-saati-div');
            if (this.value === 'gidis-donus') {
                donusTarihiDiv.style.display = 'block';
                cikisSaatiDiv.style.display='block';
                
            } else {
                donusTarihiDiv.style.display = 'none';
                
            }
        });
    </script>
    <script>
    document.querySelector('form[action="seat"]').addEventListener('submit', function(event) {
        var gidisTarihi = document.getElementById('gidis-tarihi').value;
        var seferSaati = document.getElementById('sefer-saati').value;
        var seyahatTipi = document.getElementById('seyahat-tipi').value;
        var donusTarihi = document.getElementById('donus-tarihi').value;
        var cikisSaati = document.getElementById('cikis-saati').value;

        if (gidisTarihi === '' || seferSaati === '' || (seyahatTipi === 'gidis-donus' && (donusTarihi === '' || cikisSaati === ''))) {
            alert('Lütfen ilgili doldurunuz.');
           
        }
        document.getElementById('gTarihi').value = gidisTarihi;
    });
</script>
    




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



   
