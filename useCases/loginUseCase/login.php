<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="..\..\bootstrap-5.0.0-beta1-dist\css\bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="..\..\bootstrap-5.0.0-beta1-dist\css\bootstrap-theme.min.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="..\ADISchool\bootstrap-5.0.0-beta1-dist\js\bootstrap.min.js"></script>
        <link rel="stylesheet" href="..\..\css\login_style.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login</title>
        <!-- Custom fonts for this template-->
        <link href="../../startbootstrap-sb-admin-2-gh-pages/css/font.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="76x76" href="../../img/ADI_logo.png">
        <link rel="icon" type="image/png"  href="../../img/ADI_logo.png">
        <!-- Custom styles for this template-->
        <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../../fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet" type="text/css">
    </head>
   <body>
        <div class="container" id="testjust">
            <div class="row content">
                <div class="col-md-6 mb-3">
                        <img src="../../img/icon_login.png" alt="login-image" class="img-fluid">
                </div>
                <div class="col-md-6 mb-3">
            <h3 class="signin-text mb-3"> Sign In</h3>
            <form action="loginController.php" method="POST">
                    <div class="form-group">
                      <label for="user">User Name</label>
                      <input type="text" name="user" class="form-control">
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" class="form-control">
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                          <label class="form-check-label" for="checkbox">
                              Remember Me
                          </label>

                      </div>
                       <button class="btn btn-class">Login</button>
                    </div>
            </form>
                </div>
            </div>
        </div>
   
   </body>
   </html>
