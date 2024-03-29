<?php

namespace App\Controllers;

class admin_bus2 extends BaseController
{
    public function index()
    {
    
        $db=\Config\Database::connect();
        
        if(isset($_GET['soforrekle'])) {
            $sofor_isim=$_GET['sisim'];
            $sofor_soyisim=$_GET['ssoyisim'];
            $soforr_tc=$_GET['soforrtc'];
            $soforr_tel=$_GET['soforrtel'];
       
            $soforrekle=$db->query("INSERT INTO soforler(sofor_id,sofor_isim,sofor_soyisim,sofor_tc,sofor_tel)
             VALUES ('', '$sofor_isim','$sofor_soyisim','$soforr_tc','$soforr_tel')");
            if($soforrekle){
             header("Location: admin_bus");
             exit(); }
             else{
                  echo"<script>alert('Şoför  eklenemedi');</script>";
            }
        }
    }}
?>    
<html>
<head>
</head>
<body>
<div class="form-container">
      <h2 style="color:black">Şoför  Ekle</h2><br>
      <form >
      <p style="color:black">Şoför İsmi</p>
      <input  style="color:black"type="text" name="sisim" id="sisim" placeholder="Şoför İsmi"><br><br>
      <p style="color:black">Şoför Soyismi</p>
      <input  style="color:black"type="text" name="ssoyisim" id="ssoyisim" placeholder="Şoför Soyismi"><br><br>
      <p style="color:black">Şoför Tc</p>
      <input  style="color:black"type="number" name="soforrtc" id="soforrtc" placeholder="Şoför TC"><br><br>
      <p style="color:black">Şoför Telefon Numarası</p>
      <input  style="color:black"type="number" name="soforrtel" id="soforrtel" placeholder="Şoför Telefon Numarası"><br><br>
      <input  style="color:black"type="submit" name="soforrekle" value="Ekle"> 
      </form>
    </div>
  </div>
</body>
</html>
