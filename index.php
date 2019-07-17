<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Flattern</title>

    <!-- ========== Font-awesome ========== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">

    <!-- ========== CSS ========== -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
 <!-- ========== Toggle top area ========== -->
 <div class="hidden-top">
   <div class="container">
     <div class="row">
       <div class="col-md-4 col-lg-4 col-sm-12">
         <p><strong>We are available for any custom works this month</strong></p>
       </div>
       <div class="col-md-4 col-lg-4 col-sm-12">
         <p>Main office: Springville center X264, Park Ave S.01</p>
       </div>
       <div class="col-md-4 col-lg-4 col-sm-12">
         <p>Call us <i class="fas fa-phone-square"></i> (123) 456-7890 - (123) 555-7891</p>
       </div>
     </div>
   </div>
 </div>
 <!-- ========== End toggle top area ========== -->
 <!-- ========== Header ========== -->
 <header>
   <div class="container">
     <!-- ========== Top area toggle link ========== -->
     <div id="toggle-button">
       <i id="plus" class="fas fa-plus "></i>
       <i id="minus" class="fas fa-minus"></i>
     </div>
     <!-- ========== End toggle link ========== -->
     <!-- ========== Form area ========== -->
     <div class="row">
       <div class="header">
         <div class="form-block">
           <ul>
             <li><a href="#" class="form-link" id="sign-up-link"><i class="far fa-user"></i> Sign up</a></li>
             <li><a href="#" class="form-link sign-in-link">Sign in</a></li>
           </ul>
         </div>
         <!-- ========== Sign up modal ========== -->
         <div class="modal fade" id="sign-up-modal">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h4 class="modal-title">Create an <strong>account</strong></h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                   <form action="#">
                     <div class="form-group row">
                       <div class="col-md-4 col-lg-4 col-sm-4">
                           <label for="email" class="inputs-label">Email</label>
                       </div>
                       <div class="col-md-6 col-lg-6 col-sm-6">
                           <input type="text"  id="email" placeholder="Email">
                       </div>
                     </div>
                     <div class="form-group row">
                       <div class="col-md-4 col-lg-4 col-sm-4">
                           <label for="pwd" class="inputs-label">Password</label>
                       </div>
                       <div class="col-md-6 col-lg-6 col-sm-6">
                           <input type="password"  id="pwd" placeholder="Password">
                       </div>
                     </div>
                     <div class="form-group row">
                       <div class="col-md-4 col-lg-4 col-sm-4">
                           <label for="confirmPwd" class="inputs-label">Confirm Password</label>
                       </div>
                       <div class="col-md-6 col-lg-6 col-sm-6">
                           <input type="password"  id="confirmPwd" placeholder="Password">
                       </div>
                     </div>
                     <div class="form-group row">
                       <div class="col-md-4 col-lg-4 col-sm-4"></div>
                       <div class="col-md-5 col-lg-5 col-sm-5">
                           <button type="submit" class="btn">Sign up</button>
                       </div>
                     </div>
                     <div class="row">
                         <div class="col-md-3 col-lg-3 col-sm-3"></div>
                         <div class="col-md-9 col-lg-9 col-sm-9">
                           <p class="sign-in-desc">
                               Already have an account? <a href="#" class="sign-in-link close" data-dismiss="modal">Sign in</a>
                           </p>
                         </div>
                     </div>
                   </form>
               </div>
             </div>
           </div>
         </div>
         <!-- ========== End sign up modal ========== -->
         <!-- ========== Sign in modal ========== -->
         <div class="modal fade" id="sign-in-modal">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h4 class="modal-title">Login to your <strong>account</strong></h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                   <form action="#">
                     <div class="form-group row">
                       <div class="col-md-4 col-lg-4 col-sm-4">
                           <label for="userName" class="inputs-label">Username</label>
                       </div>
                       <div class="col-md-6 col-lg-6 col-sm-6">
                           <input type="text"  id="userName" placeholder="Username">
                       </div>
                     </div>
                     <div class="form-group row">
                       <div class="col-md-4 col-lg-4 col-sm-4">
                           <label for="logPwd" class="inputs-label">Password</label>
                       </div>
                       <div class="col-md-6 col-lg-6 col-sm-6">
                           <input type="password"  id="logPwd" placeholder="Password">
                       </div>
                     </div>
                     <div class="form-group row">
                       <div class="col-md-4 col-lg-4 col-sm-4"></div>
                       <div class="col-md-5 col-lg-5 col-sm-5">
                           <button type="submit" class="btn">Sign in</button>
                       </div>
                     </div>
                     <div class="row">
                         <div class="col-md-3 col-lg-3 col-sm-3"></div>
                         <div class="col-md-9 col-lg-9 col-sm-9">
                           <p class="sign-in-desc">
                               Forgot password? <a href="#" class="reset-link close" data-dismiss="modal">Reset</a>
                           </p>
                         </div>
                     </div>
                   </form>
               </div>
             </div>
           </div>
         </div>
         <!-- ========== End sign in modal ========== -->
         <!-- ========== Reset modal ========== -->
         <div class="modal fade" id="reset-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Reset your <strong>password</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <form action="#">
                    <div class="form-group row">
                      <div class="col-md-4 col-lg-4 col-sm-4">
                          <label for="resetEmail" class="inputs-label">Email</label>
                      </div>
                      <div class="col-md-6 col-lg-6 col-sm-6">
                          <input type="text"  id="resetEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-4 col-lg-4 col-sm-4"></div>
                      <div class="col-md-5 col-lg-5 col-sm-5">
                          <button type="submit" class="btn">Reset password</button>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                          <p class="sign-in-desc">
                              We will send instructions on how to reset your password to your inbox
                          </p>
                        </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>
         </div>
         <!-- ========== End reset modal ========== -->
       </div>
     </div>
     <!-- ========== End form area ========== -->
     <!-- ========== Navigation ========== -->
     <div class="row navigation">
       <div class="col-md-4 col-lg-4 col-sm-8">
         <div class="logo">
             <a href="index.php"><img src="img/logo.png" alt="" class="logo-img" /></a>
             <h1 class="header-title">Flat and trendy bootstrap template</h1>
         </div>
       </div>
       <div class="col-md-1 col-lg-1 col-sm-4 toggle">
         <button class="toggle-button">
             <i class="fas fa-bars"></i>
         </button>
       </div>
       <div class="col-md-7 col-lg-7 col-sm-12 nav-bar">
         <nav>
           <ul>
               <li><a href="index.php" class="active">Home</a></li>
               <li><a href="#">Features</a></li>
               <li><a href="#">Pages</a></li>
               <li><a href="#">Portfolio</a></li>
               <li><a href="#">Blog</a></li>
               <li><a href="contact.php">Contact</a></li>
           </ul>
         </nav>
       </div>
     </div>
     <!-- ========== End navigation ========== -->
   </div>
 </header>
 <!-- ========== End header ========== -->
 <!-- ========== Section features ========== -->
 <section  class="featured">
   <div class="container">
     <div class="row">
       <div class="col-sm-12">
         <!-- ========== SlideShow ========== -->
         <div class="slideShow">
           <div class="slides">
               <img src="img/slides/nivo/bg-1.jpg" alt="" class="slideShow-img" />
               <div class="slideShow-caption">
                 <h2>Awesome <strong>features</strong></h2>
                 <p>
                     Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget.
                     Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                 </p>
                   <a href="#" class="btn slide-caption-link">Read more</a>
               </div>
           </div>
           <div class="slides">
               <img src="img/slides/nivo/bg-2.jpg" alt="" class="slideShow-img" />
               <div class="slideShow-caption">
                   <h2>Fully <strong>responsive</strong></h2>
                   <p>
                       Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget.
                       Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                   </p>
                   <a href="#" class="btn slide-caption-link">Read more</a>
               </div>
           </div>
           <div class="slides">
               <img src="img/slides/nivo/bg-3.jpg" alt="" class="slideShow-img" />
               <div class="slideShow-caption">
                   <h2>Very <strong>customizable</strong></h2>
                   <p>  Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget.
                       Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                   </p>
                   <a href="#" class="btn slide-caption-link">Read more</a>
               </div>
           </div>
               <button type="button" class="prev" onclick="slidesFeatures(-1)">&#10094;</button>
               <button type="button" class="next" onclick="slidesFeatures(1)">&#10095;</button>
         </div>
         <!-- ========== End slideShow ========== -->
       </div>
     </div>
   </div>
 </section>
 <!-- ========== End section features ========== -->
 <!-- ========== Quote section ========== -->
 <section class="quote">
   <div class="container">
     <div class="row">
       <div class="col-md-8 col-lg-8 col-sm-12">
         <h3 class="quote-text">We've created more than <span class="quote-desc"><strong>5000 websites</strong></span> this year!</h3>
       </div>
       <div class="col-md-4 col-lg-4 col-sm-12">
           <button type="button" class="quote-btn">Request a quote</button>
       </div>
     </div>
   </div>
 </section>
 <!-- ========== End quote section ========== -->
 <!-- ========== Content section ========== -->
 <section class="content">
   <div class="container">
     <div class="row">
       <div class="col-md-3 col-lg-3 col-sm-6 scale">
         <div class="icon-block">
             <i class="fas fa-briefcase"></i>
         </div>
         <div class="content-text">
           <h6>Corporate business</h6>
           <p> Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.</p>
           <p><a href="#">Learn more</a></p>
         </div>
       </div>
       <div class="col-md-3 col-lg-3 col-sm-6 scale">
         <div class="icon-block">
             <i class="fas fa-desktop"></i>
         </div>
         <div class="content-text">
           <h6>Responsive theme</h6>
           <p>Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.</p>
           <p><a href="#">Learn more</a></p>
         </div>
       </div>
       <div class="col-md-3 col-lg-3 col-sm-6 scale">
         <div class="icon-block">
             <i class="fas fa-flask"></i>
         </div>
         <div class="content-text">
           <h6>Coded carefully</h6>
           <p>Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.</p>
           <p><a href="#">Learn more</a></p>
         </div>
       </div>
       <div class="col-md-3 col-lg-3 col-sm-6 scale">
         <div class="icon-block">
             <i class="fas fa-coffee"></i>
         </div>
         <div class="content-text">
           <h6>Sit and enjoy</h6>
           <p>Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.</p>
           <p><a href="#">Learn more</a></p>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- ========== End content section ========== -->
 <!-- ========== Projects portfolio section ========== -->
 <section class="projects">
   <div class="container">
     <h4 class="projects-title">Some of recent <strong>works</strong></h4>
     <div class="row thumb">
       <div class="col-md-3 col-lg-3 col-sm-6 column">
           <img src="img/works/thumbs/image-01.jpg" alt="" class="thumb-img" />
           <div class="overlay-img" onclick="openModal(); currentSlide(1)"><i class="fas fa-plus "></i></div>
       </div>
       <div class="col-md-3 col-lg-3 col-sm-6 column">
           <img src="img/works/thumbs/image-02.jpg" alt="" class="thumb-img" />
           <div class="overlay-img" onclick="openModal(); currentSlide(2)"><i class="fas fa-plus "></i></div>
       </div>
       <div class="col-md-3 col-lg-3 col-sm-6 column">
           <img src="img/works/thumbs/image-03.jpg" alt="" class="thumb-img" />
           <div class="overlay-img" onclick="openModal(); currentSlide(3)"><i class="fas fa-plus "></i></div>
       </div>
       <div class="col-md-3 col-lg-3 col-sm-6 column">
           <img src="img/works/thumbs/image-04.jpg" alt="" class="thumb-img" />
           <div class="overlay-img" onclick="openModal(); currentSlide(4)"><i class="fas fa-plus "></i></div>
       </div>
     </div>
     <div class="row thumb">
       <div class="col-md-3 col-lg-3 col-sm-6 column">
           <img src="img/works/thumbs/image-05.jpg" alt="" class="thumb-img" />
           <div class="overlay-img" onclick="openModal(); currentSlide(5)"><i class="fas fa-plus "></i></div>
       </div>
       <div class="col-md-3 col-lg-3 col-sm-6 column">
           <img src="img/works/thumbs/image-06.jpg" alt="" class="thumb-img" />
           <div class="overlay-img" onclick="openModal(); currentSlide(6)"><i class="fas fa-plus "></i></div>
       </div>
       <div class="col-md-3 col-lg-3 col-sm-6 column">
           <img src="img/works/thumbs/image-07.jpg" alt="" class="thumb-img" />
           <div class="overlay-img" onclick="openModal(); currentSlide(7)"><i class="fas fa-plus "></i></div>
       </div>
       <div class="col-md-3 col-lg-3 col-sm-6 column">
           <img src="img/works/thumbs/image-08.jpg" alt="" class="thumb-img" />
           <div class="overlay-img" onclick="openModal(); currentSlide(8)"><i class="fas fa-plus "></i></div>
       </div>
     </div>
   </div>
 </section>
 <!-- ========== End projects portfolio section ========== -->
 <!-- ========== Portfolio slider section ========== -->
 <section id="slideModal" class="slide-modal">
   <div class="container">
     <div class="slide-modal-content">
       <button class="close-modal" onclick="closeModal()">&times;</button>
       <div class="portfolio-slides">
           <img src="img/works/full/image-01-full.jpg" alt="" class="portfolio-slide-img" />
           <div class="slider-caption">
             <h2>The City</h2>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio.
                 Curabitur pellentesque, dolor vel pharetra mollis.
             </p>
           </div>
       </div>
       <div class="portfolio-slides">
           <img src="img/works/full/image-02-full.jpg" alt="" class="portfolio-slide-img" />
           <div class="slider-caption">
             <h2>The Office</h2>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio.
                 Curabitur pellentesque, dolor vel pharetra mollis.
             </p>
           </div>
       </div>
       <div class="portfolio-slides">
           <img src="img/works/full/image-03-full.jpg" alt="" class="portfolio-slide-img" />
           <div class="slider-caption">
             <h2>The Mountains</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio.
                 Curabitur pellentesque, dolor vel pharetra mollis.
             </p>
           </div>
       </div>
       <div class="portfolio-slides">
           <img src="img/works/full/image-04-full.jpg" alt="" class="portfolio-slide-img" />
           <div class="slider-caption">
             <h2>The Mountains</h2>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio.
                 Curabitur pellentesque, dolor vel pharetra mollis.
             </p>
           </div>
       </div>
       <div class="portfolio-slides">
           <img src="img/works/full/image-05-full.jpg" alt="" class="portfolio-slide-img" />
           <div class="slider-caption">
             <h2>The Sea</h2>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio.
                 Curabitur pellentesque, dolor vel pharetra mollis.
             </p>
           </div>
       </div>
       <div class="portfolio-slides">
           <img src="img/works/full/image-06-full.jpg" alt="" class="portfolio-slide-img" />
           <div class="slider-caption">
             <h2>Clouds</h2>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio.
                 Curabitur pellentesque, dolor vel pharetra mollis.
             </p>
           </div>
       </div>
       <div class="portfolio-slides">
           <img src="img/works/full/image-07-full.jpg" alt="" class="portfolio-slide-img" />
           <div class="slider-caption">
             <h2>The Mountains</h2>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio.
                 Curabitur pellentesque, dolor vel pharetra mollis.
             </p>
           </div>
       </div>
       <div class="portfolio-slides">
           <img src="img/works/full/image-08-full.jpg" alt="" class="portfolio-slide-img" />
           <div class="slider-caption">
             <h2>The Dark</h2>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio.
                 Curabitur pellentesque, dolor vel pharetra mollis.
             </p>
           </div>
       </div>
       <button type="button" class="prev-arrow" onclick="slidesPortfolio(-1)">&#10094;</button>
       <button type="button" class="next-arrow" onclick="slidesPortfolio(1)">&#10095;</button>
     </div>
   </div>
 </section>
 <!-- ========== End portfolio slider section ========== -->
 <!-- ========== Clients section ========== -->
 <section class="clients">
   <div class="container">
     <h4 class="clients-title">Very satisfied <strong>clients</strong></h4>
     <div class="arrows-block">
         <button type="button" class="arrow-prev" onclick="rightSlide()">&#10094;</button>
         <button type="button" class="arrow-next" onclick="leftSlide()">&#10095;</button>
     </div>
     <div class="clients-slider">
       <div id="slider-strip">
         <div class="logo-block left-block">
             <a href="#"><img src="img/dummies/clients/client1.png" class="client-logo" alt="" /></a>
         </div>
         <div class="logo-block">
             <a href="#"><img src="img/dummies/clients/client2.png" class="client-logo" alt="" /></a>
         </div>
         <div class="logo-block">
             <a href="#"><img src="img/dummies/clients/client3.png" class="client-logo" alt="" /></a>
         </div>
         <div class="logo-block">
             <a href="#"><img src="img/dummies/clients/client4.png" class="client-logo" alt="" /></a>
         </div>
         <div class="logo-block">
             <a href="#"><img src="img/dummies/clients/client5.png" class="client-logo" alt="" /></a>
         </div>
         <div class="logo-block">
             <a href="#"><img src="img/dummies/clients/client6.png" class="client-logo" alt="" /></a>
         </div>
         <div class="logo-block">
             <a href="#"><img src="img/dummies/clients/client1.png" class="client-logo" alt="" /></a>
         </div>
         <div class="logo-block">
             <a href="#"><img src="img/dummies/clients/client2.png" class="client-logo" alt="" /></a>
         </div>
         <div class="logo-block">
             <a href="#"><img src="img/dummies/clients/client3.png" class="client-logo" alt="" /></a>
         </div>
         <div class="logo-block">
             <a href="#"><img src="img/dummies/clients/client4.png" class="client-logo" alt="" /></a>
         </div>
         <div class="logo-block">
             <a href="#"><img src="img/dummies/clients/client5.png" class="client-logo" alt="" /></a>
         </div>
         <div class="logo-block">
             <a href="#"><img src="img/dummies/clients/client6.png" class="client-logo" alt="" /></a>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- ========== End clients section ========== -->
 <!-- ========== Bottom section ========== -->
 <div class="bottom"></div>
 <!-- ========== Footer ========== -->
 <footer>
   <!-- ========== Top footer ========== -->
   <div class="top-footer">
     <div class="container">
       <div class="row">
         <div class="col-md-3 col-lg-3 col-sm-12">
           <h5 class="widget-header">Browse pages</h5>
           <ul>
             <li class="widget-list"><a href="#">About our company</a></li>
             <li class="widget-list"><a href="#">Our services</a></li>
             <li class="widget-list"><a href="#">Meet our team</a></li>
             <li class="widget-list"><a href="#">Explore our portfolio</a></li>
             <li class="widget-list"><a href="#">Get in touch with us</a></li>
           </ul>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-12">
           <h5 class="widget-header">Important stuff</h5>
           <ul>
             <li class="widget-list"><a href="#">Press release</a></li>
             <li class="widget-list"><a href="#">Terms and conditions</a></li>
             <li class="widget-list"><a href="#">Privacy policy</a></li>
             <li class="widget-list"><a href="#">Career center</a></li>
             <li class="widget-list"><a href="#">Flattern forum</a></li>
           </ul>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-12">
           <h5 class="widget-header">Flickr photostream</h5>
             <a href="#"><img src="img/flickr/flickr-1.jpg" alt="" class="flickr-img" /></a>
             <a href="#"><img src="img/flickr/flickr-2.jpg" alt="" class="flickr-img" /></a>
             <a href="#"><img src="img/flickr/flickr-3.jpg" alt="" class="flickr-img" /></a>
             <a href="#"><img src="img/flickr/flickr-4.jpg" alt="" class="flickr-img" /></a>
             <a href="#"><img src="img/flickr/flickr-5.jpg" alt="" class="flickr-img" /></a>
             <a href="#"><img src="img/flickr/flickr-6.jpg" alt="" class="flickr-img" /></a>
             <a href="#"><img src="img/flickr/flickr-7.jpg" alt="" class="flickr-img" /></a>
             <a href="#"><img src="img/flickr/flickr-8.jpg" alt="" class="flickr-img" /></a>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-12">
           <h5 class="widget-header">Get in touch with us</h5>
             <address>
               <strong>Flattern studio, Pte Ltd</strong><br>
                 Springville center X264, Park Ave S.01<br>
                 Semarang 16425 Indonesia
             </address>
             <p>
                 <i class="fas fa-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                 <i class="fas fa-envelope"></i>  email@domainname.com
             </p>
         </div>
       </div>
     </div>
   </div>
   <!-- ========== End top footer ========== -->
   <!-- ========== Bottom footer ========== -->
   <div class="bottom-footer">
     <div class="container">
       <div class="row">
         <div class="col-sm-6 copyright">
           <p>&copy; Flattern - All right reserved.</p>
           <p> Designed by <a href="#"> BootstrapMade</a></p>
         </div>
         <div class="col-sm-6">
           <ul class="social-block">
             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
             <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
             <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
             <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
   <!-- ========== End bottom footer ========== -->
 </footer>
 <!-- ========== End footer ========== -->
 <!-- ========== Scroll to top ========== -->
 <button type="button" id="toTop"><i class="fas fa-chevron-up"></i></button>


 <!-- ========== JS ========== -->
 <script src="js/jquery.js"></script>
 <script src="js/main.js"></script>
 <script src="js/slider.js"></script>
 <script src="js/bootstrap.js"></script>
 <script src="js/bootstrap.min.js"></script>

</body>
</html>










