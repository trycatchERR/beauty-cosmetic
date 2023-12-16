<?php
function format_rp($number)
{
    return 'Rp ' . number_format($number, 0, '.', '.');
}
?>

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
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
      <div class="container">
        <a class="navbar-brand" href="/">Beauty Cosmetics<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
          <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li><a class="nav-link" href="/products">Product</a></li>
            <li><a class="nav-link" href="/about">About us</a></li>
            <li><a class="nav-link" href="/contact">Contact us</a></li>
          </ul>

          <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            <li>
              <a class="nav-link" href="/login"><img src="images/user.svg" /></a>
            </li>
            <li>
              <a class="nav-link" href="/cart"><img src="images/cart.svg" /></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <div class="intro-excerpt">
              <h1>Beauty Inside <span clsas="d-block">& Outside</span></h1>
              <p class="mb-4">Pancarkan dan sempurnakan kecantikanmu dengan berbagai produk kosmetik yang kami hadirkan!</p>
              <p><a href="/products" class="btn btn-secondary me-2">Shop Now</a></p>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="hero-img-wrap">
              <img src="images/fotoKosmetik (12).png" class="img-fluid" float="right"/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
      <div class="container">
        <div class="row">
          <!-- Start Column 1 -->
          <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
            <h2 class="mb-4 section-title">Beauty begins here.</h2>
            <p class="mb-4">Unlock your shine, be more attractive.</p>
            <p><a href="/products" class="btn">Explore</a></p>
          </div>
          <!-- End Column 1 -->

          <!-- Start Column Product -->
        @foreach ($products as $product)
          <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="/products/{{ $product->id }}">
              <img src="{{ $product->image }}" class="img-fluid product-thumbnail" width="250" height="250"/>
              <h3 class="product-title">{{ $product->name }}</h3>
              <strong class="product-price">{{ format_rp($product->price) }}</strong>

              <form action="/carts" method="POST" class="icon-cross">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                <button type="submit" style="border: none; padding: 0; margin: 0; background: none;">
                  <img src="images/cross.svg" class="img-fluid" />
                </button>
              </form>
            </a>
          </div>
        @endforeach
          <!-- End Column Product -->

        </div>
      </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
      <div class="container">
        <div class="row justify-content-between">
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
              <img src="images/fotoKosmetik (2).png" alt="Image" class="img-fluid" width="1000" height="1000"/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="imgs-grid">
              <div class="grid grid-1"><img src="images/fotoKosmetik (12).png" alt="Untree.co" /></div>
              <div class="grid grid-3"><img src="images/fotoKosmetik (12).png" alt="Untree.co" /></div>
            </div>
          </div>
          <div class="col-lg-5 ps-lg-5">
            <h2 class="section-title mb-4">Kami Membantu Anda Menemukan Produk yang Paling Tepat untuk Membuat Anda Bersinar</h2>
            <p>Beauty Cosmetic memberikan layanan kepada Anda untuk menemukan produk kosmetik yang sesuai dengan kondisi kulit dengan detail deskripsi produk yang lengkap</p>

            <ul class="list-unstyled custom-list my-4">
              <li>Beauty Cosmetic menampilkan pilihan produk yang sesuai dengan kebutuhan</li>
              <li>Beauty Cosmetic menampilkan deskripsi setiap produk secara detail</li>
              <li>Beauty Cosmetic menjamin keaslian dan keamanan produk dengan menjual produk kosmetik yang terdaftar pada BPOM</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    <div class="popular-product">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="d-flex">
              <div class="thumbnail">
                <img src="images/skincare7.png" alt="Image" class="img-fluid" />
              </div>
              <div class="pt-3">
                <h3>pH Restore Hair Rinsing Vinegar</h3>
                <p>Cuka rambut khusus yang menetralkan & menyeimbangkan tingkat pH
					untuk mencegah ketombe, gatal dan rambut rontok.</p>
                <p><a href="/cart" class="btn btn-secondary me-2">Buy Now</a></p>
              </div>
            </div>
          </div>

          <div class="col-12  col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="d-flex">
              <div class="thumbnail">
                <img src="images/product4.png" alt="Image" class="img-fluid" />
              </div>
              <div class="pt-3">
                <h3>Sunscreen Gel SPF 50+ PA++++</h3>
                <p>Gel Tabir Surya dengan SPF 50+ PA++++ & teknologi Encapsulated
					UV Filter yang memberikan perlindungan maksimal dari sinar UVA & UVB.</p>
                <p><a href="/cart" class="btn btn-secondary me-2">Buy Now</a></p>
              </div>
            </div>
          </div>

          <div class=" col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="d-flex">
              <div class="thumbnail">
                <img src="images/product51.png" alt="Image" class="img-fluid" />
              </div>
              <div class="pt-3">
                <h3>Lipvocado Vegan Lip Treatment Tint</h3>
                <p>100% lip balm vegan berwarna dengan hasil akhir noda alami, diresapi dengan
					Avocado Oil & Hyaluronic Acid untuk melembabkan & mengurangi garis-garis halus pada bibir.<p><a href="/cart" class="btn btn-secondary me-2">Buy Now</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div >
    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="section-title">
              <a href="/testimonials">Testimonials</a></h2>
          </div>
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
                          <div class="author-pic ">
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
                            <im g src="images/person_3.jpg" alt="Marco" class="img-fluid" />
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
                            &ldquo;Secara keseluruhan, saya sangat merekomendasikan website ini kepada siapa saja yang mencari produk kosmetik berkualitas dengan pengalaman
							berbelanja yang menyenangkan. Proses pembelian sangat mudah dan cepat. Saya tidak pernah mengalami masalah saat melakukan pembayaran ataupun pengiriman
							pesanan.&rdquo;
                          </p>
                        </blockquote>

                        <div class="author-info">
                          <div class ="author-pic">
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
    <footer class="footer-section">
      <div class="container relative">
        <div class="row">
          <div class="col-lg-8"></div>
        </div>

        <div class="row g-5 mb-5">
          <div class="col-lg-4">
            <div class="mb-4 footer-logo-wrap">
              <a href="#" class="footer-logo">Beauty Cosmetics<span>.</span></a>
            </div>
            <p class="mb-4">Pancarkan dan sempurnakan kecantikanmu dengan berbagai produk kosmetik yang kami hadirkan!. Temukan kami juga di:</p>

            <ul class="list-unstyled custom-social">
              <li>
                <a href="https://www.facebook.com/"><span class="fa fa-brands fa-facebook-f"></span></a>
              </li>
              <li>
                <a href="https://twitter.com/"><span class="fa fa-brands fa-twitter"></span></a>
              </li>
              <li>
                <a href="https://www.instagram.com/"><span class="fa fa-brands fa-instagram"></span></a>
              </li>
              <li>
                <a href="https://www.tiktok.com/"><span class="fa fa-brands fa-tiktok"></span></a>
              </li>
            </ul>
          </div>

          <div class="col-lg-8">
            <div class="row links-wrap">
              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
				  <li><a href="/login">Login</a></li>
                  <li><a href="/products">Product</a></li>
                </ul>
              </div>

			  <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
				  <li><a href="/cart">Cart</a></li>
                  <li><a href="/checkout">Checkout</a></li>
                </ul>
              </div>

			  <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
				  <li><a href="/testimonials">Testimonials</a></li>
                  <li><a href=			  "/about">About us</a></li>
                </ul>
              </div>

			  <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
				  <li><a href="/contact">Contact us</a></li>
                </ul>
              </div>


        <div class="border-top copyright">
          <div class="row pt-4">
            <div class="col-lg-6">
              <p class="mb-2 text-center text-lg-start">
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                . All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a		> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>
                </p>
            </div>

            <div class="col-lg-6 text-center text-lg-end">
              <ul class="list-unstyled d-inline-flex ms-auto">
                <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer Section -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
