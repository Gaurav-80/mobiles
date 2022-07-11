<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>



<!-- html start -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mobile</title>

  <!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="csss/styles.css">

</head>
<body>
<meta charset="utf-8">
	<title>Mobile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- <link rel="stylesheet" type="text/css" href="../Css/style.css"> -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Font icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- aos css-->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
</head>
</head>
<body>



<!-- html end -->

<!-- carsul start -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/banner2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/banner1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/i1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<!-- carasul end -->

<!-- Top Sale starts  -->

<section class="features" id="features">

<h1 class="heading"> Top <span>Sale</span> </h1>
    <div class="box-container">

        <div class="box">
        <img src="image/1.webp" alt="">  
        <h3>Samsung Galaxy M12</h3>
                <div class="price"> Price:	₹13,499.00</div>  
                    </div>    
                    
                    <div class="box">
                    <img src="image/2.webp" alt="">
                <h3>Redmi Note 11</h3>
                <div class="price"> Price:	₹14,499.00</div>  
                    </div>  

                    <div class="box">
                    <img src="image/3.jpg" alt="">
                <h3>Vivo Y33T</h3>
                <div class="price"> Price:	₹18,990.00 </div>  
                    </div>  

                    <div class="box">
                    <img src="image/4.webp" alt="">
                <h3>OPPO A31</h3>
                <div class="price"> Price:	₹12,990.00</div>  
                    </div>  

                    <div class="box">
                    <img src="image/5.jpg" alt="">
                <h3>Realme X7</h3>
                <div class="price">Price:	₹15,999.00</div>  
                    </div>  

                    <div class="box">
                    <img src="image/6.jpg" alt="">
                <h3>Realme 8 </h3>
                <div class="price"> Price:	₹14,305.00</div> 
                 
                    </div>  
   
    </div>

</section>

<!-- Top Sale End  -->

<!-- Banner Ads start -->

<section id="banner_adds">
<div class="container py-5 text-center">
<img src="image/banner1-cr-500x150.jpg" alt="banner1" class="img-fluid">
<img src="image/banner2-cr-500x150.jpg" alt="banner1" class="img-fluid">
</div>
</section>

<!-- Banner Ads End -->

<!-- New phone starts  -->

<section class="features" id="features">

<h1 class="heading"> New <span>phones</span> </h1>

    <div class="box-container">

        <div class="box">
        <img src="image/9.jpg" alt="">
            <h3>OnePlus Nord CE 2 5G (Gray Mirror, 8GB RAM, 128GB Storage)</h3>
            <p>Price:	₹24,999.00</p>
                    </div>    
                    
                    <div class="box">
                    <img src="image/10.webp" alt="">
            <h3>Apple iPhone 13 Pro Max (128 GB) - Alpine Green</h3>
            <p>Price:	₹1,29,900.00</p>
                    </div>  

                    <div class="box">
                    <img src="image/11.webp" alt="">
            <h3>OnePlus 9R 5G (Carbon Black, 8GB RAM, 128GB Storage)</h3>
            <p>Price:	₹34,998.00</p>
                    </div>  
    </div>

</section>

<!-- Top Sale End  -->

<!-- Ad start -->
<div class="ad">
    <img src="image/ban1.jpg" alt="banner1" class="img-fluid">
</div>

<!-- Ad End -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/f1.jpg" alt="">            
        </div>

        <div class="box">
            <img src="image/f2.jpg" alt="">            
        </div>

        <div class="box">
            <img src="image/f3.png" alt="">            
        </div>

    </div>

</section>

    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Information</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">The brand</a>
              </li>
              
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Customer service</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
              </li>
              
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Why buy from us</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Secure shipping</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Your account</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="http://localhost/mobiles/checkout.php" class="footer-nav__link">Sign in</a>
              </li>
              <li class="footer-nav__item">
                <a href="http://localhost/mobiles/customer_register.php" class="footer-nav__link">Register</a>
              </li>
              <li class="footer-nav__item">
                <a href="http://localhost/mobiles/cart.php" class="footer-nav__link">View cart</a>
              </li>
             
              <li class="footer-nav__item">
                <a href="http://localhost/mobiles/customer/my_account.php?my_orders" class="footer-nav__link">Track an order</a>
              </li>
              <li class="footer-nav__item">
                <a href="http://localhost/mobiles/customer/my_account.php?edit_account" class="footer-nav__link">Update information</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Contact details</div>
            <address class="address">
            Head Office:  New Delhi<br>
            110078 Ashok Nager.
          </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:0123456789">0123-456-789</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@yourwebsite.com" class="email__addr">support@yourwebsite.com</a>
            </div>
          </div>

        </div>
      </div>

        </div>
      </div>
    </footer>
</body>

</html>
