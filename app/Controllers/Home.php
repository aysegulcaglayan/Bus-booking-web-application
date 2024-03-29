<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UMUTTEPE TURİZM</title>

<style>
body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  overflow: hidden;
}

.slider {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  opacity: 0;
  transition: opacity 1s ease;
}

.slide.active {
  opacity: 1;
}

.content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff;
  text-align: center;
}

/* Navbar Stili */
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  color: #f2f2f2;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
nav {
  background-color: #006666;
  padding: 10px 40px 10px 70px;
  border: 1px solid #000;
  border-left: none;
  border-right: none;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  position: relative;
  
}

nav ul li.logo {
  color: #000000;
  font-size: 40px;
  font-weight: 700;
}

nav ul li.btn {
  display: none;
  cursor: pointer;
}

nav ul div.items {
  display: flex;
  gap: 20px;
  color: #000000;


}

nav ul div.items.show {
  flex-direction: column;
  position: absolute;
  background-color: #333;
  width: 100%;
  top: 100%;
  right:0;
  text-align:right;
  

  
}

nav ul div.items.show li {
  padding: 10px;
  margin-left:auto;
 
}

nav ul div.items.show li a {
  color: #000;

}

nav ul div.items.show li a:hover {
  color:#000000;
}
nav ul li.logo h4 {
  font-size: 20px; 
  left:30px;
} 
nav ul div.items a {
  text-decoration: none; /* Altını çizgiyi kaldırır */
  color: #000000; /* Bağlantı rengi */
}


</style>

</head>
<body>

       

 <nav>
  <ul>
    <li class="logo" style="left: 30px; font-size:60px;"><h4>UMUTTEPE TURİZM</h4></li>
    <li class="btn"><span class="fas fa-bars"></span></li>
    <div class="items">
      <li><a href="Login_v"style="color:#000000">Giriş Yap</a></li>
      <li><a href="About_us" style="color:#000000">Hakkımızda</a></li>
      <li><a href="contact" style="color:#000000">İletişim</a></li>
    </div>
  </ul>
</nav>


<div class="slider">
  <div class="slide" style="background-image: url(İmages/3.jpg);">
    <div class="content" >
    <h1 style="font-size: 50px; color:black;background-color:rgba(255, 255, 255, 0.3);" >KONFORLU YOLCULUK</h1>
    </div>
  </div>
  <div class="slide" style="background-image: url(İmages/2.jpg);">
    <div class="content">
      <h1 style="font-size: 50px; color:black;background-color:rgba(255, 255, 255, 0.3);">GÜVENLİ SÜRÜŞ</h1>
    </div>
  </div>
  <div class="slide" style="background-image: url(İmages/1.jpg);">
    <div class="content">
      <h1 style="font-size: 50px; color:black;background-color:rgba(255, 255, 255, 0.3);">KESİNTİSİZ HİZMET</h1>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
  $(".slide").first().addClass("active");
  $(".slide").hide();
  $(".active").show();

  setInterval(function() {
    var current = $(".active");
    var next = current.next().length ? current.next() : $(".slide").first();
    current.removeClass("active");
    next.addClass("active");
    $(".slide").fadeOut();
    $(".active").fadeIn();
  }, 5000);
});

// Navbar Butonu İçin JavaScript
$('nav ul li.btn').click(function(){
  $('nav ul div.items').toggleClass("show");
});
</script>

</body>

</html>