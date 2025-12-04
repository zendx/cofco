<!DOCTYPE html>
<html lang="en">
<?php $wsi = plugin_dir_url(__FILE__) . 'assets/'; $wsi_path = plugin_dir_path(__FILE__) . 'assets/'; ?>

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>COFCO CAPITAL | Registration</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <style>
        :root {
            --adminuiux-content-font: "Open Sans", sans-serif;
            --adminuiux-content-font-weight: 400;
            --adminuiux-title-font: "Lexend", sans-serif;
            --adminuiux-title-font-weight: 600;
        }
    </style>

    <!-- CSS + JS -->
    <link href="assets/css/app435e.css?1096aad991449c8654b2" rel="stylesheet">
    <script defer src="assets/js/app435e.js?1096aad991449c8654b2"></script>
</head>

<body class="main-bg main-bg-opac main-bg-blur adminuiux-sidebar-fill-white adminuiux-sidebar-boxed theme-blue roundedui"
      data-theme="theme-blue"
      data-sidebarfill="adminuiux-sidebar-fill-white"
      data-bs-spy="scroll"
      data-bs-target="#list-example"
      data-bs-smooth-scroll="true"
      tabindex="0">

    <!-- Page Loader -->
    <div class="pageloader">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center text-center h-100">
                <div class="col-12 mb-auto pt-4"></div>
                <div class="col-auto">
                    <img src="assets/img/logo-main.png" alt="" class="height-60 mb-3">
                    <p class="h6 mb-0">COFCO CAPITAL</p>
                    <p class="h3 mb-4">LOADING</p>
                    <div class="loader10 mb-2 mx-auto"></div>
                </div>
                <div class="col-12 mt-auto pb-4">
                    <p class="text-secondary">Please wait, we are preparing awesome things...</p>
                </div>
            </div>
        </div>
    </div>

    <main class="flex-shrink-0 pt-0 h-100">
        <div class="container-fluid">
            <div class="auth-wrapper">

                <div class="row">
                    <!-- Registration Form -->
                    <div class="col-12 col-md-6 col-xl-4 minvheight-100 d-flex flex-column px-0">
                        <div class="h-100 py-3 px-3">
                            <div class="row h-100 align-items-center justify-content-center">
                                <div class="col-11 col-sm-8 col-md-11 col-xl-11 col-xxl-10 login-box">

                                    <div class="text-center mb-4">
                                        <h1 class="mb-3">Let's get started 👍</h1>
                                        <p class="text-secondary">Provide your details</p>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="namef" placeholder="Enter first name">
                                                <label for="namef">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="namel" placeholder="Enter last name">
                                                <label for="namel">Last Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="emailadd" placeholder="Enter email address">
                                        <label for="emailadd">Email Address</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="form-floating maxwidth-100">
                                            <select class="form-select" id="code">
                                                <option value="+1">+1</option>
                                                <option value="+44" selected>+44</option>
                                                <option value="+66">+66</option>
                                                <option value="+91">+91</option>
                                            </select>
                                            <label for="code">Code</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="phonen" placeholder="Phone number">
                                            <label for="phonen">Phone Number</label>
                                        </div>
                                    </div>

                                    <div class="position-relative">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="checkstrength" placeholder="Password">
                                            <label for="checkstrength">Password</label>
                                        </div>
                                        <button class="btn btn-square btn-link text-theme-1 position-absolute end-0 top-0 mt-2 me-2">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>

                                    <div class="feedback mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="check-strength" id="checksterngthdisplay">
                                                    <div></div><div></div><div></div><div></div><div></div><div></div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="small" id="textpassword"></span>
                                                <i class="bi bi-info-circle text-theme ms-1"
                                                   data-bs-toggle="tooltip"
                                                   data-bs-placement="top"
                                                   title="Password should contain 1 capital letter, 1 alphanumeric and at least 8 characters"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="position-relative">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="passwd" placeholder="Confirm password">
                                            <label for="passwd">Confirm Password</label>
                                        </div>
                                        <button class="btn btn-square btn-link text-theme-1 position-absolute end-0 top-0 mt-2 me-2">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>

                                    <a href="investment-signup-success.html" class="btn btn-lg btn-theme w-100 mb-4">Sign up</a>

                                    <div class="text-center mb-3">
                                        Already have an account?
                                        <a href="investment-login.html">Login</a> here.
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <footer class="adminuiux-footer mt-auto">
                            <div class="container-fluid text-center">
                                <span class="small">
                                    Copyright ©
                                    <?php echo date('Y'); ?>,
                                    Creatively designed by
                                    <a href="https://wa.me/2348031975415" target="_blank">Cyberlife</a> ❤️
                                </span>
                            </div>
                        </footer>
                    </div>

                    <!-- Right-side Slider Section -->
                    <div class="col-12 col-md-6 col-xl-8 p-4 d-none d-md-block">
                        <div class="card adminuiux-card bg-theme-1-space position-relative overflow-hidden h-100">

                            <div class="position-absolute start-0 top-0 h-100 w-100 coverimg opacity-75 z-index-0">
                                <img src="assets/img/background-image/background-image-8.jpg" alt="">
                            </div>

                            <div class="card-body position-relative z-index-1">
                                <div class="row h-100 d-flex flex-column justify-content-center align-items-center text-center">
                                    <div class="col-10 col-md-11 col-xl-8 mb-4 mx-auto">

                                        <!-- Slider -->
                                        <div class="swiper swipernavpagination pb-5">
                                            <div class="swiper-wrapper">

                                                <div class="swiper-slide">
                                                    <img src="assets/img/investment/slider.png" alt="" class="mw-100 mb-3">
                                                    <h2 class="text-white mb-3">Create and manage your investment appointments easily.</h2>
                                                    <p class="lead opacity-75">You are at the best Adminuiux Investment UX HTML preview.</p>
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src="assets/img/investment/slider.png" alt="" class="mw-100 mb-3">
                                                    <h2 class="text-white mb-3">Keep your investment portfolio organized.</h2>
                                                    <p class="lead opacity-75">Designed for speed, clarity and efficiency.</p>
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src="assets/img/investment/slider.png" alt="" class="mw-100 mb-3">
                                                    <h2 class="text-white mb-3">Secure, fast and user-friendly platform.</h2>
                                                    <p class="lead opacity-75">Powered by Adminuiux Investment UX.</p>
                                                </div>

                                            </div>

                                            <div class="swiper-pagination white bottom-0"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <!-- Page-level script -->
    <script src="assets/js/investment/investment-auth.js"></script>

</body>
</html>
