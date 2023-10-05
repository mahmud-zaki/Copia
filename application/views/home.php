<style>
  .reveal {
    position: relative;
    transform: translateZ(150px);
    opacity: 0;
    transition: 2s all ease;
  }

  .reveal.active {
    transform: translateY(0);
    opacity: 1;
  }

  .revealtop {
    position: relative;
    transform: translateX(150px);
    opacity: 0;
    transition: 1s all ease;
  }

  .revealtop.active {
    transform: translateY(0);
    opacity: 1;
  }

  .revealright {
    position: relative;
    transform: translateY(0);
    opacity: 0;
    transition: 1s all ease;
  }

  .revealright.active {
    transform: translateX(15px);
    opacity: 1;
  }

  .video-background-holder {
    position: relative;
    background-color: black;
    height: calc(99.8vh - 85px);
    min-height: 15rem;
    width: 100%;
    overflow: hidden;
  }

  .video-background-holder video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: 0;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
  }

  .video-background-content {
    position: relative;
    z-index: 1;
  }

  .video-background-overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 50%;
    width: 100%;
    background-color: white;
    opacity: 1;
    z-index: 2;
  }
</style>
<section class="container-fluid" id="home">
  <div class="video-background-holder">
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="assets/video/iklan.mp4" type="video/mp4">
    </video>
  </div>
</section>
<section style="margin-top: 5em;" id="feature" class="row">
  <div class="container-fluid">
    <div class="h2 text-center revealtop" style="font-family: 'DM Serif Display', serif; font-size: 50px; color: #c24822;">
      Our Product
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" style="background-color: grey rgba(0,0,0,0.61);" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php $total_produk = count($produk);
        ?>
        <?php for ($i = 0; $i < $total_produk; $i += 4) : ?>
          <div class="carousel-item <?= $i === 0 ? 'active' : ''; ?>">
            <div class="container-fluid">
              <div class="row text-center">
                <?php for ($j = $i; $j < $i + 4 && $j < $total_produk; $j++) : ?>
                  <div class="col-6 col-md-3 mb-3 pt-3">
                    <img src="<?= base_url('assets/img/produk/') . $produk[$j]['gambar']; ?>" style="width: 80%; border-radius: 5%; box-shadow: 7px 0px 21px -3px rgba(0,0,0,0.61);
                                -webkit-box-shadow: 7px 0px 21px -3px rgba(0,0,0,0.61); -moz-box-shadow: 7px 0px 21px -3px rgba(0,0,0,0.61);" class="img-fluid" alt="">
                    <?php if (empty($produk[$j]['link_prod'])) : ?>
                    <?php else : ?>
                      <div class="mt-4">
                        <a href="<?= $produk[$j]['link_prod'] ?>" target="_blank">
                          <img src="assets/img/shoope.png" class="img-fluid" width="200px" alt="">
                        </a>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php endfor; ?>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<section style="margin-top: 7em; margin-bottom: 5em;" class="row">
  <div class="container-fluid">
    <div class="h2 text-center reveal" style="font-family: 'DM Serif Display', serif; font-size: 50px; color: #c24822;">
      Testimonial
    </div>
    <div id="testimoni" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-4">
                <img src="assets/img/testi1.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-sm-4">
                <img src="assets/img/testi1.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-sm-4">
                <img src="assets/img/testi1.jpeg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-4">
                <img src="assets/img/testi1.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-sm-4">
                <img src="assets/img/testi1.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-sm-4">
                <img src="assets/img/testi1.jpeg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-4">
                <img src="assets/img/testi1.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-sm-4">
                <img src="assets/img/testi1.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-sm-4">
                <img src="assets/img/testi1.jpeg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#testimoni" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimoni" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>