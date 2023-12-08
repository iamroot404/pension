<?php include("admin/include/connection.php");?>
<!doctype html>
<html lang="en">
  <head>
    <title>Social Security Fund</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="#home-section" class="h2 mb-0">S S F M S<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li> 
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#faq-section" class="nav-link">FAQ</a></li> 
                <li><a href="member" class="nav-link">Login</a></li>  
                <li><a href="admin" class="nav-link">Admin</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-8 mt-lg-5 text-center">
            
            <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Welcome to the official website of the social security funds.All online services needed or required for this service are provided here.</p>
            <div data-aos="fade-up" data-aos-delay="100">
              <form method="post">
                <input type="number" name="idno" class="btn smoothscroll btn-light mr-2 mb-2" placeholder="Enter ID Number" required>
              <button name="check" class="btn smoothscroll btn-primary mr-2 mb-2">Check Your Status</button>
              </form>
              <?php

                if (isset($_POST['check'])) {
  
  $id_number = htmlentities(mysqli_real_escape_string($con,$_POST['idno']));
 
  
  $check_id= "select * from members where id='$id_number'";
  $run_id = mysqli_query($con, $check_id);


  $checkid = mysqli_num_rows($run_id);

  if($checkid == 1){

      $get_name = "select * from members where id='$id_number'";
      $run_name = mysqli_query($con, $get_name);
      $row = mysqli_fetch_array($run_name);

      
      $name =$row['fullname'];
      
     
     
     

    ?>
    <br>
        <center>
        <div class='col-md-8 alert alert-light'>
    <center><h4 style="padding-top: 10px; color: #007bff;">Congratulations <?php echo "$name"; ?> you are a member</strong></h4></center>
    </div>
</center>


    <?php
    
    
  }else{

     ?>
    
        <br>
        <center>
        <div class='col-md-8 alert alert-light'>
    <center><h4 style="padding-top: 10px; color: #cc1616">SORRY YOU ARE NOT A MEMBER!</strong></h4></center>
    </div>
</center>


    <?php

  }
 
  
}
              ?>
            </div>
          </div>
            
        </div>
      </div>

      <a href="#about-section" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div> 

     <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">About Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/hero.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              
              <p>Welcome to the official website of the social security fund. Variety of services are offered to any user country wide.
Its a very friendly service that exists for the public good by offering social funds to the elderly citizens in the country.
We register members, receive their contributions, manage the funds and distribute the funds when required. 
Our main objective is to ensure funds are delivered on time and the amount given is accurate.
There are several branches available country wide eg: Mombasa, Nairobi, Kisumu Eldoret, Nakuru etc if one needs to consult or visit our office.
</p>
              
            </div>
            
            
              
            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <li>Mission: To provide adequate funds to members for their day to day lives and activities.</li>
                <li>Vision: To be the trusted social security provider.</li>
                <li>Values: Integrity Accountability and Customer focus.</li>
                
              </ul>
              
            </div>

            
            
          </div>
        </div>
      </div>  
    </div>


    <section class="site-section bg-light" id="pricing-section">
      <div class="container"> 
        <div class="row site-section" id="faq-section">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title">Frequently Ask Questions</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">How do I register with the social security fund?</h3>
            <p>You can register for the fund online or go to the nearest available office.</p>
            </div>
            
            

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">How do I contact?</h3>
            <p>Visit the contact us page all information on contact details are available.</p>
            </div>
            
            
          </div>
          <div class="col-lg-6">

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">How much do I have to contribute?</h3>
              <p>Any amount can be counted as contribution as low as 50 shillings.</p>
            </div>
            
            
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">What happens if I change my contact details?</h3>
              <p>Visit our contact page and send us a message with all your updated contacts.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          


          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h4 text-primary"></span>
              <span>Nairobi, Kenya. Branches: Mombasa office: Kilele House 2nd floor, Oginga street
</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h4 text-primary"></span>
              <a href="#">020 772 1470 / 079 725 7749</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h4 text-primary"></span>
              <a href="#">ssf@kenya.co.ke / msassf@kenya.co.ke</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </section>

    

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>