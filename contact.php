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
      <i id="plus" class="fas fa-plus"></i>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Pages</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="contact.php" class="active">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- ========== End navigation ========== -->
  </div>
</header>
<!-- ========== End header ========== -->
<!-- ========== Headline section ========== -->
<section class="headline">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-6">
        <h2 class="headline-title">Reviews</h2>
      </div>
      <div class="col-md-6 col-lg-6 col-sm-6">
        <ul class="headline-nav">
          <li><a href="#"><i class="fas fa-home"></i></a> <i class="fas fa-angle-right"></i></li>
          <li>Reviews</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- ========== End headline section ========== -->
<!-- ========== Contact content section ========== -->
<section class="contact-content">
  <div class="container">

        <?php require_once 'php/select_data.php'; ?>

        <?php if($result) : ?>

        <div class="row">

        <?php foreach ($result as $item) : ?>

        <div class="col-md-6 col-lg-6 col-sm-12 margintop">
          <div class="row review-list">
          <div class="col-md-2 col-lg-2 col-sm-2">
            <h5>User:</h5>
          </div>
          <div class="col-md-10 col-lg-10 col-sm-10">
            <p><?php echo $item['name']; ?></p>
          </div>
          <div class="col-md-2 col-lg-2 col-sm-2">
            <h5>Rate:</h5>
          </div>
          <div class="col-md-10 col-lg-10 col-sm-10">
            <p class="rate-desc">
                <?php echo $item['rate'].'.0'; ?>
                <span>
                  <?php for ($i = 1; $i <= $item['rate']; $i ++) : ?>
                  <i class="fas fa-star"></i>
                  <?php endfor; ?>
                </span>
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-sm-2">
            <h5>Review:</h5>
          </div>
          <div class="col-md-10 col-lg-10 col-sm-10">
            <p class="message-desc"><?php echo $item['message']; ?></p>
          </div>
          </div>
        </div>

        <?php endforeach; ?>

        </div>

        <?php endif; ?>


    <div class="row review-form">
        <div class="col-md-12 col-lg-12 col-sm-12 text-center success"></div>
        <div class="col-md-12 col-lg-12 col-sm-12 text-center error"></div>
      <div class="col-md-12 col-lg-12 col-sm-12 review-block">
        <h4 class="contact-title">How was your experience in our website</h4>
        <form method="post" id="reviewForm">
          <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
              <input type="text" name="name" class="contact required" id="name" placeholder="Your Name" />
              <div class="validate" id="errName"></div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
              <input type="text" class="contact required" name="contact-email" id="contact-email" placeholder="Your Email" />
              <div class="validate" id="errEmail"></div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                <label for="star1" class="star-label" data-target="1"><i class="fas fa-star"></i></label>
                <input type="radio" name="rate" value="1" id="star1" class="star" />
                <label for="star2" class="star-label" data-target="2"><i class="fas fa-star"></i></label>
                <input type="radio" name="rate" value="2" id="star2" class="star" />
                <label for="star3" class="star-label" data-target="3"><i class="fas fa-star"></i></label>
                <input type="radio" name="rate" value="3" id="star3" class="star" />
                <label for="star4" class="star-label" data-target="4"><i class="fas fa-star"></i></label>
                <input type="radio" name="rate" value="4" id="star4" class="star" />
                <label for="star5" class="star-label" data-target="5"><i class="fas fa-star"></i></label>
                <input type="radio" name="rate" value="5" id="star5" class="star" />
                <div class="validate" id="errRate"></div>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 form-group">
              <textarea class="contact message required" name="message" id="message"  placeholder="Message"></textarea>
              <div class="validate" id="errMessage"></div>
              <p class="text-center">
                <button class="btn contact-btn" id="reviewBtn" type="submit">Submit review</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
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
          <p>Designed by <a href="#"> BootstrapMade</a></p>
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
<script src="js/review.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>