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


    <!-- jQuery contact-->
    <script src="js/jquery.js"></script>

    <script type="text/javascript">
        $(function() {
            setTimeout(function() {
                $("#successMessage").hide('blind', {}, 500)
            }, 7000);
        });
    </script>

</head>
 <!-- contact-->
<?php
    $message = '';
    if ($_POST['submit']) {
         $name = $_POST['name'];
         $number = $_POST['number'];
         $email = $_POST['email'];
         $message = $_POST['message'];
         $from = 'Westmed';
         $to = 'info@westmed.com.na';
         $subject = 'New Message from Westmed';
        
         $body = "From: $name\n E-Mail: $email\n Tel: $number\n Message:\n $message";
         
         if (mail ($to, $subject, $body, $from)) {
            $message = 'Message Sent Successfully!';
         } else {
            $message = 'Ah! Try again, please?';
         }
         if($message && $message != ''){?>
         <script type="text/javascript">
         $(document).ready(function(){
            $('#successMessage').modal();
         });
         </script>  
         <?php }
     }
?>
<body>

<!-- Nav Bar Carousel-->
                    <form target="" method="POST">
                        <?php include 'navbanner.php'; ?>
                    </form>
<!-- Nav Bar Carousel End-->


<!-- Modal content-->
            <div id="successMessage" class="modal fade" role="dialog">
              <div class="modal-dialog">
    
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Message Alert</h4>
                  </div>
                  <div class="modal-body">
                    <p><?=$message?></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            
              </div>
            </div>



<!--Contact section-->

      <section id="contact">
          <div class="container">
                  <div class="col-lg-12 text-center">


                  <div class="col-lg-6 text-left">
                          <h1><b>Our Details</b></h1>
                         <p>Address: Welwitschia, Medical Centre, Dr Putch Harris Drive, Walvis Bay, Namibia</p>
                          <p>Tel: +264 64 279 750</p>
                          <p>Fax: +264 64 204 821</p>
                          <p>info@westmed.com.na</p>
                 <div class="col-lg-12 map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58782.87982693023!2d14.474406295504044!3d-22.952805356908673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1c76ef00d003fbb1%3A0x7b2b78577c36fede!2sWalvis+Bay%2C+Namibia!5e0!3m2!1sen!2sza!4v1479808573609" width="80%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                   
                 </div>
                 </div>


                  <div class="col-lg-6 text-left">
                  
                    <form target="" method="POST">
                        <?php include 'form.php'; ?>
                    </form>
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