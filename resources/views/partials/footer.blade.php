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
                @if (!auth()->check())
                <li><a href="/login">Login</a></li>
                @else
                <li><a href="/">Home</a></li>
                @endif
                <li><a href="/products">Products</a></li>
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
