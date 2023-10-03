</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

<section class="h2 text-center revealright" id="validation" style="font-family: 'DM Serif Display', serif; font-size: 50px; color: #c24822;">
  Contact Us
</section>

<div class="container-fluid">
  <footer sytle="padding-top:3rem;">
    <div class="row justify-content-end">
      <div class="col-6 col-md-2 mb-3">
        <h5>Social</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="assets/img/twit.png" class="img-fluid" width="25px" alt=""> Twitter</a></li>
          <li class="nav-item mb-2"><a href="https://instagram.com/copia.otg" target="_blank" class="nav-link p-0 text-muted"><img src="assets/img/instagram.png" class="img-fluid" width="25px" alt=""> Instagram</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="assets/img/facebook.png" class="img-fluid" width="25px" alt=""> Facebook</a></li>
          <li class="nav-item mb-2"><a href="https://wa.me/+6285771235434" target="_blank" class="nav-link p-0 text-muted"><img src="assets/img/whatapp.png" class="img-fluid" width="25px" alt=""> Whatsapp</a></li>
          <li class="nav-item mb-2"><a href="https://www.tiktok.com/@copiaonthegowhat" target="_blank" class="nav-link p-0 text-muted"><img src="assets/img/tiktok.png" class="img-fluid" width="25px" alt=""> Tiktok</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>E-commerce</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="https://shp.ee/k5inv7e" target="_blank" class="nav-link p-0 text-muted"><img src="assets/img/shoope.png" class="img-fluid" width="95px" alt=""></a></li>
          <li class="nav-item mb-2"><a href="https://tokopedia.link/l7fDw0lziDb" target="_blank" class="nav-link p-0 text-muted"><img src="assets/img/tokped.png" class="img-fluid" width="110px" alt=""></a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Store</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="assets/img/aeon.png" class="img-fluid" width="95px" alt=""></a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="assets/img/lotte.png" class="img-fluid" width="95px" alt=""></a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="assets/img/hero.png" class="img-fluid" width="95px" alt=""></a></li>
        </ul>
      </div>


    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p><img src="assets/img/logo1.png" class="img-fluid" width="100px" alt=""> &copy; <?= date('Y'); ?> Company, Inc. All rights reserved.</p>
    </div>
  </footer>
</div>

<div class="b-example-divider"></div>

<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="<?= base_url('assets/') ?>vendors/@popperjs/popper.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/bootstrap/bootstrap.min.js"></script>
<script src=" vendors/is/is.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="<?= base_url('assets/') ?>vendors/fontawesome/all.min.js"></script>
<script src="<?= base_url('assets/') ?>js/theme.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet" />

<script type="text/javascript">
  function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;

      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }

  window.addEventListener("scroll", reveal);
</script>
<script type="text/javascript">
  function reveal() {
    var reveals = document.querySelectorAll(".revealtop");

    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;

      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }

  window.addEventListener("scroll", reveal);
</script>
<script type="text/javascript">
  function reveal() {
    var reveals = document.querySelectorAll(".revealright");

    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;

      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }

  window.addEventListener("scroll", reveal);
</script>
</body>

</html>