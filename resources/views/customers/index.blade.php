
{{-- "{{url('customers/products')}}" --}}
{{-- {{url('admin/indexs')}} --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('customer/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('customer/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('customer/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('customer/css/style.css')}}" rel="stylesheet">
    
    
    
</head>

<body>
    
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="{{url('customers/about')}}">About</a>
                    <a class="text-body mr-3" href="{{url('customers/contact')}}">Contact</a>
                    <a class="text-body mr-3" href="{{url('customers/help')}}">Help</a>
                    <a class="text-body mr-3" href="{{url('customers/faq')}}">FAQs</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                            @if (Session::has('customerEmail'))
                            <a href=" #" style="margin-right: 30px;">{{Session::get('customerPhoto')}} WELCOME TO OUR JEWERRY SHOPS: {{Session::get('customerName')}}</a>
                            {{-- <img src="../pro-img/{{Session::get('adminPhoto')}}"> --}}
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">
                           
                            <a class="dropdown-item" href="{{url('customers/logout')}}">Log out</a>
                            @else
                            <a class="dropdown-item" href="{{url('customers/login')}}">Sign in</a>
                            <a class="dropdown-item" href="{{url('customers/register')}}">Sign up</a>
                            @endif
                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">FR</button>
                            <button class="dropdown-item" type="button">AR</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="{{url('admin/login')}}" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Jewelry</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    {{-- {{url('admin/index')}} --}}

    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ring<i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Oval </a>
                                <a href="" class="dropdown-item">Heart </a>
                  
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Bangles</a>
                        <a href="" class="nav-item nav-link">Necklace</a>
                        <a href="" class="nav-item nav-link">Eardrop</a>
                        <a href="" class="nav-item nav-link">Bracelet</a>
                        {{-- <a href="" class="nav-item nav-link">Jumpsuits</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a> --}}
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="{{url('admin/indexs')}}" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{url('customers/index')}}" class="nav-item nav-link active">Home</a>
                            <a href="{{url('customers/products')}}" class="nav-item nav-link">Shop</a>
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="{{url('customers/shopcart')}}" class="dropdown-item">Shopping Cart</a>
                                    <a href="{{url('customers/checkout')}}" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="{{url('customers/contact')}}" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0"  data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 530px;">
                            <img class="position-absolute w-100 h-100" src="https://cdn.pnj.io/images/promo/162/sn-pnj-1972x640CTA.jpg" width="300px" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 530px;">
                            <img class="position-absolute w-100 h-100" src="https://cdn.pnj.io/images/promo/162/egift-2023-1972x640CTA.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 530px;">
                            <img class="position-absolute w-100 h-100" src="https://trangsuc.doji.vn/Upload/banner/2023/02/bannerweb/7-banner-tskc-8ha.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 250px;">
                    <img class="img-fluid" src="https://trangsuc.doji.vn/Upload/banner/2023/04/baipr/2km.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 30%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="{{url('customers/products')}}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 250px;">
                    <img class="img-fluid" src="https://cdn.pnj.io/images/promo/160/banner-main-homepage-tab-sale-desktop.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="{{url('customers/products')}}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('pro_img/anhtrungbay1.jpg')}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Ring</h6>
                            <small class="text-body">120 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('pro_img/hangtrungbay6.png')}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Bangles</h6>
                            <small class="text-body">600 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('pro_img/day chuyen kim cuong.jpg')}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Necklace</h6>
                            <small class="text-body">500 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('pro_img/hangtrungbay2.jpg')}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Eardrop</h6>
                            <small class="text-body">350 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('pro_img/hangtrungbay5.png')}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Bracelet</h6>
                            <small class="text-body">750 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            {{-- <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div> --}}
        </div>
    </div>
    <!-- Categories End -->


  


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent Products</span></h2>
        <div class="row px-xl-5">
            @foreach ($data as $p)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="../pro_img/{{$p->productimage}}" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">{{$p->productname}}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>{{$p->productprice}}$</h5><h6 class="text-muted ml-2"></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> 

    
    <!-- Products End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="https://cdn.pnj.io/images/logo/pnj.com.vn.png" width="200px" height="60px" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="https://trangsuc.doji.vn/Upload/logo/logo-t.png" width="200px" height="60px" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="https://donghohaitrieu.com/wp-content/uploads/2014/05/logo-hai-trieu3.png" width="200px" height="60px" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="https://theme.hstatic.net/1000381168/1000941305/14/logo.png?v=245"  width="200px" height="60px" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="https://sjc.com.vn/images/footer-logo.png"  alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="https://theme.hstatic.net/200000315699/1000749142/14/logo.png?v=656" width="200px" height="60px" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="https://skymond.com.vn/bw_images/Logoskymond.png" width="200px" height="60px" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="data:image/png;base64,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" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Vendor End -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">

        </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
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
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>