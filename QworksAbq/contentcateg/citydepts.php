<?php include('../perch/runtime.php'); ?>
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
  <script type="text/javascript" src="../scripts/master.js"></script>
  <link rel="stylesheet" href="../css/master.css">
  <title>City Departments</title>
</head>

<body>
  <div class="container-fluid">

  <div class="row">
    <div class="col-sm-12 fixed-top navrow">
      <nav class="navbar navbar-expand-xs">


      <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="../assets/QWORKS PNG BLACK-01.png" class="qworkslogoheader" alt="qworks logo with black text"></a>
    </div>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler inactive" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <img src="../assets/RunYourCity3.png" class="rr" alt="roadrunner image">
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../content.php">Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../involvement.php">Get Involved</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../AR.php">Additional Resources</a>
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
        <h1 class="head">Our Videos</h1>
      </div>
      <!--col-12-->
    </div>
    <!--row-->
    <div class="row">
      <div class="col-sm-12">
        <span>
          <hr class="mt">
          <hr class="mt2">
        </span>
      </div>
      <!--col-->
    </div>
    <!--row-->
    <div class="row">
      <div class="col-sm-8 YTplayer">

        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLt6U29_BSEF72d2p4A1Trm-_UR1iLDiUh" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
      <!--col-sm-12-->
    </div>
    <!--row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="head">Articles and More</h1>
      </div>
      <!--col-->
    </div>
    <!--row-->
    <div class="row">
      <div class="col-sm-12">
        <span>
          <hr class="mb2">
          <hr class="mb">
        </span>
      </div>
      <!--col-->
    </div>
    <!--row-->
    <div class="row">
      <div class="col-sm-12">
        <div id="retainable-rss-embed" data-rss="https://medium.com/feed/@qworks.abq,
    https://medium.com/feed/vue-mastery" data-maxcols="3" data-layout="slider" data-poststyle="inline" data-readmore="Read the rest" data-buttonclass="btn btn-warning" data-offset="-100">
        </div>
        <!--rss-->
      </div>
      <!--col-12-->
    </div>
    <!--row-->

    <!--start of the footer-->
    <div class="row CB">
      <?php perch_content('content-footer');?>
      
<!--
      <div class="col-sm-4 FB2">
        <img class="Qworkslogofooter" src="../assets/QWORKS PNG BLACK-01.png" alt="">
        <p class="footertext"><a href="<perch:content id=" email" type="text" label="Email" required="true"></perch:content>">
            <perch:content id="email" type="text" label="Email" required="true"></perch:content></a></p>
        <p class="footertext">Albuquerque, NM.</p>
        <p class="footertext">
          <perch:content id="phonenumber" type="text" label="associated phone number" required="true"></perch:content>
        </p>
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
            <img class="footericons" src="../assets/Facebook.png" alt="">
          </a></h1>
        <h1><a href="https://www.instagram.com/qworks.abq/?hl=en%22%3E%22%3E">
            <img class="footericons" src="../assets/instagram.png" alt="">
          </a></h1>
      </div>


      <div class="col-sm-1 FB2">
        <h1><a href="https://twitter.com/qworksABQ">
            <img class="footericons" src="../assets/Twitter.png" alt="">
          </a></h1>
        <h1><a href="https://www.youtube.com/channel/UCzRfffBrBkhkHdeoCbLbF0A/videos%22%3E%22%3E">
            <img class="footericons" src="../assets/Youtube.png" alt="">
          </a></h1>
      </div>


      <div class="col-sm-2 FB2">
      </div>
        -->
    </div><!-- end of row -->
  </div>
  <!--container-fluid-->
  <script src="https://www.retainable.io/assets/retainable/rss-embed/retainable-rss-embed.js"></script>
</body>

</html>
