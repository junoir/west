  <!--  Nav Bar and Carousel======== -->

<!--  Nav Bar======== -->

<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a  href="index.php"><img class="navbar-brand imgTest" src="images/logo.jpg"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="hvr-underline-from-center" href="index.php">Home</a></li>
       
            <li><a class="hvr-underline-from-center" href="about.php">About Us</a></li>
            <li><a class="hvr-underline-from-center" href="products.php">Products &amp; Services</a></li>
            <li><a class="hvr-underline-from-center" href="medical.php">Medical Services</a></li>
            <li><a class="hvr-underline-from-center" href="contact.php">Contact Us</a></li>
          </ul>
    </div>
  </div>
</nav>
<!-- Nav End-->



<!--Carousel-->


      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <img class="img-responsive" src="images/ban1.jpg">
            <div class="carousel-caption">
              <h3 class="purpleText">Your “next-door neighbor” supplier </h3>
            </div>
          </div>

          <div class="item">
            <img class="img-responsive" src="images/ban2.jpg">
            <div class="carousel-caption">
              <h3 class="purpleText">All your Pharmaceutical  Needs...</h3>
            </div>
          </div>
        
          <div class="item">
            <img class="img-responsive" src="images/ban3.jpg">
            <div class="carousel-caption">
              <h3 class="purpleText">Maintenance On Equipment</h3>
            </div>
          </div>
      
        </div>

          <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
