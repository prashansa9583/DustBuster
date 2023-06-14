<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!--CSS file-->
  <link href="css/style3.css" rel="stylesheet">
  <!--image slider-->
  <link href="css/style4.css" rel="stylesheet">
  <!--style index page-->
  <title>LOGIN</title>

  <!--Tailwind css-->
  <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
  <link href="css/tailwindiee.css" rel="stylesheet">

  <!-- For Animation-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="icon" href="css/advocate-modified.png" type="image/gif" sizes="64x64">

</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark header">
    <div class="container-fluid">
      <a class="navbar-brand">DUST BUSTER</a>
    </div>
  </nav>


  <br>

  <!--image slider start-->

  <br>
  <br>
  <div data-aos="zoom-out" class=" container ">
    <div class="blueBg">
      <div class="box signin">
        <h2>Already have an Account ?</h2>
        <button class="signinBtn" style="border-radius: 18px;">Sign in</button>
      </div>
      <div class="box signup">
        <h2>Want to Read More about us?</h2>
        <button class="signupBtn" style="border-radius: 18px;">Click Here</button>
      </div>
    </div>
    <div class="formBx">
      <div class="form signinForm">

      @if (session()->get('msg'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('msg')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
        <form method="post" action="check">
          @csrf
          <h3> SIGN IN </h3>
          <input name="Email" type="email" placeholder="Enter Your Email-ID" required>
          <input name="password" type="password" placeholder="Enter Your Password" required>

          <button style="background-color: #ffe6a7; 
                        border: none; 
                        color: rgb(0, 0, 0);
                        padding: 15px 20px;
                        border-radius: 18px;
                        width: 110px;
                        justify-content: center;
                        justify-items: center;
                        text-align: center;
                        text-decoration: none;
                        font-size: 19px;" type="submit" value="Login">LOGIN</button>
          <!-- <input type="submit" value="Login"> -->
          <br>

          <a href="#" class="forgot">Forgot Password</a>
        </form>
      </div>  

      <div class="form signupForm">


        <form method="post" action="create"> 
          @csrf
          <h3 style="margin-top: 6px;"> WELCOME TO OUR FAMILY </h3>
          <!-- <input type="email" class="form-control" id="Email" name="Email" value="{{ old('Email') }}"
            placeholder="Enter your email" required>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
          <span style="color:red">@error('password'){{$message}}@enderror</span>
          <input type="password" class="form-control" id="password_confirm" name="password_confirm"
            placeholder="Enter your confirm password" required>
          <span style="color:red">@error('password'){{$message}}@enderror</span> -->

          <div class="someText">
            <div class = "text">
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, ture, discovered the undoubtable source. 
            </div>
          </div>
          <style>
              /* mouse over link */
              a:hover {
                color: white;
              }
          </style>
          <button  style="background-color: #ffe6a7; 
                        border: none;
                        color: rgb(0, 0, 0);
                        padding: 15px 20px;
                        width: 170px;
                        border-radius: 18px;
                        justify-content: center;
                        justify-items: center;
                        text-align: center;
                        text-decoration: none;
                        font-size: 19px;" type="submit">
                        <a href="contactus#contactus">CONTACT US</a></button>

        </form>
      </div>
    </div>
  </div>
  </div>

  <footer  class="text-gray-600 body-font content" >
    <div >
      <div class="flex flex-wrap md:text-center text-center order-first">
      </div>
    </div>
    <div class="bg-gray-100" >
      <div class=" px-5 py-6 mx-auto flex items-center sm:flex-row flex-col" >

        <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2021 nexasoftware —
          <style>
            a:hover{
              color: blue;
            }
          </style>
          <a  href="https://nexasoftware.com/index.php" class="text-gray-600 ml-1" target="_blank">@nexasoftware</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
          <a class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
              </path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 300,
      duration: 1900
    });
  </script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

  <!--INCLUDING JS FILE-->
  <script src="js/logic2.js"></script>
  <script type="text/javascript">
    var counter = 1;
    setInterval(function () {
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if (counter > 4) {
        counter = 1;
      }
    }, 5000);
  </script>
</body>

</html>