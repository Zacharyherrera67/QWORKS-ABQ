<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--bootstrap-->
  <script src="https://kit.fontawesome.com/850fb63fb3.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="scripts/master.js"></script>
  <link rel="stylesheet" href="css/master.css">
  <title>Additional Resources</title>
</head>

<body>

  <div class="container-fluid">
    
  <div class="row">
    <div class="col-sm-12 fixed-top navrow">
      <nav class="navbar navbar-expand-xs">


      <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="assets/QWORKS PNG BLACK-01.png" class="qworkslogoheader" alt="qworks logo with black text"></a>
    </div>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler inactive" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <img src="assets/RunYourCity3.png" class="rr" alt="roadrunner image">
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="content.php">Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="involvement.php">Get Involved</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AR.php">Additional Resources</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--col-->
  </div>
  <!--row-->

    <div class="row">
      <div class="col-sm-12">
        <h1 class="head">Additional Resources</h1>
      </div>
      <!--col-12-->
    </div>
    <!--row-->

    <div class="row">
      <div class="col-sm-12">
        <div class="artext">
          <?php perch_content('artext') ?>
        </div>
        <!--ar-text-->

        <!--
               <p>
                 For each video we like to attach some resources that will help you become even more informed.
                 You can check them out here:
               </p>
             -->
      </div>
      <!--col-12-->
    </div>
    <!--row-->
    <div class="row">
      <div class="col-sm-12">
        <hr class="CR">
        <hr class="CR2">
      </div>
      <!--col-->
    </div>
    <!--row-->

    <div class="row arR">
      <div class="col-sm-12">
        <button class="btn btn-warning arl" href="https://www.bernco.gov/clerk/my-voter-information.aspx">Voter-info</button>
      </div>
      <!--col-sm-8-->
      <div class="col-sm-12">
        <button class="btn btn-warning arl" href="https://www.lwvcnm.org/">League of Womens Voters</button>
      </div>
      <!--col-sm-8-->
      <div class="col-sm-12">
        <button class="btn btn-warning arl" href="https://drive.google.com/file/d/1KNE3xy-Hg5L1nnFDP4AcIN6riGM6v0Gv/view">Community Centers of ABQ</button>
      </div>
      <!--col-sm-8-->
      <div class="col-sm-12">
        <button class="btn btn-warning arl" href="https://anchor.fm/qworks">Listen to our Podcast</button>
      </div>
      <!--col-sm-8-->
      <div class="col-sm-12">
        <button class="btn btn-warning arl" href="https://medium.com/@qworks.abq/">Read our Articles</button>
      </div>
      <!--col-sm-8-->
    </div>
    <!--row-->


    <!--start of the footer-->
    <div class="row CB">
      <?php perch_content('footer');?>

      <!--
    <div class="col-sm-4 FB2">
  <img class="Qworkslogofooter" src="assets/QWORKS PNG BLACK-01.png" alt="">
  <p class="footertext"><a href=""> Email</a></p>
  <p class="footertext">Albuquerque, NM.</p>
  <p class="footertext">PHONENUMBER</p>
</div>

<div class="col-sm-4 FB2">
  <p class="footertext"><a href="AR.php">Additional Resources</a></p>
  <p class="footertext"><a href="https://medium.com/@qworks.abq">Our Medium Blog</a></p>
  <p class="footertext"><a href="https://www.dailylobo.com/article/2018/05/pedrotty-qworks">Media</a></p>
  <p class="footertext"><a href="involvement.php">Join Our Cohort</a></p>
  <p class="footertext"><a href="content.php">Our Campaigns</a></p>
</div>

<div class="col-sm-1 FB2">
  <h1><a href="https://www.facebook.com/qworks.abq/">
      <img class="footericons" src="assets/Facebook.png" alt="">
    </a></h1>
  <h1><a href="https://www.instagram.com/qworks.abq/?hl=en%22%3E%22%3E">
      <img class="footericons" src="assets/instagram.png" alt="">
    </a></h1>
</div>

<div class="col-sm-1 FB2">
  <h1><a href="https://twitter.com/qworksABQ">
      <img class="footericons" src="assets/Twitter.png" alt="">
    </a></h1>
  <h1><a href="https://www.youtube.com/channel/UCzRfffBrBkhkHdeoCbLbF0A/videos%22%3E%22%3E">
      <img class="footericons" src="assets/Youtube.png" alt="">
    </a></h1>
</div>

<div class="col-sm-2 FB2">
</div>
-->
    </div><!-- end of row -->
  </div>
  <!--container-fluid-->

</body>

</html>