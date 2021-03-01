@extends('layouts.app')

@section('title')
    Store Category Page
@endsection

@section('content')
    <!-- START: Page Content -->
    <div class="page-content page-home">
      <!-- START: icon dan title Trend Categories -->
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Categories</h5>
            </div>
          </div>
          <div class="row">
            <!-- START: Icon Gadgets -->
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images//categories-gadgets.svg"
                    alt="icon Gadgets"
                    class="w-100"
                  />
                  <p class="categories-text">Gadgets</p>
                </div>
              </a>
            </div>
            <!-- END: Icon Gadgets -->
            <!-- START: Icon Furniture -->
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images//categories-furniture.svg"
                    alt="icon Furniture"
                    class="w-100"
                  />
                  <p class="categories-text">Furniture</p>
                </div>
              </a>
            </div>
            <!-- END: Icon Furniture -->
            <!-- START: Icon Make Up -->
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images//categories-makeup.svg"
                    alt="icon Make Up"
                    class="w-100"
                  />
                  <p class="categories-text">Make Up</p>
                </div>
              </a>
            </div>
            <!-- END: Icon Make Up -->
            <!-- START: Icon Sneaker -->
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images//categories-sneaker.svg"
                    alt="icon Sneaker"
                    class="w-100"
                  />
                  <p class="categories-text">Sneaker</p>
                </div>
              </a>
            </div>
            <!-- END: Icon Sneaker -->
            <!-- START: Icon Tools -->
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images//categories-tools.svg"
                    alt="icon Tools"
                    class="w-100"
                  />
                  <p class="categories-text">Tools</p>
                </div>
              </a>
            </div>
            <!-- END: Icon Tools -->
            <!-- START: Icon Baby -->
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images//categories-baby.svg"
                    alt="icon Baby"
                    class="w-100"
                  />
                  <p class="categories-text">Baby</p>
                </div>
              </a>
            </div>
            <!-- END: Icon Baby -->
          </div>
        </div>
      </section>
      <!-- END: icon dan title Trend Categories -->
      <!-- START: gambar dan title New Product -->
      <section class="store-new-product">
        <div class="container">
          <!-- START: Title -->
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Product</h5>
            </div>
          </div>
          <!-- END: Title -->
          <div class="row">
            <!-- START: Gambar dan detail Apple Watch -->
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-apple-watch.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Apple Watch 4</div>
                <div class="products-price">$890</div>
              </a>
            </div>
            <!-- END: Gambar dan detail Apple Watch -->
            <!-- START: Gambar dan detail Orange Bogotta -->
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-orange-bogotta.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Orange Bogotta</div>
                <div class="products-price">$94,504</div>
              </a>
            </div>
            <!-- END: Gambar dan detail Orange Bogotta -->
            <!-- START: Gambar dan detail Sofa Ternyaman -->
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-sofa-ternyaman.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Sofa Ternyaman</div>
                <div class="products-price">$1,409</div>
              </a>
            </div>
            <!-- END: Gambar dan detail Sofa Ternyaman -->
            <!-- START: Gambar dan detail Bubuk Maketti -->
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-bubuk-maketti.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Bubuk Maketti</div>
                <div class="products-price">$225</div>
              </a>
            </div>
            <!-- END: Gambar dan detail Bubuk Maketti -->
            <!-- START: Gambar dan detail Tatakan Gelas -->
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-tatakan-gelas.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Tatakan Gelas</div>
                <div class="products-price">$45,184</div>
              </a>
            </div>
            <!-- END: Gambar dan detail Tatakan Gelas -->
            <!-- START: Gambar dan detail Mavic Kawe -->
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-mavic-kawe.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Mavic Kawe</div>
                <div class="products-price">$503</div>
              </a>
            </div>
            <!-- END: Gambar dan detail Mavic Kawe -->
            <!-- START: Gambar dan detail Black Edition Nike -->
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="700"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-black-edition-nike.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Black Edition Nike</div>
                <div class="products-price">$70,482</div>
              </a>
            </div>
            <!-- END: Gambar dan detail Black Edition Nike -->
            <!-- START: Gambar dan detail Monkey Toys -->
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-monkey-toys.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </a>
            </div>
            <!-- END: Gambar dan detail Monkey Toys -->
          </div>
        </div>
      </section>
      <!-- END: gambar dan title  New Product -->
    </div>
    <!-- END: Page Content -->
@endsection