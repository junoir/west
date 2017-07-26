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
<body>

<!-- Nav Bar Carousel-->
                    <form target="" method="POST">
                        <?php include 'navbanner.php'; ?>
                    </form>
<!-- Nav Bar Carousel End-->

        <!-- Service Tabs -->
<section id "medi">
        <div class="row">
            <div class="col-lg-12">
            <h2 class="page-header">Medical Service Tabs</h2>
            </div>
                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> Pharmaceuticals</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> Medical Devices and Equipment</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Medical disposable</a>
                    </li>
                </ul> 

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in text-left" id="service-one">

                            <p class="wow bounceInLeft"> -ARV medication</p>
                            <p class="wow bounceInLeft"> -TB medication</p>
                            <p class="wow bounceInLeft"> -Topical applications</p>
                            <p class="wow bounceInLeft"> -Oncology therapy</p>
                            <p class="wow bounceInLeft"> -Hormones</p>
                            <p class="wow bounceInLeft"> -Nutritional supplements</p>
                            <p class="wow bounceInLeft"> -Ophthalmic preparations</p>
                            <p class="wow bounceInLeft"> -Anti-malarial</p>
                            <p class="wow bounceInLeft"> -Injectables</p>
                            <p class="wow bounceInLeft"> -Suppositories</p>
                            <p class="wow bounceInLeft"> -IV therapy</p></p>
                            <p class="wow bounceInLeft"> -Oral dosage forms</p>
                            <p class="wow bounceInLeft"> -Oral rehydration therapy</p>
                            <p class="wow bounceInLeft"> -Suspensions</p>
                            <p class="wow bounceInLeft"> -Inhalants</p>
                            <p class="wow bounceInLeft"> -Inhalation anaesthetics</p>
                    </div>

                    <div class="tab-pane fade text-center" id="service-two">

                          <p class="wow bounceInLeft"> -Orthopaedic implants</p>
                          <p class="wow bounceInLeft"> -Dialysis</p>
                          <p class="wow bounceInLeft"> -Cardiology</p>
                          <p class="wow bounceInLeft"> -Diathermy machines</p>
                          <p class="wow bounceInLeft"> -Surgical instruments</p>
                          <p class="wow bounceInLeft"> -Anaesthesia machines</p>
                          <p class="wow bounceInLeft"> -Sterilisers</p>
                          <p class="wow bounceInLeft"> -Breathing circuits</p>
                          <p class="wow bounceInLeft"> -Endoscopic equipment</p>
                          <p class="wow bounceInLeft"> -Airway management</p>
                    </div>
                    <div class="tab-pane fade text-right" id="service-three">

                        <p class="wow bounceInLeft"> -Examination and surgical gloves</p>
                        <p class="wow bounceInLeft"> -Suction catheters</p>
                        <p class="wow bounceInLeft"> -Needles and syringes</p>
                        <p class="wow bounceInLeft"> -Male and female condoms</p>
                        <p class="wow bounceInLeft"> -Vascular access</p>
                        <p class="wow bounceInLeft"> -Sutures</p>
                        <p class="wow bounceInLeft"> -Intravenous therapy</p>
                        <p class="wow bounceInLeft"> -Procedure kits</p>
                        <p class="wow bounceInLeft"> -Wound care</p>
                        <p class="wow bounceInLeft"> -Anaesthesia masks</p>
                        <p class="wow bounceInLeft"> -Urinary and urological</p>
                        <p class="wow bounceInLeft"> -Infection control</p>

                    </div>
        </div>
            </div>
        </div>
</div>
</section>


<!-- Footer-->
                    <form target="" method="POST">
                        <?php include 'footer.php'; ?>
                    </form>
<!-- Footer-->


</body>
</html>