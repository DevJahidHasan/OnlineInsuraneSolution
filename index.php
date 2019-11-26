<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Insurance</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Animation core CSS -->
  <link href="css/animate.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-------------------------------------------------------------
-------------------SIGN UP MODAL START HERE--------------------
--------------------------------------------------------------->

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form action="includes/signup.php" method="POST">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Resister</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-user prefix grey-text"></i>
          <input name="firstname" type="tel" id="orangeForm-mobile" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-mobile">First Name</label>
        <div class="md-form mb-5">
          <i class="fa fa-user prefix grey-text"></i>
          <input name="lastname" type="tel" id="orangeForm-mobile" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-mobile">Last Name</label>
        </div>
        </div>
        <div class="md-form mb-5">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input name="email" type="email" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fa fa-lock prefix grey-text"></i>
          <input name="password" type="password" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="submit" class="btn btn-info">Sign up</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- SIGN IN START HERE -->

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email or Mobile number</label>
        </div>

        <div class="md-form mb-4">
          <i class="fa fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-info">Login</button>
      </div>
    </div>
  </div>
</div>
<!-------------------------------------------------------------
-------------Top navber Start Here for Full screen-------------
--------------------------------------------------------------->
<section id="topNav">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <a href=""><img class="img-fullScreen img-responsive center-block" src="img/logo1.svg" alt=""></a>
          <a href=""><img class="img-smallScreen img-responsive center-block" src="img/logo1.svg" alt=""></a>
        </div>

        <div class="col-md-4 socialMedia">
          <ul>
            <li><a href=""><button class="btn btn-info"><i class="fa fa-facebook"></i></button></a></li>
            <li><a href=""><button class="btn btn-info"><i class="fa fa-twitter"></i></button></a></li>
            <li><a href=""><button class="btn btn-info"><i class="fa fa-instagram"></i></button></a></li>
            <li><a href=""><button class="btn btn-info"><i class="fa fa-youtube"></i></button></a></li>
          </ul>
        </div>

        <div class="col-md-4 resisterButton">
          <ul>
          <li><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalRegisterForm">RESISTER</button></li>
          <li><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalLoginForm">LOG IN</button></li>
          </ul>
        </div>
        
      </div>
    </div>
</section>
 <!-------------------------------------------------------------
----------------Navber Start Here for Full screen---------------
--------------------------------------------------------------->
<section id="navberMiddle">
<nav class="mb-1 navbar navbar-expand-lg navbar-dark navbar-color">
  <a class="navbar-brand" href="#"><i class="fa fa-home fa-2x"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Health & Life</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Automobiles</a>
      </li>
    </ul>
   <form class="form-inline my-2 my-lg-0 ml-auto">
    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
  </form>
    
  </div>
</nav>
</section>

<!--------------------------------------------------------------
----------------Carosel Start Here for Full screen---------------
--------------------------------------------------------------->
<section id="carousel">
  <div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<!--   <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="familyImage">
      <img src="img/family-banner-txt-price.png" class="family-banner-txt-price img-responsive animated bounceInDown delay-1s" alt=".">
      <img src="img/family-banner-family.png" class="d-block w-100 img-responsive" alt="image">
      </div>
    </div>

    <div class="carousel-item">
      <div class="familyImage">
          <img src="img/bike-price-text.png" class="bike-price img-responsive pricevalue animated bounceInDown delay-1s" alt=".">
          <img src="img/bike-banner-bike.png" class="d-block w-100" alt="...">
      </div>
    </div>
<!--     <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"data-slide="prev">
         <i class="fa fa-angle-left fa-3x"></i>
     </a>
     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <i class="fa fa-angle-right fa-3x"></i>
     </a>
</div>
</div>
</section>
<!-------------------------------------------------------------
---------Info Graphic design Start Here for Full screen--------
--------------------------------------------------------------->
<section id="infoGraphicFull">
  <div class="container">
     <img class="imgGraph img-responsive" src="img/infographic.svg" alt="infographic">
     <h2>Why Carnival <br> Assure?</h2>
     <ul>
       <li>
        <div class="img-info">
           <img class="img-responsive center-block" src="img/go-paperless.svg" alt="image">
        </div>
        <p>
          <strong>Go Paperless</strong> <br>
          Life is simple with <br> zero paperwork
        </p>
      </li>
      <li>
        <div class="img-info">
           <img class="img-responsive center-block" src="img/easy-registration.svg" alt="image">
        </div>
        <p>
          <strong>Easy Registration &<br> Stress-Free Claim</strong><br>
          Register online in just 5 minutes & <br>Hassle-free claim settlement <br>within 10 working days
        </p>
      </li>
      <li>
        <div class="img-info">
           <img class="img-responsive center-block" src="img/affordable.svg" alt="image">
        </div>
        <p>
          <strong>Affordable<br>Customized Packages</strong><br>
          Best suited customized <br> packages at affordable premiums
        </p>
      </li>
      <li>
        <div class="img-info">
           <img class="img-responsive center-block" src="img/get-insured.svg" alt="image">
        </div>
        <p>
          <strong>Get Insured <br> on-the-go</strong><br>
          Purchase policy online and <br> get insured instantly
        </p>
      </li>
      <li>
        <div class="img-info">
           <img class="img-responsive center-block" src="img/leading.svg" alt="image">
        </div>
        <p>
          <strong>Leading <br> Insurance Partners</strong><br>
          Partnered with leading and <br> trusted insurance giants <br> of the country
        </p>
      </li>
     </ul>       
  </div>
</section>
<!-------------------------------------------------------------
---------Info Graphic design End Here for Full screen----------
--------------------------------------------------------------->
<!-------------------------------------------------------------
---------Info Graphic design Start Here for Small screen--------
--------------------------------------------------------------->
<section id="infoGraphicSmall">
  <div class="container">
    <h2>Why Carnival <br> Assure?</h2>
    <ul>
       <li>
        <div class="img-info">
           <img class="img-responsive center-block" src="img/go-paperless.svg" alt="image">
        </div>
        <p>
          <strong>Go Paperless</strong> <br>
          Life is simple with <br> zero paperwork
        </p>
      </li>
      <li>
        <div class="img-info">
           <img class="img-responsive center-block" src="img/easy-registration.svg" alt="image">
        </div>
        <p>
          <strong>Easy Registration &<br> Stress-Free Claim</strong><br>
          Register online in just 5 minutes & <br>Hassle-free claim settlement <br>within 10 working days
        </p>
      </li>
      <li>
        <div class="img-info">
           <img class="img-responsive center-block" src="img/affordable.svg" alt="image">
        </div>
        <p>
          <strong>Affordable<br>Customized Packages</strong><br>
          Best suited customized <br> packages at affordable premiums
        </p>
      </li>
      <li>
        <div class="img-info">
           <img class="img-responsive center-block" src="img/get-insured.svg" alt="image">
        </div>
        <p>
          <strong>Get Insured <br> on-the-go</strong><br>
          Purchase policy online and <br> get insured instantly
        </p>
      </li>
      <li>
        <div class="img-info">
           <img class="img-responsive center-block" src="img/leading.svg" alt="image">
        </div>
        <p>
          <strong>Leading <br> Insurance Partners</strong><br>
          Partnered with leading and <br> trusted insurance giants <br> of the country
        </p>
      </li>
     </ul>
  </div>
</section>
<!-------------------------------------------------------------
---------Info Graphic design End Here for Full screen----------
--------------------------------------------------------------->
<!-------------------------------------------------------------
-----------Partner company End Here for Full screen------------
--------------------------------------------------------------->
<section id="brandSlider">
<h1>Our Insurance Partner</h1>
<div id="brand-slider">
    <div class="container-fluid">
  
       <div class="customer-logos slider">
          <div class="slide"><a href="#"><img src="img/progoti-life.png"></a></div>
          <div class="slide"><a href="#"><img src="img/green-life.png"></a></div>
          <div class="slide"><a href="#"><img src="img/chartered-life.png"></a></div>
          <div class="slide"><a href="#"><img src="img/delta-life.png"></a></div>
          <div class="slide"><a href="#"><img src="img/metlife1.png"></a></div>
          <div class="slide"><a href="#"><img src="img/Rupali1.png"></a></div>
          <div class="slide"><a href="#"><img src="img/progoti-life.png"></a></div>
          <div class="slide"><a href="#"><img src="img/green-life.png"></a></div>
          <div class="slide"><a href="#"><img src="img/delta-life.png"></a></div>

       </div>
  </div>
</div>
</section>

<!-------------------------------------------------------------
------------------Pakage ard company End Here-------------------
---------------------------------------------------------------> 

<section id="pakagesCard">
  <h1>You choose, we assure</h1><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="img-responsive center-block" src="img/life.svg" alt=""><br><br>
        <h3>Health & Life</h3> <br><br>
        <p>Custom-tailored Health and Life Insurance plans to suit the changing needs of you and your family.</p><br>
        <a class="btn btn-info" href="">See Pakages <i class="fa fa-angle-right"></i></a>
      </div>
      <div class="col-md-6">
        <img class="img-responsive center-block" src="img/automobiles.svg" alt=""><br><br>
        <h3>Automobiles</h3><br><br>
        <p>A worry-free journey ensured with our convenient combos of Motor & Life/Health insurance coverage.</p><br>
        <a class="btn btn-info" href="">See Pakages <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-------------------------------------------------------------
------------------Process Step start Here-------------------
--------------------------------------------------------------->
<section id="itWork">
        <h3>HOW IT WORKS</h3>
      <h6>Get insured with few clicks</h6>
  <div class="container">
    <div class="row">
       <div class="col-md-4">
        <img class="img-responsive center-block" src="img/step-one.svg" alt="">
        <h3>STEP-1</h3>
        <p>Pick your preferred Carnival Assure policy package</p>
      </div>
             <div class="col-md-4">
        <img class="img-responsive center-block" src="img/step-two.svg" alt="">
        <h3>STEP-2</h3>
        <p>Provide minimal information & pay online with ease</p>
      </div>
             <div class="col-md-4">
        <img class="img-responsive center-block" src="img/step-three.svg" alt="">
        <h3>STEP-3</h3>
        <p>Get your policy copy instantly</p>
      </div>
    </div>
  </div>
</section>

<!-------------------------------------------------------------
--------------------------Footer Start here--------------------
--------------------------------------------------------------->
<section id="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <h4>Terms And Condition</h4>
        <div class="callCenter">
           <a href="#">
             <img src="img/phone.svg" alt="">
           </a>
        </div>
        <div class="callTime">
          <strong>16222</strong><br>
          <span>24/7 Hours</span>
        </div>
      </div>
      <div class="col-md-4">
        <h4>For any query, please contact</h4>
        <p>Highway Homes, KA-32/6 Shahjadpur,Pragoti Sharoni, Gulshan, Dhaka – 1212 </p>
        <p>fjahidhasan12@gmail.com</p>
      </div>
      <div class="col-md-4">
        <h4>Follow Us On</h4>
        <ul>
            <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
            <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
            <li><a href=""><i class="fa fa-instagram fa-2x"></i></a></li>
            <li><a href=""><i class="fa fa-youtube fa-2x"></i></a></li>
          </ul>
          <h4>We Accept</h4>
          <ul>
            <li><a href=""><img src="img/bkash.png" alt=""></a></li>
            <li><a href=""><img src="img/rocket.png" alt=""></a></li>
            <li><a href=""><img src="img/master.png" alt=""></a></li>
            <!-- <li><a href=""><img src="img/visa.png" alt=""></a></li> -->
          </ul>
      </div>
    </div>
    <div class="row copyRight">
Copyright @ Creative Md.Jahid Hasan. All Rights Riserved.2019
  </div>
</section>
<!-------------------------------------------------------------
--------------------------Footer End here-----------------------
--------------------------------------------------------------->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Company Brand Slider -->
  <script src="js/brandSlider.js"></script>
    <!-- my custom JavaScript file -->
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>
