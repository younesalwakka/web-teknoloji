<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--------------------------------->
    <title>Web Teknoloji Projesi</title>

</head>
<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;" >
<!--Menü Kısmı Başlangıç-->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> Kişisel Sitem</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
             <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="index.html">Anasayfa</a>
             </li>
           
             <li class="nav-item">
                <a class="nav-link" href="hakkimizda.html">Hakkımızda</a>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="mirasi.html">Mirasımız</a>
             </li>

             <li class="nav-item">
                <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
             </li>

             <li class="nav-item">
                <a class="nav-link" href="sehrim.html">Şehrim</a>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="iletesim.html">Ileteşim</a>
             </li>

             
             <li class="nav-item">
              <a class="nav-link" href="ilgilia.html">İlgi Alanlarım</a>
            </li>


             <li class="nav-item">
                <a class="nav-link" href="login.php">Giriş Yap</a>
              </li>
          
        </ul>
      </div>
    </div>
  </nav>

<!--Menü Kısmı Bitiş-->

<!--slider Başlangıç-->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/foto1.jpeg" class="d-block w-100 " style="height: 550px;" >
      </div>
      <div class="carousel-item">
        <img src="img/foto5.jpeg" class="d-block w-100 "  style="height: 550px;">
      </div>
      <div class="carousel-item">
        <img src="img/foto3.jpeg" class="d-block w-100 "  style="height: 550px;">
      </div>
      <div class="carousel-item">
        <img src="img/foto4.jpeg" class="d-block w-100 "  style="height: 550px;">
      </div>
     
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!--slider Bitiş-->

<!--php Başlangıç-->
<?php   
include("kullancilar.php");
    if (($_POST["user"] == $user) && ($_POST["sifre"] == $sifre))
    {
      $_SESSION["login"] = "true";
      $_SESSION["user"] = $user;
      $_SESSION["sifre"] = $sifre;
    
       echo(" <p style='color:green'> SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !! </p>");
    
    }
    
    else 
    {
     
      echo "Kullancı Adı veya Şifre Yanlış.<br>";
      echo "!!!TEKRAR DENEYİN!!!";
      echo "<a href=\"javascript:history.go(-1)\">GERI DÖNÜN</a>";
    }
?>
<!--php Bitiş-->

<!--footer Başlangıç-->

<footer>

<div class="bg-dark text-light text-center">

<p class=" align-middle p-4 mb-0">
  <span>younes Alwakka tarafından dizayn edilmiştir
    &copy; |2021</span>
</p>

</div>

</footer>
<!--footer Bitiş-->


   <script 
     src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
     crossorigin="anonymous">
    </script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" 
    crossorigin="anonymous">
  </script>
</body>
</html>
   
   
   




     