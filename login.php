<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <meta name="google-signin-client_id" content="488257869521-ia4ufh8aq1v2lt9ua2o9f4o7qn0b3d66.apps.googleusercontent.com">

  <!-- Google platform library-->

  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script type="text/javascript">
function init() {
  gapi.load('auth2', function() {
gapi.auth2.init();
   });
}
  </script>

  <script src="https://apis.google.com/js/api.js" ></script>
<script src="js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
  <title>CloudAge - Login</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

     <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> -->

  <div class="container">


    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block " style="text-align: center;"><img src="img/login.png" style="width: 75%;padding-top: 90px;"></div>
              
                
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <?php echo display_error(); ?>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <hr>
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">Login</button>
                    <!-- <a href="index.php" class="btn btn-primary btn-user btn-block">
                      Login
                    </a> -->
                    <!-- <div id="signin"></div> -->
                     <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> -->
                    <!-- <a href="index.php" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>






</body>

</html>
