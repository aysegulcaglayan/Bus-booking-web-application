<?php

namespace App\Controllers;

class AdminLogin extends BaseController
{
    public function index()
    {
       
        $db=\Config\Database::connect();
        if(isset($_GET['login'])){
        $email = $_GET['email'];
        $password = $_GET['password'];
    
           if($email=='admin123@gmail.com'&& $password=='123456789'){
            header("Location: Adminpanel");
            exit(); 
           }
           else{
            echo"<script>alert('Lütfen yönetici bilgilerinizle giriş yapınız');</script>";
            
           }
        }
        } 
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>YÖNETİCİ GİRİŞİ</title>
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
                background-image: url(İmages/8.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;

            }
            .sign_up{

                font-size: 20px;

            }
            .sign_up:hover{

                background-color: #fff;
                

            }

     

      
    </style>

  </head>
  <body>




              <!--this is the header callling(nav bar)-->
            <?php include("nav.php");
             ?>


             
 <div class="login-box" style="background-color:rgba(76, 72, 72, 0.5)">
    <img src="İmages/avatar.png" class="avatar">
        <h1 style="color:black">YÖNETİCİ GİRİŞİ</h1>
            <form action=" " >
            <p style="color:black">E-Mail</p>
            <input  style="color:black"type="text" name="email" placeholder="E-mail">
            <p  style="color:black">Şifre</p>
            <input style="color:black" type="password" name="password" placeholder="Şifre">
            <input type="submit" name="login" value="GİRİŞ YAP">
           
            <a href="#">Şifremi Unuttum</a>    
            </form>
        
        
        </div>