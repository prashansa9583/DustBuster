
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- including the css files -->
  <!-- CSS Libraries -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/imagesSiding.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/responsive.css">
  <!-- <link rel="stylesheet" href="css/tailwindiee.css"> -->


  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
    </script>
  <script>
    $(function () {
      $("#header").load("header/header.blade.php");
      $("#footer").load("footer/footer.blade.php");
    });
  </script>

  <title>Dust Buster</title>

  <!--LOGO--->
  <link rel="icon" href="css/bus-logo.png" type="image/gif" sizes="84x84">

</head>

<body style="background-color:#e1eff6;">
  <!-- horizontal navbar -->
  <div id="header"></div>

  <!-- Image Slider -->

  <div class="slider">
    <div class="slide active">
    <img src="css/slider-1.jpeg" alt="slider1">
      <div class="info">
        <h2>Dust Buster</h2>
        <p>Portal Where You Can Handle Bus Cleaning Services</p>
      </div>
    </div>
    <div class="slide">
      <img src="css/slider3.jpg" alt="">
      <div class="info">
        <h2>Services</h2>
        <p>Portal Has <b>4</b> Different Types of Cleaning</p>
      </div>
    </div>
    <div class="slide">
      <img src="css/slider-4.jpeg" type="image/gif" alt="slider2">
      <div class="info">
        <h2>Supervisor Feature</h2>
        <p>Handles The Bus Status And Changes Accordingly.</p>
      </div>
    </div>
    <div class="slide">
      <img src="css/slider-3.jpeg" alt="">
      <div class="info">
        <h2>Admin Feature</h2>
        <p>Handles All The Access And Manages Supervisor</p>
      </div>
    </div>
    <div class="slide">
      <img src="css/slider4.jpg" alt="" style="height: 650px", width="50px">
      <div class="info">
        <h2>Manager</h2>
        <p>Handles The Summary Report.</p>
      </div>
    </div>
    <div class="navigation">
      <i class="fas fa-chevron-left prev-btn"></i>
      <i class="fas fa-chevron-right next-btn"></i>
    </div>
    <div class="navigation-visibility">
      <div class="slide-icon active"></div>
      <div class="slide-icon"></div>
      <div class="slide-icon"></div>
      <div class="slide-icon"></div>
      <div class="slide-icon"></div>
    </div>
  </div>
  </div>



  <!-- Top Feature Start-->
  <div class="feature-top">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-3 col-sm-6">
          <div class="feature-item">
            <i class="far fa-check-circle"></i>
            <h3>Cleaning</h3>
            <p>Govt Approved</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="feature-item">
            <i class="fa fa-user-tie"></i>
            <h3>Experts</h3>
            <p>Expert Cleaning</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="feature-item">
            <i class="far fa-thumbs-up"></i>
            <h3>Success</h3>
            <p>Success</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="feature-item">
            <i class="far fa-handshake"></i>
            <h3>Support</h3>
            <p>Quick Support</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Top Feature End-->
  <!-- Feature Start -->
  <div class="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="section-header">
            <h2>Services We Provide </h2>
          </div>
          <div class="row align-items-center feature-item">
            <div class="col-5">
              <div class="feature-icon">
              <i class="fa-solid fa-broom" style="color: black;"></i>
              </div>
            </div>
            <div class="col-7">
              <h3>Deep Cleaning</h3>
              <p>
                Deep Cleaning the bus means cleaning the inside and tops of the bus, including the luggage cabinet, underneath and behind the seats and using professional limescale remover to remove all built upscale from all tyre, surfaces and the rooftop.
              </p>
            </div>
          </div>
          <div class="row align-items-center feature-item">
            <div class="col-5">
              <div class="feature-icon">
              <img width="60" height="70" src="https://cdn-icons-png.flaticon.com/512/47/47708.png" alt="" title="" class="loaded">
              </div>
            </div>
            <div class="col-7">
              <h3>Vaccum Cleaning</h3>
              <p>
              Vacuum Cleaning provides removal and cleaning of many kinds of surfaces by means of sucking and removing dust and small particles.
              </p>
            </div>
          </div>
          <div class="row align-items-center feature-item">
            <div class="col-5">
              <div class="feature-icon">
              <i class="fa-solid fa-soap"style="color: black;"></i>
              </div>
            </div>
            <div class="col-7">
              <h3>Washing</h3>
              <p>
                Washing provides Internal and External Cleaning of the Buses.
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-md-5">
          <div class="feature-img">
            <img src="css/display.gif" alt="Feature">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature End -->

  <br>
  <br>
  <br>
  <hr>
  <br>
  <br>

  <section data-aos="fade-down" class="text-gray-600 body-font relative content" id="aboutus" >
    <div class=" container px-5 py-24 mx-auto " style="display:block; justify-content:center;">

      <div class="flex flex-col w-full mb-12" >
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">About Us</h1>
        <p style="color: black; font-size:large;" class="lg:w-2/3 mx-auto leading-relaxed text-base">
        Regular and deep cleaning of city transport buses, on a daily basis to ensure their safe operation and to provide an acceptable level of service and cleanliness to the riding public.</p> 
        
        <p style="color: black; font-size:large;" class="lg:w-2/3 mx-auto leading-relaxed text-base">These tasks are performed on what is called the service line-an area of the maintenance facility where transit buses are fueled, inspected for mechanical defects, and cleaned before being returned to revenue service.</p>

        <p style="color: black; font-size:large;" class="lg:w-2/3 mx-auto leading-relaxed text-base">We address minor servicing and cleaning needs immediately, while more serious items discovered as part of the inspection process and scheduled for attention at a later time.</p>
        
        <p style="color: black; font-size:large;" class="lg:w-2/3 mx-auto leading-relaxed text-base">Cleaning functions addressed by us include inspections, exterior washing, interior cleaning, and detailed cleaning after inspection.</p>
      </div>
      <div style="text-align: center;font-size: 20px;color: #4682ed;">
        {{session('msg')}}
    </div>
      <form style="display:flex; justify-content:center;" method="POST"  action="aboutUsStore">
      @csrf
               
              <br>
              <br>
              <br>
              <br>
              <br>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>




  <div id="footer"></div>
  </div>
  <!-- Script for icons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- scrpt for image sliding -->
  <script src="js/logic_image.js"></script>
  <!-- horizontal navbar -->
  <script src="js/logic_navbar.js"></script>

</body>

</html>