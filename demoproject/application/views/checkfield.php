
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from thememakker.com/templates/falcon/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:15 GMT -->
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>:: Multiplex - Admin Dashboard ::</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
  <div class="wrapper">
    <div class="header header-filter" style="background-image: url('<?php echo base_url() ?>assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
              <form class="form" method="post" action="<?php echo site_url() ?>/logincontroller/forgot_pass">
                <div class="header header-primary text-center">
                  <h4>Sign in</h4>
                  <div class="social-line">
                    <a href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a  href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div>
                </div>
                <h3 class="mt-0">Multiplex</h3>
                <p class="help-block">Admin</p>
                <p style="color:red" id="err"><?php echo $err ?></p>
                <div class="content">
                  <div class="form-group">
                    <input type="email" name="txtemail" class="form-control underline-input" onkeyup="geterr()" placeholder="Enter Your Email">
                  </div>
                <div class="footer text-center">
                  <input type="submit" class="btn btn-info btn-raised" value="Submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--  Vendor JavaScripts -->
  <script>
    function geterr()
    {
     $("#err").hide();
    }
    </script>
  <script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
  <script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
  <!-- Custom Js -->
</body>
</html>