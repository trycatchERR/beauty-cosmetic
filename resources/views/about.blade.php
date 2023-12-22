<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="images/kosmetik1.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="css/tiny-slider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <title>Beauty Cosmetics</title>
  </head>

  <body>
    <!-- Start Header/Navigation -->
    @include('partials.nav')
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <div class="intro-excerpt">
              <h1>About Us</h1>
              <p class="mb-4">Pancarkan dan sempurnakan kecantikanmu dengan berbagai produk kosmetik yang kami hadirkan!</p>
              <p><a href="/products" class="btn btn-secondary me-2">Shop Now</a></p>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="hero-img-wrap">
              <img src="images/fotoKosmetik (12).png" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-6">
            <h2 class="section-title">Why Choose Us</h2>
            <p>Dengan memilih dan mempercayakan kami, maka anda akan mendapatkan berbagai kemudahan, seperti:</p>

            <div class="row my-5">
              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img src="images/truck.svg" alt="Image" class="imf-fluid" />
                  </div>
                  <h3>Pengiriman Cepat &amp; Terpercaya</h3>
                  <p>Beauty Cosmetic menggunakan jasa pengiriman terbaik yang mendukung kecepatan dan keamanan pengiriman pesanan.</p>
                </div>
              </div>

              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img src="images/bag.svg" alt="Image" class="imf-fluid" />
                  </div>
                  <h3>Kemudahan &amp; Keamanan Transaksi</h3>
                  <p>Beauty Cosmetic memberikan kemudahan dalam melakukan transaksi dan sistem keamanan canggih yang terjamin serta terpercaya.</p>
                </div>
              </div>

              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img src="images/support.svg" alt="Image" class="imf-fluid" />
                  </div>
                  <h3>Support Digital Payment</h3>
                  <p>Beauty Cosmetic mendukung berbagai metode pembayaran</p>
                </div>
              </div>

              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img src="images/checklist.png" alt="Image" class="imf-fluid" width="40" height="40" />
                  </div>
                  <h3>Keaslian Produk yang Terjamin</h3>
                  <p>Beauty Cosmetic menjamin keaslian dan keamanan seluruh produk yang dijual dan telah terdaftar pada BPOM.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="img-wrap">
              <img src="images/product2.png" alt="Image" class="img-fluid" width="1000" height="1000"/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start Team Section -->
    <div class="untree_co-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-5 mx-auto text-center">
            <h2 class="section-title">Our Team</h2>
          </div>
        </div>

        <div class="row">
          <!-- Start Column 1 -->
          <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
            <img src="" class="img-fluid mb-5" />
            <h3 clas>
              <a href="#"><span class=""></span></a>
            </h3>
            <span class="d-block position mb-4"></span>
            <p></p>
            <p class="mb-0">
              <a href="#" class="more dark"><span class="icon-arrow_forward"></span></a>
            </p>
          </div>
          <!-- End Column 1 -->

          <!-- Start Column 2 -->
          <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
            <img src="images/tim1.jpg" class="img-fluid mb-5" />

            <h3>Ari Diah</h3>
            <span class="d-block position mb-4">Mahasiswi</span>
            <p>Berpikirlah seperti lautan, yang selalu tenang di permukaan, tetapi selalu bergerak di bawahnya - Paulo Coelho</p>
            <p class="mb-0">
              </p>
          </div>
          <!-- End Column 2 -->

          <!-- Start Column 3 -->
          <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
            <img src="images/tim2.jpg" class="img-fluid mb-5" />
            <h3>Marsyani</h3>
            <span class="d-block position mb-4">Mahasiswi</span>
            <p>Normality is a paved road: It's comfortable to walk, but no flowers grow on it - Van Gogh</p>
            <p class="mb-0">
              </p>
          </div>
          <!-- End Column 3 -->

          <!-- Start Column 4 -->
          <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
            <img src="" class="img-fluid mb-5" />

            <h3 clas>
              <a href="#"><span class=""></span></a>
            </h3>
            <span class="d-block position mb-4"></span>
            <p></p>
            <p class="mb-0">
              <a href="#" class="more dark"> <span class="icon-arrow_forward"></span></a>
            </p>
          </div>
          <!-- End Column 4 -->
        </div>
      </div>
    </div>
    <!-- End Team Section -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section before-footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="section-title">
              <a href="/testimonials">Testimonials</a></h2></div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="testimonial-slider-wrap text-center">
              <div id="testimonial-nav">
                <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
              </div>

              <div class="testimonial-slider">
                <div class="item">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 mx-auto">
                      <div class="testimonial-block text-center">
                        <blockquote class="mb-5">
                          <p>
                            &ldquo;Saya telah menggunakan website ini untuk beberapa bulan, dan saya sangat senang dengan pengalaman berbelanja saya.
							              Mereka memiliki berbagai produk kosmetik yang sangat berkualitas dan beragam. Saya telah menemukan banyak produk favorit saya di sini.&ldquo;</p>
                        </blockquote>

                        <div class="author-info">
                          <div class="author-pic">
                            <img src="images/person-1.png" alt="Maria" class="img-fluid" />
                          </div>
                          <h3 class="font-weight-bold">Maria</h3>
                          <span class="position d-block mb-3">Mahasiswi</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END item -->

                <div class="item">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 mx-auto">
                      <div class="testimonial-block text-center">
                        <blockquote class="mb-5">
                          <p>
                            &ldquo;Produk yang saya beli selalu datang dalam kemasan yang aman, sehingga saya tidak perlu khawatir tentang kerusakan dalam perjalanan pengiriman.
							              Produk-produk yang saya beli dari sini sangat berkualitas, dan saya telah melihat perubahan positif pada kulit saya sejak saya mulai menggunakannya.
							              Saya telah merekomendasikan website ini kepada teman-teman saya, dan saya akan terus berbelanja di sini. Terima kasih banyak!&ldquo;</p>
                        </blockquote>

                        <div class="author-info">
                          <div class="author-pic">
                            <img src="images/person_3.jpg" alt="Marco" class="img-fluid" />
                          </div>
                          <h3 class="font-weight-bold">Marco</h3>
                          <span class="position d-block mb-3">Pengusaha</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END item -->

                <div class="item">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 mx-auto">
                      <div class="testimonial-block text-center">
                        <blockquote class="mb-5">
                          <p>
                            &ldquo;Secara keseluruhan, saya sangat merekomendasikan website ini kepada siapa saja yang mencari produk kosmetik berkualitas dengan pengalaman berbelanja
                            yang menyenangkan. Proses pembelian sangat mudah dan cepat. Saya tidak pernah mengalami masalah saat melakukan pembayaran ataupun pengiriman pesanan.&rdquo;
                          </p>
                        </blockquote>

                        <div class="author-info">
                          <div class="author-pic">
                            <img src="images/person_2.jpg" alt="Jonathan" class="img-fluid" />
                          </div>
                          <h3 class="font-weight-bold">Jonathan</h3>
                          <span class="position d-block mb-3">Pengacara</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END item -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Testimonial Slider -->

    <!-- Start Footer Section -->
    @include('partials.footer')
    <!-- End Footer Section -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
