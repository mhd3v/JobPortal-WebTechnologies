<?php

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){

include('header.php');

?>

        <div class="container">
          <div class="text-center logo"> <a href="index.html"><img src="assets/theme/images/logo.png" alt=""></a></div>
        </div>

      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >


        <div class="bg-color1">
          <div class="container">
            <div class="col-md-3 col-sm-3">

              <div class="block-section text-center ">
                <img src="./assets/theme/images/people/4.jpg" class="img-rounded" alt="">
                <div class="white-space-20"></div>
                <h4><?php echo $_SESSION['user']?></h4>
                <div class="white-space-20"></div>
                <ul class="list-unstyled">
                  <li><a href="my_alerts.php"> My Alerts </a></li>
                  <li><a href="my_notifications.php"> Notifications (5)</a></li>
                  <li><a href="change_password.php"> Change Password</a></li>

                </ul>
                <div class="white-space-20"></div>
                <a href="#" class="btn  btn-line soft btn-theme btn-pill btn-block">Post a Job</a>
                <a href="#" class="btn  btn-line soft  btn-theme btn-pill btn-block">Build Resume</a>
              </div>    </div>
            <div class="col-md-9 col-sm-9">
              <div class="block-section box-side-account">
                <h3 class="no-margin-top">Notifications</h3>
                <hr/>

                <div class="alert alert-warning alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                </div>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="color-heading">Evanto group has invited you to interview test!</h4>
                  <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                  <div class="white-space-10"></div>
                  <p>
                    <button type="button" class="btn btn-sm btn-danger btn-theme ">Take this action</button>
                    <button type="button" class="btn btn-sm btn-default btn-theme">Or do this</button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div><!--end body-content -->


      <?php include('footer.php'); ?>

    </div><!-- end wrapper page -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/plugins/jquery.js"></script>
    <script src="assets/plugins/jquery.easing-1.3.pack.js"></script>
    <!-- jQuery Bootstrap -->
    <script src="assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JS -->
    <script src="assets/theme/js/theme.js"></script>

    <!-- maps -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> 
    <script src="assets/plugins/gmap3.min.js"></script>
    <!-- maps single marker -->
    <script src="assets/theme/js/map-detail.js"></script>

  </body>
</html>

<?php } 

else{
  include('error_not_loggedin.php');
}

?>