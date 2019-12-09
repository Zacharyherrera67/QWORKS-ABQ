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
  <title>About</title>
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
        <h1 class="head">We are Qworks</h1>
      </div>
      <!--col-->
    </div>
    <!--row-->

    <div class="row">
      <div class="col-sm-12">
        <hr class="mt">
        <hr class="mt2">
      </div>
      <!--col-->
    </div>
    <!--row-->

    <div class="row">
      <div class="col-sm-12">
        <div class="weareqworkstext">
          <?php perch_content('weareqworks');?>

          <!--
      <p>
        We think that being engaged with what’s happening in your city is pretty cool, and that you could make a big difference by knowing just a little bit about how it all works. So, we are constantly making new videos that teach you a little something about how Albuquerque works so that you can make a real change in your community with your new-found knowledge. And we promise these videos are NOT boring :)
      </p>
    -->
        </div>
        <!--weareqworks-->
      </div>
      <!--col-8-->
    </div>
    <!--row-->

    <div class="row">
      <div class="col-sm-12">
        <hr class="mb">
        <hr class="mb2">
      </div>
      <!--col-->
    </div>
    <!--row-->

    <div class="row">
      <div class="col-sm-12">
        <button type="button" class="aboutbuttons btn btn-lrg" href="">Check out our work!</button>
      </div>
      <!--col-->
    </div>
    <!--row-->

    <div class="row">
      <div class="col-sm-12">
        <hr class="mt">
        <hr class="mt2">
      </div>
      <!--col-->
    </div>
    <!--row-->

    <div class="row">
      <div class="col-sm-12">
        <h1 class="head">Our Impact</h1>
      </div>
      <!--col-->
    </div>
    <!--row-->

    <!--video with list-->
    <div class="row halfr">
      <div class="col-sm-6">
        <div class="QV">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/QOG_V5SzphI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <!--qv-->
      </div>
      <!--col-6-->
      <div class="col-sm-6 Qworkslist">
        <?php perch_content('qworkslist');?>
      </div>
      <!--col-6-->
    </div>
    <!--row-->

    <div class="row">
      <div class="col-sm-12">
        <hr class="mb">
        <hr class="mb2">
      </div>
      <!--col-->
    </div>
    <!--row-->

    <div class="row">
      <div class="col-sm-12">
        <h1 class="head">How We Do It</h1>
      </div>
      <!--col12-->
    </div>
    <!--row-->

    <div class="row">
      <div class="col-sm-12">
        <div class="howwedoittext">
          <?php perch_content('howwedoit');?>
          <!--
          <p>
            Qworks is completely run by volunteers who just want to make their city a little bit better. If you have skills with researching and writing great stories, putting together engaging videos, or know how to make a mean green chile chicken pot pie, we’d love to have you work with us!
          </p>
        -->
        </div>
        <!--howwedoit-->
      </div>
      <!--col8-->
    </div>
    <!--row-->
    <!--
    <div class="row">
      <div class="col-sm-12">
        <span>
          <hr class="mt">
          <hr class="mt2">
        </span>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <button type="button" class="btn btn-lrg aboutbuttons">Join Qworks</button>
      </div>
    </div> row-->

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