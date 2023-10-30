<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../asset/css/login.css" />
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="limiter" id="login">
        <div class="container-login100" style="background-image:url(https://image.freepik.com/free-photo/happy-woman-doing-online-shopping-home_329181-4301.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="login_topimg"></div>
                        <div class="wrap-login100">
                            <form class="login100-form validate-form" action="../proses/proses_register.php" method="post">
                              <span class="login100-form-title "> Register </span>
                              <span class="login100-form-subtitle m-b-16"> your account </span>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz">
                                  <input class="input100" type="text" name="username" placeholder="Username">
                                  <span class="focus-input100"></span>
                                  <span class="symbol-input100">
                                    <span class="glyphicon glyphicon-user"></span>
                                  </span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                                  <input class="input100" type="password" name="password" placeholder="Password">
                                  <span class="focus-input100"></span>
                                  <span class="symbol-input100">
                                    <span class="glyphicon glyphicon-lock"></span>
                                  </span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                                  <input class="input100" type="text" name="nama" placeholder="Nama">
                                  <span class="focus-input100"></span>
                                  <span class="symbol-input100">
                                    <span class="glyphicon glyphicon-lock"></span>
                                  </span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                                  <input class="input100" type="email" name="email" placeholder="Email">
                                  <span class="focus-input100"></span>
                                  <span class="symbol-input100">
                                    <span class="glyphicon glyphicon-lock"></span>
                                  </span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                                  <input class="input100" type="tel" name="telp" placeholder="Telephone">
                                  <span class="focus-input100"></span>
                                  <span class="symbol-input100">
                                    <span class="glyphicon glyphicon-lock"></span>
                                  </span>
                                </div>
                                <div class="flex-sb-m w-full p-b-30">
                                    <div>
                                      <a href="login.php" class="txt1"> Have an Account?</a>
                                    </div>
                                </div>
                                <div class="container-login100-form-btn p-t-25">
                                  <button class="login100-form-btn"> Register </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
