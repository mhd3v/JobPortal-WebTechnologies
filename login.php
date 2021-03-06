<?php

include('header.php');

?>


        <div class="container">
          <div class="text-center logo"> <a href="index.php"><img src="assets/theme/images/logo.png" alt=""></a></div>
        </div>

      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="block-section bg-color4">
          <div class="container">
            <div class="panel panel-md">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                   

                    <div class="white-space-10"></div>
                    <p class="text-center"><span class="span-line">Login</span></p>

                    <!-- form login -->
                    <form method="post" id="loginform">

                      <?php
                      if(isset($_SESSION['signup'])){ 
                        session_unset();
                      ?>

                      <div class="form-group">
                        <div class="alert alert-success">Signup successful! Login to continue</div>
                      </div>

                      <?php } ?>

                      <div class="form-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" placeholder="Your Username">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Your Password">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-6">
                            <div class="checkbox flat-checkbox">
                              <label>
                                <input type="checkbox"> 
                                <span class="fa fa-check"></span>
                                Remember me?
                              </label>
                            </div>
                          </div>
                          <div class="col-xs-6 text-right">
                            <p class="help-block"><a href="#myModal" data-toggle="modal">Forgot password?</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="form-group no-margin">
                        <div id="loginmessage" class="alert alert-danger" style="margin-top:10px"></div>
                        <button class="btn btn-theme btn-lg btn-t-primary btn-block">Log In</button>
                      </div>
                    </form><!-- form login -->

                  </div>
                </div>
              </div>
            </div>

            <div class="white-space-20"></div>
            <div class="text-center color-white">Not a member? &nbsp; <a href="register.php" class="link-white"><strong>Create an account free</strong></a></div>
          </div>
        </div>

        <!-- box bottom -->
        <div class="block-section bg-color2">
          <div class="container text-center">
            <i class="fa fa-mobile-phone fa-5x box-icon"></i>
            <h2 class=""> Find jobs with your phone</h2>

            <p>Download the JobPlanet app from the</p>
            <a href="#" class="btn btn-theme btn-default"><i class="fa fa-android bordered-right dark"></i> Android</a>
            <span class="space-inline-10"></span>
            <a href="#" class="btn btn-theme btn-default"><i class="fa fa-apple bordered-right dark"></i> Iphone</a>
          </div>
        </div><!-- end box bottom -->

        <!-- modal forgot password -->
        <div class="modal fade" id="myModal" >
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" >Forgot Password</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Enter Your Email</label>
                    <input type="email" class="form-control " name="text" placeholder="Email">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success btn-theme">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div><!-- end modal forgot password -->        
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

    <script>
    $(document).ready(function(){

      $("#loginmessage").hide();

      $(function () {

        $('#loginform').on('submit', function (e) {

            e.preventDefault();

            $.ajax({
              type: 'post',
              url: 'check/checklogin.php',
              data: $('form').serialize(),
              success: function (data) {
                
                if(data == "success")
                  $(location).attr('href', 'dashboard.php')
                else{
                  $("#loginmessage").html(data);
                  $("#loginmessage").show();
                }

              },

              error:function (data) {
                $("#loginmessage").html("failed to connect to server");
              }
            });

          });

          });

        });

    </script>

  </body>
</html>