<?php


namespace App\Controllers;

class signUp extends BaseController
{
    public function index()
    {
        
        $db=\Config\Database::connect();
        if(isset($_GET['kaydet'])) {
        $isim=$_GET['fname'];
        $soyisim=$_GET['lname'];
        $username=$_GET['username'];
        $tc=$_GET['tc_no'];
        $tel=$_GET['tel_no'];
        $email=$_GET['email'];
        $cinsiyet=$_GET['cinsiyet'];
        $yas=$_GET['yas'];
        $password=$_GET['password'];
        $meslek=$_GET['meslek'];
        $db->query("INSERT INTO kullanıcılar (kullanici_id,isim,soyisim,kullanıcı_Adı,tc_kimlik,e_mail,telefon_numarası,cinsiyet,yaş,şifre,müşteri_mesleği,bakiye) 
        VALUES ('', '$isim', '$soyisim','$username','$tc','$email','$tel','$cinsiyet','$yas','$password','$meslek','0')");
           header("Location: Home_page");
           exit(); 
        //$result=$db->query('select*from kullanıcılar');
        //var_dump($result->getResult());
    }}
}
?>
<html>
    <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KAYIT OL</title>
    <link rel="stylesheet" href="cssfile/nav.css">
  <!--  <link rel="stylesheet" href="cssfile/footer_l.css">-->
     <link rel="stylesheet" href="cssfile/signUp.css">
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
 
  background-image: url(İmages/8.jpg);
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;

}
.confirm{

    background-color: black;
    margin-top: 5px;


}
      
    </style>

  </head>
  <body>

              <!--this is the header callling(nav bar)-->

            <?php include("nav.php");
             ?>




   
    <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      KAYIT OL
    </div>
        <form action=" " method="get"  >
      <div class="form_wrap">
         <div class="input_wrap">
            <label for="fname">İsim</label>
            <input style="color:black" type="text" id="fname" name="fname" placeholder="İsim" required>
          </div>
          <div class="input_wrap">
            <label for="lname">Soyisim</label>
            <input style="color:black" type="text" id="lname" name="lname" placeholder="Soyisim" required>
          </div>
          <div class="input_wrap">
            <label for="username">Kullanıcı Adı</label>
            <input style="color:black" type="text" id="username" name="username" placeholder="Kullanıcı Adı" required>
          </div>
          <div class="input_wrap">
          <label for="uname">TC  Kimlik No</label>
          <input style="color:black" type="number" minlength="11" maxlength="11" id="tcno" name="tc_no" placeholder="Tc Kimlik No " required>
        </div>
        <div class="input_wrap">
          <label for="uname">Cep Telefonu</label>
          <input style="color:black" type="tel" placeholder="500-000-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="telno" name="tel_no"  required>
        </div>
        <div class="input_wrap">
          <label for="email">E-mail</label>
          <input  style="color:black" type="text" id="email" name="email" placeholder="E-mail" required>
        </div>
        <div class="input_wrap">
          <label for="yas">Yaş</label>
          <input  style="color:black" type="number" id="yas" name="yas" placeholder="Yaş" required>
        </div>
        <div class="input_wrap">
          <label for="cinsiyet">Cinsiyet</label>
          <input style="color:black" list="cinsiyet" name="cinsiyet" >
              <datalist id="cinsiyet">
                <option value="Kadın">
                <option value="Erkek">
                
                </datalist> 
        </div>   
        <div class="input_wrap">
          <label for="meslek">Meslek</label>
          <input style="color:black" list="meslek" name="meslek" >
              <datalist id="meslek">
                <option value="Öğrenci">
                <option value="Memur">
                <option value="Güvenlik Güçleri">
                <option value="Diğer">
                
                </datalist> 
        </div>            
       
       
        <div class="input_wrap">
          <label for="password">Şifre</label>
          <input style="color:black" type="password" id="password" name="password" placeholder="Şifre" required>
        </div>
      
       
        <div class="input_wrap">
          <input type="submit" name="kaydet" value="Kayıt Ol" class="submit_btn">
        </div>
</div>
</div>
</div>
</div>
</form>
</body>
</html>

