<!DOCTYPE html>
<html lang="en-US">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="gauto | Car Rental HTML Template from Themescare">
      <meta name="keyword" content="taxi,car,rent,hire,transport">
      <meta name="author" content="Themescare">
      <!-- Title -->
      <title>gauto</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/img/favicon/favicon-32x32.png') }}">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
      <!--Magnific css-->
      <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
      <!--Animate css-->
      <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
      <!--Datepicker css-->
      <link rel="stylesheet" href="{{ asset('front/css/jquery.datepicker.css') }}">
      <!--Nice Select css-->
      <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">
      <!-- Lightgallery css -->
      <link rel="stylesheet" href="{{ asset('front/css/lightgallery.min.css') }}">
      <!--ClockPicker css-->
      <link rel="stylesheet" href="{{ asset('front/css/jquery-clockpicker.min.css') }}">
      <!--Slicknav css-->
      <link rel="stylesheet" href="{{ asset('front/css/slicknav.min.css') }}">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
      <!--Responsive css-->
      <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
   </head>
   <body>


      <!-- Header Top Area Start -->
      <section class="gauto-header-top-area">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="header-top-left">
                     <p>Need Help?: <i class="fa fa-phone"></i> Call: +321 123 45 978</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="header-top-right">
                     <a href="#">
                     <i class="fa fa-key"></i>
                     login
                     </a>
                     <a href="#">
                     <i class="fa fa-user"></i>
                     register
                     </a>
                     <div class="dropdown">
                        <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">
                        <img src="{{ asset('front/img/en.png') }}" alt="lang" /> English
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                           <li><img src="{{ asset('front/img/ca.png') }}" alt="lang" /> Canada</li>
                           <li><img src="{{ asset('front/img/fa.png') }}" alt="lang" /> French</li>
                           <li><img src="{{ asset('front/img/ja.png') }}" alt="lang" /> Japanese</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Header Top Area End -->


      <!-- Main Header Area Start -->
      <header class="gauto-main-header-area">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="site-logo">
                     <a href="index.html">
                     <img src="{{ asset('front/img/logo.png') }}" alt="gauto" />
                     </a>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-9">
                  <div class="header-promo">
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="{{ asset('front/img/globe.png') }}" alt="globe" />
                        </div>
                        <div class="header-promo-info">
                           <h3>Newyork, USA</h3>
                           <p>Melbourne City, Austalia</p>
                        </div>
                     </div>
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="{{ asset('front/img/clock.png') }}" alt="clock" />
                        </div>
                        <div class="header-promo-info">
                           <h3>Monday to Friday</h3>
                           <p>9:00am - 6:00pm</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="header-action">
                     <a href="#"><i class="fa fa-phone"></i> Request a call</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Main Header Area End -->


      <!-- Mainmenu Area Start -->
      <section class="gauto-mainmenu-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-9">
                  <div class="mainmenu">
                     <nav>
                        <ul id="gauto_navigation">
                           <li class="active"><a href="index.html">home</a></li>
                           <li><a href="about.html">about</a></li>
                           <li>
                              <a href="#">Service</a>
                              <ul>
                                 <li><a href="service.html">All services</a></li>
                                 <li><a href="single-service.html">Service Details</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#">cars</a>
                              <ul>
                                 <li><a href="car-listing.html">car listing</a></li>
                                 <li><a href="car-booking.html">car booking</a></li>
                              </ul>
                           </li>
                           <li><a href="gallery.html">gallery</a></li>
                           <li>
                              <a href="#">Shop</a>
                              <ul>
                                 <li><a href="products.html">products</a></li>
                                 <li><a href="single-product.html">product details</a></li>
                                 <li><a href="cart.html">Shoping Cart</a></li>
                                 <li><a href="checkout.html">checkout</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#">pages</a>
                              <ul>
                                 <li><a href="blog.html">blog</a></li>
                                 <li><a href="single-blog.html">single blog</a></li>
                                 <li><a href="404.html">404 not found</a></li>
                                 <li><a href="login.html">login</a></li>
                                 <li><a href="register.html">register</a></li>
                              </ul>
                           </li>
                           <li><a href="contact.html">contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-12">
                  <div class="main-search-right">
                     <!-- Responsive Menu Start -->
                     <div class="gauto-responsive-menu"></div>
                     <!-- Responsive Menu Start -->

                     <!-- Cart Box Start -->
                     <div class="header-cart-box">
                        <div class="login dropdown">
                           <button class="dropdown-toggle cart-icon" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span>2</span>
                           </button>
                           <div class="dropdown-menu cart-dropdown" aria-labelledby="dropdownMenu1">
                              <ul class="product_list">
                                 <li>
                                    <div class="cart-btn-product">
                                       <a class="product-remove" href="#">
                                       <i class="fa fa-times"></i>
                                       </a>
                                       <div class="cart-btn-pro-img">
                                          <a href="#">
                                          <img src="{{ asset('front/img/cart-1.png') }}" alt="product" />
                                          </a>
                                       </div>
                                       <div class="cart-btn-pro-cont">
                                          <h4><a href="#">CAR SPOILERS</a></h4>
                                          <p>Quantity 2</p>
                                          <span class="price">
                                          $29.99
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="cart-btn-product">
                                       <a class="product-remove" href="#">
                                       <i class="fa fa-times"></i>
                                       </a>
                                       <div class="cart-btn-pro-img">
                                          <a href="#">
                                          <img src="{{ asset('front/img/cart-2.jpg') }}" alt="product" />
                                          </a>
                                       </div>
                                       <div class="cart-btn-pro-cont">
                                          <h4><a href="#">CAR SPOILERS</a></h4>
                                          <p>Quantity 2</p>
                                          <span class="price">
                                          $29.99
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                              <div class="cart-subtotal">
                                 <p>
                                    Subtotal :
                                    <span class="drop-total">$59.98</span>
                                 </p>
                              </div>
                              <div class="cart-btn">
                                 <a href="#" class="cart-btn-1">View Cart</a>
                                 <a href="#" class="cart-btn-2">Checkout</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Cart Box End -->

                     <!-- Search Box Start -->
                     <div class="search-box">
                        <form>
                           <input type="search" placeholder="Search">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                     <!-- Search Box End -->

                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Mainmenu Area End -->

      @yield('content')

      <!-- Footer Area Start -->
      <footer class="gauto-footer-area">
         <div class="footer-top-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="single-footer">
                        <div class="footer-logo">
                           <a href="#">
                           <img src="{{ asset('front/img/footer-logo.png') }}" alt="footer-logo" />
                           </a>
                        </div>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna as aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <div class="footer-address">
                           <h3>Head office</h3>
                           <p>125 Big fella St. Road, <span>New York, Hi 5654775</span></p>
                           <ul>
                              <li>Phone: 326487652 </li>
                              <li>Email: example@mail.com</li>
                              <li>Office Time: 9AM- 4PM</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="single-footer quick_links">
                        <h3>Quick Links</h3>
                        <ul class="quick-links">
                           <li><a href="#">About us</a></li>
                           <li><a href="#">Our Services</a></li>
                           <li><a href="#">Case Studies</a></li>
                           <li><a href="#">Contact us</a></li>
                        </ul>
                        <ul class="quick-links">
                           <li><a href="#">Testimonials</a></li>
                           <li><a href="#">Privacy Policy</a></li>
                           <li><a href="#">latest News</a></li>
                        </ul>
                     </div>
                     <div class="single-footer newsletter_box">
                        <h3>newsletter</h3>
                        <form>
                           <input type="email" placeholder="Email Address" />
                           <button type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="single-footer">
                        <h3>Recent post</h3>
                        <ul>
                           <li>
                              <div class="single-footer-post">
                                 <div class="footer-post-image">
                                    <a href="#">
                                    <img src="{{ asset('front/img/post-thumb-3.jpg') }}" alt="footer post" />
                                    </a>
                                 </div>
                                 <div class="footer-post-text">
                                    <h3>
                                       <a href="#">
                                       Revealed: How to set goals for you and your team
                                       </a>
                                    </h3>
                                    <p>Posted on: Jan 12, 2019</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="single-footer-post">
                                 <div class="footer-post-image">
                                    <a href="#">
                                    <img src="{{ asset('front/img/post-thumb-2.jpg') }}" alt="footer post" />
                                    </a>
                                 </div>
                                 <div class="footer-post-text">
                                    <h3>
                                       <a href="#">
                                       Revealed: How to set goals for you and your team
                                       </a>
                                    </h3>
                                    <p>Posted on: Jan 12, 2019</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="single-footer-post">
                                 <div class="footer-post-image">
                                    <a href="#">
                                    <img src="{{ asset('front/img/post-thumb-1.jpg') }}" alt="footer post" />
                                    </a>
                                 </div>
                                 <div class="footer-post-text">
                                    <h3>
                                       <a href="#">
                                       apartment in the sky love three boys of his own.
                                       </a>
                                    </h3>
                                    <p>Posted on: Jan 12, 2019</p>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="copyright">
                        <p>Design With <i class="fa fa-heart"></i> from <a href="#">Themescare</a></p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-social">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->


      <!--Jquery js-->
      <script src="{{ asset('front/js/jquery.min.js') }}"></script>
      <!-- Popper JS -->
      <script src="{{ asset('front/js/popper.min.js') }}"></script>
      <!--Bootstrap js-->
      <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
      <!--Owl-Carousel js-->
      <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
      <!--Lightgallery js-->
      <script src="{{ asset('front/js/lightgallery-all.js') }}"></script>
      <script src="{{ asset('front/js/custom_lightgallery.js') }}"></script>
      <!--Slicknav js-->
      <script src="{{ asset('front/js/jquery.slicknav.min.js') }}"></script>
      <!--Magnific js-->
      <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
      <!--Nice Select js-->
      <script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>
      <!-- Datepicker JS -->
      <script src="{{ asset('front/js/jquery.datepicker.min.js') }}"></script>
      <!--ClockPicker JS-->
      <script src="{{ asset('front/js/jquery-clockpicker.min.js') }}"></script>
      <!--Main js-->
      <script src="{{ asset('front/js/main.js') }}"></script>
   </body>
</html>
