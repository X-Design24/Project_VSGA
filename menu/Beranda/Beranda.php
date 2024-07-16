<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
	<link rel="stylesheet" type="text/css" href="../../bin/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../bin/bootstrap-5.2.3/bootstrap-5.2.3/scss/_utilities.scss">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  <style>
    body{
      /* overflow-x:hidden; */
      background-color:#ffffff;
    }
    .card1 {
      margin-bottom:50px;
      background-image:url("../bin/glossy/Rectangle 9.png");
    }
    .card1 .info-image {
     width:200px;
     margin-top:5px;
    }
    .card1 .card2{
     text-align:center;
     font-weight:bold;
     color:transparent;
    }
    .card1 .card2:hover{
     color:black;
     transition:1s;
    }
    .judul{
      width:500px;
      height:500px;
    }
    .container-sm .judul {
      top: 50px;
      margin-left:250px;
      font-weight:bold;
      color:transparent;
    }
    
  </style>
</head>

<body>

<!-- navbar -->
 <!-- img -->
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
  <div class="carousel-inner slide" data-bs-interval="5000"  data-bs-ride="carousel">
    <div class="carousel-item active">
      <img src="../../img/raja ampat/screen/banner.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Raja Ampat</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000"  data-bs-ride="carousel">
      <img src="../../img/labuan bajo/screen/banner.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Labuan Bajo</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000"  data-bs-ride="carousel">
      <img src="../../img/lombok/screen g.rinjani/banner.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Gunung Rinjani</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000"  data-bs-ride="carousel" >
      <img src="../../img/gunugn bromo/screen/banner.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Gunung Bromo</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000"  data-bs-ride="carousel">
      <img src="../../img/danau toba/screen/banner.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Danau Toba</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000" data-bs-ride="carousel">
      <img src="../../img/bintan/screen/banner.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Pulau Bintan</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- img -->


<!-- navbar -->
<nav class="navbar navbar-expand-lg sticky-sm-top bg-secondary ">
  <div class="container">
    <a class="navbar-brand" href="../Beranda/Beranda.php">BERANDA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-3" id="navbarNav">
      <ul class="navbar-nav  row align-items-center">
        <li class="nav-item 1 col ">
          <a class="navbar-brand" aria-current="page" href="../about/about.php">ABOUT</a>
        </li>
        <li class="nav-item 2 col m-1">
          <a class="navbar-brand" href="../obcek wisata/object-wisata.php">OBJEK WISATA</a>
        </li>
        <li class="nav-item 3 col m-1">
          <a class="navbar-brand" href="../fasilitas/fasilitas-wisata.php">FASILITAS WISATA</a>
        </li>
        <li class="nav-item 4 col m-1">
          <a class="navbar-brand" href="../museum/museum-salak.php">MUSEUM SALAK</a>
        </li>
        <li class="nav-item 5 col m-1">
          <a class="navbar-brand " href="../pemesanan/pemesanan.php">PEMESANAN</a>
        </li>
        <li class="nav-item 6 col m-1">
          <a class="navbar-brand " href="../Galery/galery.php">GALERY</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- nav -->

<br>
<br>
<br>

<!-- card -->
 <div class="d-flex justify-content-center gap-3">
<div class="card" style="width: 18rem;">
  <img src="../../img/lombok/download (1).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nama Wisata</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<!-- card -->

<!-- card -->
<div class="card" style="width: 18rem;">
  <img src="../../img/lombok/download (1).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nama Wisata</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<!-- card -->

<!-- card -->
<div class="card" style="width: 18rem;">
  <img src="../../img/lombok/download (1).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nama Wisata</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<!-- card -->

<!-- card -->
<div class="card" style="width: 18rem;">
  <img src="../../img/lombok/download (1).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nama Wisata</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>

<!-- card -->

<br>
<br>
<br>


<h1 class="ms-5"><p>Obat Ragu Untuk Anda</p></h1>
<br>
<br>

<div class="container d-flex justify-content-center">

<img src="../../img/danau toba/screen/card.png" class="rounded"alt="">
<div class="content ms-3 ">
   <h3>Danau Toba</h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi ullam enim iste modi eum porro beatae, nihil, perspiciatis maiores voluptas qui commodi non a provident tempore. Ut pariatur numquam quas!
  <a href="https://www.youtube.com/watch?v=ojw2VEkh42E" class="btn btn-primary mt-3">Click To Video</a>
</div>


</div>














<br>
<br>
<br>

<br>

<br>

<footer class=" text-center text-lg-start mt-5 py-4 bg-secondary">
    <div class="container ">
      <center><p class="mb-0">© 2024 Wisata Indonesia. Develop with Nurul hidayah</p></center>
    </div>
  </footer>

<script src="../../bin/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>