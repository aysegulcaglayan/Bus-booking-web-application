<nav style="background-color:#006666">
      <ul>
        <li class="logo"><h4>UMUTTEPE TURİZM</h4></li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
          <li><a href="AdminLogin" style="color:#000000">Yönetici Girişi</a></li>

         
         <!-- <li><a href="#">Packages</a></li>-->
          <li><a href="Login_v"style="color:#000000">Giriş Yap</a></li>
          <li><a href="About_us" style="color:#000000">Hakkımızda</a></li>
           <li><a href="contact" style="color:#000000">İletişim</a></li>
          


        </div>
      </ul>
    </nav><!--
    <div class="content">
      <div class="text">Responsive Navbar with Searchbox</div>
      <div class="p">HTML and CSS (Flexbox) Full video tutorial</div>
    </div>-->

    <script>
      $('nav ul li.btn span').click(function(){
        $('nav ul div.items').toggleClass("show");
        $('nav ul li.btn span').toggleClass("show");
      });
    </script>