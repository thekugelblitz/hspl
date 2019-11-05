<footer class="footer">
      <img class="logo-bg logo-footer" src="img/logo.png" alt="logo" style="margin-bottom: -20px;">
      <div class="container">
        <div class="footer-top">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="heading">Hosting</div>
              <ul class="footer-menu">
                <li class="menu-item"><a href="/hosting.php">Shared Hosting</a></li>
                <li class="menu-item"><a href="/reseller.php">Reseller Hosting</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="heading">Support</div>
              <ul class="footer-menu">
                <li class="menu-item"><a href="https://hostingspell.com/clients/clientarea.php">LOGIN</a></li>
                <li class="menu-item"><a href="/knowledgebase.php">Knowledge Base</a></li>
                <li class="menu-item"><a href="/contact.php">Contact Us</a></li>
                <li class="menu-item"><a href="faq.php">FAQ</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="heading">Company</div>
              <ul class="footer-menu">
                <li class="menu-item"><a href="/about.php">About Us</a> </li>
                <li class="menu-item"><a href="/features.php">Features</a></li>
                <li class="menu-item"><a href="/blog.php">Blog</a></li>
                <li class="menu-item"><a href="/legal.php">Legal</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <a><img class="svg logo-footer" src="img/logo.png" alt="logo"></a>
              <div class="copyrigh">©2019 HSPL - All rights reserved</div>
              <div class="soc-icons">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="subcribe news">
        <div class="container">
          <div class="row">
            <form action="#" class="w-100">
              <div class="col-md-6 offset-md-3">
                <div class="general-input">
                  <input type="email" name="email" placeholder="Enter your email address" class="fill-input">
                  <input type="submit" value="SUBSCRIBE" class="btn btn-default-yellow-fill">
                </div>
              </div>
              <div class="col-md-6 offset-md-3 text-center pt-4">
                <p>Subscribe to our newsletter to receive news and updates</p>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <ul class="footer-menu">
                <li class="menu-item by c-grey ml-0">Design With ♥ by
                  <a href="/about.php" target="_blank">HSPL TEAM</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="payment-list">
                <li><p>Payments We Accept</p></li>
                <li><i class="fab fa-cc-paypal"></i></li>
                <li><i class="fab fa-cc-visa"></i></li>
                <li><i class="fab fa-cc-mastercard"></i></li>
                <li><i class="fab fa-cc-apple-pay"></i></li>
                <li><i class="fab fa-cc-discover"></i></li>
                <li><i class="fab fa-cc-amazon-pay"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
	
    <script src="js/gdpr-cookie.js"></script>
    <script>
    $.gdprcookie.init({});
    $(document.body)
    .on("gdpr:show", function() {
    console.log("Cookie dialog is shown");
    })
    .on("gdpr:accept", function() {
    var preferences = $.gdprcookie.preference();
    console.log("Preferences saved:", preferences);
    })
    .on("gdpr:advanced", function() {
    console.log("Advanced button was pressed");
    });
    if ($.gdprcookie.preference("marketing") === true) {
    console.log("This should run because marketing is accepted.");
    }
    </script>
	
<!-- ***** BUTTON GO TOP ***** -->
<a href="#0" class="cd-top"> <i class="fas fa-angle-up"></i> </a>
<!-- Javascript -->

<script src="js/typed.js"></script>
<script src="js/jquery.min.js"></script>
<script defer src="js/jquery.circliful.min.js"></script>
<script defer src="js/idangerous.swiper.min.js"></script>
<script defer src="js/popper.min.js"></script>
<script defer src="js/bootstrap.min.js"></script>
<script defer src="js/jquery.countdown.js"></script>
<script defer src="js/jquery.magnific-popup.min.js"></script>
<script defer src="js/slick.min.js"></script>
<script defer src="js/owl.carousel.min.js"></script>
<script defer src="js/nouislider.js"></script>

<!-- Dedicated -->
<script defer src="js/mixitup.min.js"></script>
<script defer src="js/mixitup.multifilter.min.js"></script>
<script defer src="js/mixevents.js"></script>
<script src="js/filter.js"></script>
<!-- /Dedicated -->

<script defer src="js/isotope.min.js"></script>
<script src="js/wow.min.js"></script>
<script>new WOW().init();</script>

<!-- StaticSidebar -->
<script defer src="js/sidebar.js"></script>
<!-- /StaticSidebar -->

<script src="js/covervid.min.js"></script>
<script defer src="js/scripts.js"></script>

<script>$('.covervid-video').coverVid(1920, 1080);</script>

<!-- FrontPageSliderTyping -->
<script>
var typed3 = new Typed('#typed3', {
strings: ["Premium hardware.", "High Performance.", "Cheapest Price."],
typeSpeed: 50,
backSpeed: 20,
smartBackspace: true,
loop: true
});
var typed3 = new Typed('#typed4', {
strings: ["Premium hardware.", "High Performance.", "Cheapest Price."],
typeSpeed: 50,
backSpeed: 20,
smartBackspace: true,
loop: true
});
</script>
<!-- /FrontPageSliderTyping -->
</body>
</html>