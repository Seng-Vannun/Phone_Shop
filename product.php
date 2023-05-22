<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seng Laptop Product</title>
    <!-- fontawesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4 fixed-top">
      <div class="container">
        <a
          class="navbar-brand d-flex justify-content-between align-items-center order-lg-0"
          href="index.html"
        >
          <img src="Product_img/logo.png" alt="site icon" />
          <span class="text-uppercase fw-lighter ms-2" style="color: white"
            >Seng Laptop</span
          >
        </a>

        <div class="order-lg-2 nav-btns">
          <button
            type="button"
            class="btn position-relative"
            style="color: white"
          >
            <i class="fa fa-shopping-cart"></i>
            <span
              class="position-absolute top-0 start-100 translate-middle badge bg-primary"
              >5</span
            >
          </button>
          <button
            type="button"
            class="btn position-relative"
            style="color: white"
          >
            <i class="fa fa-heart"></i>
            <span
              class="position-absolute top-0 start-100 translate-middle badge bg-primary"
              >2</span
            >
          </button>
          <button
            type="button"
            class="btn position-relative"
            style="color: white"
          >
            <i class="fa fa-search"></i>
          </button>
        </div>

        <button
          class="navbar-toggler border-0"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navMenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-lg-1" id="navMenu">
          <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item px-2 py-2">
              <a
                class="nav-link text-uppercase text-light"
                href="index.html"
                style="color: white"
                >home</a
              >
            </li>
            <li class="nav-item px-2 py-2">
              <a
                class="nav-link text-uppercase text-light"
                href="#"
                style="color: white"
                >product</a
              >
            </li>
            <li class="nav-item px-2 py-2">
              <a
                class="nav-link text-uppercase text-light"
                href="index.html "
                style="color: white"
                >Product specials</a
              >
            </li>
            <li class="nav-item px-2 py-2">
              <a
                class="nav-link text-uppercase text-light"
                href="index.html "
                style="color: white"
                >blogs</a
              >
            </li>
            <li class="nav-item px-2 py-2">
              <a
                class="nav-link text-uppercase text-light"
                href="index.html "
                style="color: white"
                >about us</a
              >
            </li>
            <li class="nav-item px-2 py-2 border-0">
              <a class="nav-link text-uppercase text-light" href="index.html"
                >popular</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- collection -->
    <section id="collection" class="py-5">
      <div class="container">
        <div class="title text-center">
          <h2 class="position-relative d-inline-block">New Collection</h2>
        </div>

        <div class="row g-0">
          <div
            class="d-flex flex-wrap justify-content-center mt-5 filter-button-group"
          >
            <button
              type="button"
              class="btn m-2 text-dark active-filter-btn"
              data-filter="*"
            >
              All
            </button>
            <button
              type="button"
              class="btn m-2 text-dark"
              data-filter=".laptop"
            >
              Laptop
            </button>
            <button
              type="button"
              class="btn m-2 text-dark"
              data-filter=".headphone"
            >
              Headphone
            </button>
            <button
              type="button"
              class="btn m-2 text-dark"
              data-filter=".mouse"
            >
              Mouse
            </button>
            <button
              type="button"
              class="btn m-2 text-dark"
              data-filter=".monitor"
            >
              Monitor
            </button>
          </div>

          <div class="collection-list mt-4 row gx-0 gy-3">
            <div class="col-md-6 col-lg-4 col-xl-3 p-2 laptop">
              <div class="collection-img position-relative">
                <img src="Product_img/asus_laptop1.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">ASUS ROG STRIX LAPTOP</p>
                <span class="fw-bold">$ 2,499.00<br /></span>
                <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat laptop">
              <div class="collection-img position-relative">
                <img src="Product_img/asus_laptop2.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Asus Laptop 2</p>
                <span class="fw-bold">$ 2000.00<br /></span>
                <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 p-2 laptop">
              <div class="collection-img position-relative">
                <img src="Product_img/razer_latop1.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Razer Blade 15</p>
                <span class="fw-bold">$ 2999.99<br /></span>
                <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 p-2 laptop">
              <div class="collection-img position-relative">
                <img src="Product_img/razer_laptop2.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Razer Blade 15</p>
                <span class="fw-bold"
                  >$ 2499.99<br />
                  <a href="#" class="btn btn-primary mt-3">Add to Cart</a></span
                >
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 p-2 headphone">
              <div class="collection-img position-relative">
                <img src="Product_img/logitech_headphone1.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Logiteh Headphone 1</p>
                <span class="fw-bold">$ 45.50<br />
                  <a href="#" class="btn btn-primary mt-3">Add to Cart</a></span</span>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 p-2 headphone">
              <div class="collection-img position-relative">
                <img src="Product_img/logitech_headphone2.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Logitech Headphone</p>
                <span class="fw-bold">$ 99.99<br />
                  <a href="#" class="btn btn-primary mt-3">Add to Cart</a></span</span>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 p-2 headphone">
              <div class="collection-img position-relative">
                <img src="Product_img/msi_headphone1.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">MSI Headphone 1</p>
                <span class="fw-bold">$ 39.99<br />
                  <a href="#" class="btn btn-primary mt-3">Add to Cart</a></span</span>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 p-2 headphone">
              <div class="collection-img position-relative">
                <img src="Product_img/msi_headphone2.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">MSI Headphone 2</p>
                <span class="fw-bold">$ 45.50<br />
                  <a href="#" class="btn btn-primary mt-3">Add to Cart</a></span</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2 headphone">
              <div class="collection-img position-relative">
                <img src="Product_img/razer_headphone1.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Razer Headphone 1</p>
                <span class="fw-bold">$ 95.50<br />
                  <a href="#" class="btn btn-primary mt-3">Add to Cart</a></span</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2 headphone">
              <div class="collection-img position-relative">
                <img src="Product_img/razer-headphone2.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Razer Headphone 2</p>
                <span class="fw-bold">$ 45.50<br />
                  <a href="#" class="btn btn-primary mt-3">Add to Cart</a></span</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2 mouse">
              <div class="collection-img position-relative">
                <img src="Product_img/logitech_mouse1.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Logitech Light Speed</p>
                <span class="fw-bold">$ 95.50<br />
                  <a href="#" class="btn btn-primary mt-3">Add to Cart</a></span</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2 mouse">
              <div class="collection-img position-relative">
                <img src="Product_img/logitech_mouse2.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Logitech G35</p>
                <span class="fw-bold">$ 45.50<br />
                  <a href="#" class="btn btn-primary mt-3">Add to Cart</a></span</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2 monitor">
              <div class="collection-img position-relative">
                <img src="Product_img/monitor1.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Msi Monitor</p>
                <span class="fw-bold">$ 150.00<br />
                  <a href="#" class="btn btn-primary mt-3">Add to Cart</a></span</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2 monitor">
              <div class="collection-img position-relative">
                <img src="Product_img/monitor2.png" class="w-100" />
              </div>
              <div class="text-center">
                <div class="rating mt-3">
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                  <span class="text-primary"><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Msi Monitor</p>
                <span class="fw-bold">$ 245.50<br />
                  <a href="#" class="btn btn-primary mt-3">Add to Cart</a></span</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of collection -->
    <!-- footer -->
    <footer class="bg-dark py-5">
      <div class="container">
        <div class="row text-white g-4">
          <div class="col-md-6 col-lg-3">
            <a
              class="text-uppercase text-decoration-none brand text-white"
              href="index.html"
              >Seng Laptop</a
            >
            <p class="text-white text-muted mt-3">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              mollitia quisquam veniam odit cupiditate, ullam aut voluptas velit
              dolor ipsam?
            </p>
          </div>

          <div class="col-md-6 col-lg-3">
            <h5 class="fw-light">Links</h5>
            <ul class="list-unstyled">
              <li class="my-3">
                <a href="#" class="text-white text-decoration-none text-muted">
                  <i class="fas fa-chevron-right me-1"></i> Home
                </a>
              </li>
              <li class="my-3">
                <a href="#" class="text-white text-decoration-none text-muted">
                  <i class="fas fa-chevron-right me-1"></i> Collection
                </a>
              </li>
              <li class="my-3">
                <a href="#" class="text-white text-decoration-none text-muted">
                  <i class="fas fa-chevron-right me-1"></i> Blogs
                </a>
              </li>
              <li class="my-3">
                <a href="#" class="text-white text-decoration-none text-muted">
                  <i class="fas fa-chevron-right me-1"></i> About Us
                </a>
              </li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <h5 class="fw-light mb-3">Contact Us</h5>
            <div
              class="d-flex justify-content-start align-items-start my-2 text-muted"
            >
              <span class="me-3">
                <i class="fas fa-map-marked-alt"></i>
              </span>
              <span class="fw-light">
                Rich Street, Phnom Penh, OG 000, Cambodia
              </span>
            </div>
            <div
              class="d-flex justify-content-start align-items-start my-2 text-muted"
            >
              <span class="me-3">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="fw-light"> Seng_Laptop.support@gmail.com </span>
            </div>
            <div
              class="d-flex justify-content-start align-items-start my-2 text-muted"
            >
              <span class="me-3">
                <i class="fas fa-phone-alt"></i>
              </span>
              <span class="fw-light"> +1235 123 123</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <h5 class="fw-light mb-3">Follow Us</h5>
            <div>
              <ul class="list-unstyled d-flex">
                <li>
                  <a
                    href="#"
                    class="text-white text-decoration-none text-muted fs-4 me-4"
                  >
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white text-decoration-none text-muted fs-4 me-4"
                  >
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white text-decoration-none text-muted fs-4 me-4"
                  >
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white text-decoration-none text-muted fs-4 me-4"
                  >
                    <i class="fab fa-pinterest"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer -->

    <!-- jquery -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
  </body>
</html>
