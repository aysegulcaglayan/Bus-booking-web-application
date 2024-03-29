<?php

namespace App\Controllers;

class Home_page extends BaseController
{
    public function index()
    {
    
        
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
            .sign_up{

                font-size: 20px;

            }
            .sign_up:hover{

                background-color: #fff;
                


            }
            .login-box{
                margin-top:1px;
                margin-left:500px;

            }
            
     

      
    </style>
     </head>
  <body>




              <!--this is the header callling(nav bar)-->
            <?php include("nav2.php");
             ?>
             <div class="login-box" style="background-color:rgba(76, 72, 72, 0.5) ">
        <h1 style="color:black">UMUTTEPE TURİZM</h1>
           <form action="seat2" method="get" >

            <p style="color:black">Kalkış Noktası</p>
            <input  list="cities" name="city" >
              <datalist id="cities">
                <option value="Artvin">
                <option value="Bursa">
                <option value="Kocaeli">
                <option value="Sinop">
                </datalist>     
            <p  style="color:black">Varış Noktası</p>
            <input  list="cities2" name="city2" >
              <datalist id="cities2">
                 <option value="Artvin">
                 <option value="Bursa">
                 <option value="Kocaeli">
                 <option value="Sinop">
                 </datalist>  
            <input type="submit" name="login" value="BİLET ARA">
            
            
            </form>
        
        
        </div>
   


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAz8K2Bn1gTQx05q733DpBEcAib4m-I3Sk&libraries=places"></script>


    <div id="map" style="height: 635px; width: 1000px;"></div>
  

    <script>
        var map;
        var startPoint = null;
        var endPoint = null;
        var directionsService;
        var directionsRenderer;
        function initMap() {
            //maps başlangı konumu ve yakınlaşma derecesi
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 38.691486594619974,  lng: 35.43808586466115},
                zoom: 6
            });
            //tıklanılan yerleri alma
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);
            map.addListener('click', function(event) {
                placeMarker(event.latLng);
            });
            
        }
        // ilk ve son nokta diye belirleyip rotayı gösterme
        function placeMarker(location) {
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
            if (!startPoint) {
            startPoint = location;
            } else {
            endPoint = location;
            calculateAndDisplayRoute(startPoint, endPoint);
            startPoint = null;
            endPoint = null;
             }
        }
        function calculateAndDisplayRoute(start, end) {
          directionsService.route(
            {
                origin: start,
                destination: end,
                travelMode: 'DRIVING'
            },
            function(response, status) {
                if (status === 'OK') {
                    directionsRenderer.setDirections(response);
                    
                } else {
                    window.alert('Yol tarifi başarısız oldu: ' + status);
                }
            }
        );
    }
         
         
           
             
        
    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAz8K2Bn1gTQx05q733DpBEcAib4m-I3Sk&callback=initMap">
    </script>
    
   
    
</body>
</html>
