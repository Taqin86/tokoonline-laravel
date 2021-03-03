<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- START: Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img
              src="/images/admin.png"
              alt="Logo"
              class="my-4"
              style="max-width: 150px"
            />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="/dashboard.html"
              class="list-group-item list-group-item-action"
            >
              Dashboard
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action"
            >
              Products
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action"
            >
              Categories
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action"
            >
              Transactions
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action"
            >
              Users
            </a>
            <a
              href="/index.html"
              class="list-group-item list-group-item-action"
            >
              Sign Out
            </a>
          </div>
        </div>
        <!-- END: Sidebar -->
        <!-- START: Page Content -->
        <div id="page-content-wrapper">
          <!-- START: Navigation Bar -->
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <!-- START: Menu Humberger -->
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- START: Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                    >
                      <img
                        src="/images/icon-user.png"
                        alt=""
                        class="rounded-circle mr-2 profile-picture"
                      />
                      Hi, Rizqi
                    </a>
                    <div class="dropdown-menu">
                      <a href="/" class="dropdown-item">Log Out</a>
                    </div>
                  </li>
                </ul>
                <!-- END: Desktop Menu -->
                <!-- START: Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Hi, Rizqi</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block">Cart</a>
                  </li>
                </ul>
                <!-- END: Mobile Menu -->
              </div>
              <!-- END: Menu Humberger -->
            </div>
          </nav>
          <!-- END: Navigation Bar -->
          
        {{-- content --}}
        @yield('content')

        </div>
        <!-- END: Page Content -->
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- START:Menu Toggle -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <!-- END:Menu Toggle -->
    @stack('addon-script')
  </body>
</html>
