<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <title>MultiShop - Online Shop Website Template</title>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta content='Free HTML Templates' name='keywords'>
    <meta content='Free HTML Templates' name='description'>

    <!-- Favicon -->
    <link href='/front_end/img/favicon.ico' rel='icon'>

    <!-- Google Web Fonts -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap' rel='stylesheet'>

    <!-- Font Awesome -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet'>

    <!-- Libraries Stylesheet -->
    <link href='/front_end/lib/animate/animate.min.css' rel='stylesheet'>
    <link href='/front_end/lib/owlcarousel/assets/owl.carousel.min.css' rel='stylesheet'>

    <!-- Customized Bootstrap Stylesheet -->
    <link href='/front_end/css/style.css' rel='stylesheet'>
</head>

<body>
<!-- Topbar Start -->
<div class='container-fluid'>
    <div class='row bg-secondary py-1 px-xl-5'>
        <div class='col-lg-6 d-none d-lg-block'>
            <div class='d-inline-flex align-items-center h-100'>
                <a class='text-body mr-3' href=''>About</a>
                <a class='text-body mr-3' href=''>Contact</a>
                <a class='text-body mr-3' href=''>Help</a>
                <a class='text-body mr-3' href=''>FAQs</a>
            </div>
        </div>
        <div class='col-lg-6 text-center text-lg-right'>
            <div class='d-inline-flex align-items-center'>
                <div class='btn-group'>
                    <button type='button' class='btn btn-sm btn-light dropdown-toggle' data-toggle='dropdown'>My
                        Account
                    </button>
                    <div class='dropdown-menu dropdown-menu-right'>
                        <button class='dropdown-item' type='button'>Sign in</button>
                        <button class='dropdown-item' type='button'>Sign up</button>
                    </div>
                </div>
                <div class='btn-group mx-2'>
                    <button type='button' class='btn btn-sm btn-light dropdown-toggle' data-toggle='dropdown'>USD
                    </button>
                    <div class='dropdown-menu dropdown-menu-right'>
                        <button class='dropdown-item' type='button'>EUR</button>
                        <button class='dropdown-item' type='button'>GBP</button>
                        <button class='dropdown-item' type='button'>CAD</button>
                    </div>
                </div>
                <div class='btn-group'>
                    <button type='button' class='btn btn-sm btn-light dropdown-toggle' data-toggle='dropdown'>EN
                    </button>
                    <div class='dropdown-menu dropdown-menu-right'>
                        <button class='dropdown-item' type='button'>FR</button>
                        <button class='dropdown-item' type='button'>AR</button>
                        <button class='dropdown-item' type='button'>RU</button>
                    </div>
                </div>
            </div>
            <div class='d-inline-flex align-items-center d-block d-lg-none'>
                <a href='' class='btn px-0 ml-2'>
                    <i class='fas fa-heart text-dark'></i>
                    <span class='badge text-dark border border-dark rounded-circle'
                          style='padding-bottom: 2px;'>0</span>
                </a>
                <a href='' class='btn px-0 ml-2'>
                    <i class='fas fa-shopping-cart text-dark'></i>
                    <span class='badge text-dark border border-dark rounded-circle'
                          style='padding-bottom: 2px;'>0</span>
                </a>
            </div>
        </div>
    </div>
    <div class='row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex'>
        <div class='col-lg-4'>
            <a href='' class='text-decoration-none'>
                <span class='h1 text-uppercase text-primary bg-dark px-2'>Multi</span>
                <span class='h1 text-uppercase text-dark bg-primary px-2 ml-n1'>Shop</span>
            </a>
        </div>
        <div class='col-lg-4 col-6 text-left'>
            <form action=''>
                <div class='input-group'>
                    <input type='text' class='form-control' placeholder='Search for products'>
                    <div class='input-group-append'>
                            <span class='input-group-text bg-transparent text-primary'>
                                <i class='fa fa-search'></i>
                            </span>
                    </div>
                </div>
            </form>
        </div>
        <div class='col-lg-4 col-6 text-right'>
            <p class='m-0'>Customer Service</p>
            <h5 class='m-0'>+012 345 6789</h5>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class='container-fluid bg-dark mb-30'>
    <div class='row px-xl-5'>
        <div class='col-lg-3 d-none d-lg-block'>
            <a class='btn d-flex align-items-center justify-content-between bg-primary w-100' data-toggle='collapse'
               href='#navbar-vertical' style='height: 65px; padding: 0 30px;'>
                <h6 class='text-dark m-0'><i class='fa fa-bars mr-2'></i>Categories</h6>
                <i class='fa fa-angle-down text-dark'></i>
            </a>
            <nav class='collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light'
                 id='navbar-vertical' style='width: calc(100% - 30px); z-index: 999;'>
                <div class='navbar-nav w-100'>
                    <?php
                    use App\Models\ProductCategory;
                    $productCate = ProductCategory::get();
                    ?>
                    @foreach($productCate as $row)
                        <a href="/search_by_cat?id={{$row->id}}" class="nav-item nav-link">{{$row->name}}</a>
                    @endforeach

                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="shop.html" class="nav-item nav-link active">Shop</a>
                        <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i
                                        class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle"
                                  style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle"
                                  style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->


<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">@yield("map")</a>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

@yield("main-content")

<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
            <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum
                tempor no vero est magna amet no</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                    <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
                &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                by
                <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="/front_end/img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="/front_end/lib/easing/easing.min.js"></script>
<script src="/front_end/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="/front_end/mail/jqBootstrapValidation.min.js"></script>
<script src="/front_end/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="/front_end/js/main.js"></script>
</body>

</html>