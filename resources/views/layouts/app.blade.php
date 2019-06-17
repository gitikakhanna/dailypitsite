<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dailypit</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- boostrap css --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/skeleton.css')}}?v={{filemtime('css/skeleton.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/linericon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/lightbox/simpleLightbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nice-select/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery-ui/jquery-ui.css') }}" />
    {{--  main css  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    {{-- fontawesome cdn --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<body>
    @yield('modal')
    <header class="header_area">
            <div class="top_menu">
              <div class="container">
                <div class="row">
                  <div class="col-lg-7">
                    <div class="float-left">
                      <p>Phone: +91 8053-687-687</p>
                      <p>email: info@dailypit.com</p>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="float-right">
                      <ul class="right_side">
                        <li>
                            <a href="cart.html">
                                Become a Professional
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/Dailypit.Technologies/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/dailypit_technologies/">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/dailypit-technologies/">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="main_menu">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light w-100">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.html">
                            <img src="{{ asset('images/logo.png') }}" alt="" height="40" width="100" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                            <div class="row w-100 mr-0">
                                <div class="col-lg-8 pr-0">
                                    <ul class="nav navbar-nav center_nav pull-right">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item submenu dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                                            <ul class="dropdown-menu">
                                                @forelse($categories as $category)
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">{{$category->name}}</a>
                                                    </li>
                                                @empty{{''}}
                                                @endforelse
                                            </ul>
                                        </li>
                                        <li class="nav-item submenu dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="blog.html">Blog</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="single-blog.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item submenu dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="tracking.html">Tracking</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="elements.html">Elements</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/aboutus">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/contactus">Contact</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 pr-0">
                                    <ul class="nav navbar-nav navbar-right right_nav pull-right">
                                        <li class="nav-item">
                                            <a href="#" class="icons">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="icons">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="icons">
                                                <i class="ti-user" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="icons">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
    </header>

    @yield('content');

    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Get In Touch</h4>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-address-card mr-2"></i>
                                H-6/205, 2ND FLOOR, AGARWAL TOWER, OPPOSITE PP JEWELLERSNETAJI SUBHASH PLACENEW DELHI, DELHI 110034
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope mr-2"></i>
                                info@dailypit.com
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-phone mr-2"></i>
                                +919210888208, +918053687687
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Cctv Servicing</a></li>
                        <li><a href="#">Printer Maintenance</a></li>
                        <li><a href="#">AC Servicing</a></li>
                        <li><a href="#">Water Purifier Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                            <button class="click-btn btn btn-default">Subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                    <br>
                    <div class="social-icon float-left mr-2 d-flex align-items-center justify-content-center">
                        <a href="https://www.facebook.com/Dailypit.Technologies/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="social-icon float-left mr-2 d-flex align-items-center justify-content-center">
                        <a href="https://www.instagram.com/dailypit_technologies/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <div class="social-icon float-left mr-2 d-flex align-items-center justify-content-center">
                        <a href="https://www.linkedin.com/in/dailypit-technologies/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/skeleton.js') }}"></script>
    @yield('js')
    @yield('extra-js')
</body>
</html>
