<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to Westmed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/hover.css">
  
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>

            <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</head>

<!-- Nav Bar Carousel-->
                    <form target="" method="POST">
                        <?php include 'navbanner.php'; ?>
                    </form>
<!-- Nav Bar Carousel End-->


<!--Welcome section-->
<section id="welcome">

   <div class="container">
           <div id="intro_text" class="col-lg-12">

		           <div class="col-lg-6">
               <br>
		           	<h1>Welcome to Westmed</h1>
                <br>

		            	<p>We supply maintenance on all items we sell, especially equipment.</p>

        					<p>We deliver goods to all medical and healthcare facilities within the Erongo 
        					district within one-two hours from order time. </p>
		           </div>


               <div class="col-lg-6">
            	<img class="home wow pulse img-responsive" src="images/home_img.jpg">               
               </div>  

           </div>
   </div>

</section>


<!--Welcome section End-->



<!--Find out more-->
<div class="col-lg-12">
        <div class="well">
            <div class="row">
                <div class="col-md-8">

                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block wow rollIn" href="about.php">Find out more about us...</a>
                </div>
            </div>
        </div>
</div>

<!-- Service Panels -->
<section>
        <div class="row">
            <div class="col-lg-12" align="center">



            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                        <img class="circle wow rubberBand img-responsive" src="images/1.png">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Medical Disposal</h4>
                        <p>Examination and surgical gloves, 
                           suction catheters, needles and syringes...</p>
                        <a href="medical.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                        <img class="circle wow rubberBand img-responsive" src="images/2.png">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Our Products</h4>
                        <p>Pharmaceuticals, Medical Sundries 
                           like bandages, (to mention a few).</p>
                        <a href="products.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                        <img class="circle wow rubberBand img-responsive" src="images/3.png">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Locate Us</h4>
                        <p>We are situated in Namibia.
                           Send us a email on info@westmed.com.na</p>
                        <a href="contact.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
            </div>
</section>
<!-- Service Panels End -->



<!-- Footer-->
                    <form target="" method="POST">
                        <?php include 'footer.php'; ?>
                    </form>
<!-- Footer-->

</body>
</html>