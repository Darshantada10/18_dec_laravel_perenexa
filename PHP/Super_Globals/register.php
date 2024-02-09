<?php

    // include('header.php');
    // include('header.php');
    // include('header.php');
    // include('header1.php');
    // include('header.php');


    // include_once('header.php');
    // include_once('header.php');
    // include_once('header.php');
    // include_once('header1.php');
    // include_once('header.php');


    // require('header1.php');
    // require('header.php');
    // require('header.php');
    // require('header.php');
    // require('header.php');

    // require_once('header1.php');
    // require_once('header.php');k
    // require_once('header.php');
    // require_once('header.php');
    // require_once('header.php');


    require_once('header.php');

    if(isset($_REQUEST['reg_btn']))
    {
      echo "<pre>";
      // echo "request<br>";
      // print_r($_REQUEST);
      // print_r($_REQUEST['username']);
      // echo "get<br>";
      // print_r($_GET);
      // echo "post<br>";
      // print_r($_POST);
      echo "</pre>";
      // date_default_timezone_set('Asia/Calcutta'); 
      // echo date("Y-m-d H:i:s"); // time in India

      // setcookie("username",$_REQUEST['username'],time()+1);
      setcookie("username",$_REQUEST['username']);
      setcookie("email",$_REQUEST['email']);
      setcookie("password",$_REQUEST['password']);
      

    }

?>





<section class="vh-100 mt-5" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form method="post" class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="username" id="username" class="form-control" />
                      <label class="form-label" for="username">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" id="email" class="form-control" />
                      <label class="form-label" for="email">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" id="password" class="form-control" />
                      <label class="form-label" for="password">Password</label>
                    </div>
                  </div>

                 

                 

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="reg_btn" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://buffer.com/cdn-cgi/image/w=1000,fit=contain,q=90,f=auto/library/content/images/size/w1200/2023/09/instagram-image-size.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<br>
<br>
<br>
<br>



<?php

    // include('footer.php');
?>