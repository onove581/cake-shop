<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from despina.sk-web-solutions.com/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 05:50:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Despina : Coffee, Cake & Bakery HTML Template</title>

    <link rel="shortcut icon" href="{{asset('front_end/images/favicon.png')}}">

    <link href="https://fonts.googleapis.com/css?family=Pacifico|Quicksand:300,400,500,700|Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link href="{{asset('front_end/css/icon-plugin/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/icon-plugin/fontello.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/revolution-plugin/extralayers.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/revolution-plugin/settings.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/bootstrap-plugin/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/bootstrap-plugin/bootstrap-slider.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/animation/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/owl-carousel/owl.theme.default.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/light-box/simplelightbox.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/light-box/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/form-field/jquery.formstyler.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/Slick-slider/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/responsive.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Page pre loader -->
    <div id="pre-loader">
        <div class="loader-holder">
            <div class="frame">
                <img src="{{asset('front_end/images/Preloader.gif')}}" alt="Despına"/>                
            </div>
        </div>
    </div>

    <!-- Start Wrapper Part -->

    <div class="wrapper">

        <!-- Start Header Part -->

        <header>
            <div class="header-part header-reduce sticky">
                <div class="header-nav">
                    <div class="container">
                        <div class="header-nav-inside">
                            <div class="logo">
                                <a href="index-2.html"><span>Despına</span><small>1991</small></a>
                            </div>
                            <div class="menu-top-part">
                                <div class="menu-nav-main">
                                    <ul>
                                        <li class="has-child">
                                            <a href="/">Home</a>       
                                        </li>
                                       
                                        <li class="has-child">
                                            <a href="/shop">Shop</a>
                                         
                                                <ul class="drop-nav">
                                                     @foreach ($allcata as $item)
                                                <li><a href="{{URL::to('/catasp/'.$item->dm_id)}}">{{$item->dm_name}}</a></li>
                                                 @endforeach
                                                </ul>
                                           
                                            {{-- <ul class="drop-nav">
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop_single.html">Shop Single</a></li>
                                                <li><a href="shop_cart.html">Shop Cart</a></li>
                                                <li><a href="shop_checkout.html">Shop Checkout</a></li>
                                                <li><a href="order_complete.html">Order Complete</a></li>
                                                <li><a href="track_order.html">Track Your Order</a></li>
                                                <li><a href="login_register.html">Login & Register</a></li>
                                            </ul> --}}
                                        </li>
                                     
                                        <li class="has-child">
                                            <a href="blog_2col.html">Blog</a>
                                              
                                            {{-- <ul class="drop-nav">
                                                <li><a href="blog_list.html">Blog List</a></li>
                                                <li><a href="blog_2col.html">Blog 2 Columns</a></li>
                                                <li><a href="blog_full.html">Blog Full Width</a></li>
                                                <li><a href="blog_left_sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog_right_sidebar.html">Blog Right Sidebar</a></li>
                                                <li><a href="blog_single.html">Blog Single</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="has-child">
                                            <a href="/contact">Contact</a>
                                           
                                        </li>
                                         <li class="has-child">
                                            <a href="/login">Login & Register</a>
                                            
                                        </li>
                                    </ul>
                                </div>
                                <div class="cell-part">
                                    <a href="tel:123-456-7890"><span class="icon-phone fontello"></span>123-456-7890</a>
                                </div>
                                <div class="cart animated">
                                    <span class="icon-basket fontello"></span><span>2 items - $ 10.89</span>
                                    <div class="cart-wrap">
                                        <div class="cart-blog">
                                            <div id="change-item-cart">
                                                  <div class="cart-item">
                                                 <div class="cart-item-left">
                                                     <img src="{{asset('front_end/images/img21.png')}}" alt="">
                                                 </div>
                                                 <div class="cart-item-right">
                                                     <h6>Caramel Chesse Cake</h6>
                                                     <span>$ 14.00</span>
                                                 </div>
                                                 <span class="delete-icon"></span>
                                             </div>
                                             <div class="cart-item">
                                                 <div class="cart-item-left">
                                                     <img src="{{asset('front_end/images/img21.png')}}" alt="">
                                                 </div>
                                                 <div class="cart-item-right">
                                                     <h6>Caramel Chesse Cake</h6>
                                                     <span>$ 14.00</span>
                                                 </div>
                                                 <span class="delete-icon"></span>
                                             </div>
                                             <div class="subtotal">
                                                 <div class="row">
                                                     <div class="col-md-6 col-sm-6 col-xs-6">
                                                         <h6>Subtotal :</h6>
                                                     </div>
                                                     <div class="col-md-6 col-sm-6 col-xs-6">
                                                         <span>$ 140.00</span>
                                                     </div>
                                                 </div>
                                             </div>
                                            </div>
                                             {{-- <div class="cart-item">
                                                 <div class="cart-item-left">
                                                     <img src="{{asset('front_end/images/img21.png')}}" alt="">
                                                 </div>
                                                 <div class="cart-item-right">
                                                     <h6>Caramel Chesse Cake</h6>
                                                     <span>$ 14.00</span>
                                                 </div>
                                                 <span class="delete-icon"></span>
                                             </div>
                                             <div class="cart-item">
                                                 <div class="cart-item-left">
                                                     <img src="{{asset('front_end/images/img21.png')}}" alt="">
                                                 </div>
                                                 <div class="cart-item-right">
                                                     <h6>Caramel Chesse Cake</h6>
                                                     <span>$ 14.00</span>
                                                 </div>
                                                 <span class="delete-icon"></span>
                                             </div>
                                             <div class="subtotal">
                                                 <div class="row">
                                                     <div class="col-md-6 col-sm-6 col-xs-6">
                                                         <h6>Subtotal :</h6>
                                                     </div>
                                                     <div class="col-md-6 col-sm-6 col-xs-6">
                                                         <span>$ 140.00</span>
                                                     </div>
                                                 </div>
                                             </div> --}}
                                             <div class="cart-btn">
                                                <a href="shop_cart.html" class="button-default view">VIEW ALL</a>
                                                <a href="shop_checkout.html" class="button-default checkout">CHECK OUT</a>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-icon">
									<a href="#" class="hambarger">
										<span class="bar-1"></span>
										<span class="bar-2"></span>
										<span class="bar-3"></span>
									</a>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </header>  

        <!-- End Header Part -->

        <!-- Start Main Part -->

        <main>
            <div class="main-part">
               
              @yield('noidung')

            </div>
        </main>  

        <!-- End Main Part -->

         <!-- Start Footer Part -->

        <footer>
            <div class="footer-part">
                <div class="footer-inner-info Banner-Bg" data-background="{{asset('front_end/images/footer-bg.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="logo">
                                    <a href="index-2.html"><span>Despına</span><small>1991</small></a>
                                </div>
                                <p>We have a hankering for some really in good melt in a mouth variety. Floury is the best choice to taste food and dessert.</p>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <h5>Contact</h5>
                                <p>329 Queensberry Street, North Melbourne <br> VIC 3051, Australia. <br> <a href="tel:1234567890">123 456 7890</a> <br> <a href="mailto:support@despina.com">support@despina.com</a></p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <h5>Opening Hour</h5>
                                <p>Monday - Friday: ........6am - 9pm <br> Saturday - Sunday: ........6am - 10pm <br> Close on special days</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <h5> Despina Video</h5>
                                <a href="https://www.youtube.com/watch?v=uZ0aQMXkiV4" class="magnific-youtube"><img src="{{asset('front_end/images/video-bg.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p>Copyright © 2017 Hire WordPress Developer. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>  

        <!-- End Footer Part -->

    </div>

    <!-- End Wrapper Part -->

    <!-- Back To Top Arrow -->

    <a href="#" class="top-arrow"></a>

    <script src="{{asset('front_end/js/jquery.min.js')}}"></script>
    <script src="{{asset('front_end/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('front_end/js/bootstrap/bootstrap-slider.js')}}"></script>
    <script src="{{asset('front_end/js/revolution-plugin/jquery.themepunch.plugins.min.js')}}"></script>
    <script src="{{asset('front_end/js/revolution-plugin/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('front_end/js/parallax-stellar/jquery.stellar.js')}}"></script>
    <script src="{{asset('front_end/js/animation/wow.min.js')}}"></script>
    <script src="{{asset('front_end/js/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front_end/js/light-box/simple-lightbox.min.js')}}"></script>
    <script src="{{asset('front_end/js/light-box/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front_end/js/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('front_end/js/masonry/isotop.js')}}"></script>
    <script src="{{asset('front_end/js/masonry/packery-mode.pkgd.min.js')}}"></script>
    <script src="{{asset('front_end/js/form-field/jquery.formstyler.min.js')}}"></script>
    <script src="{{asset('front_end/js/Slick-slider/slick.min.js')}}"></script>
    <script src="{{asset('front_end/js/progress-circle/waterbubble.min.js')}}"></script>
    <script src="{{asset('front_end/js/app.js')}}"></script>
    <script src="{{asset('front_end/js/script.js')}}"></script>
  </body>

<!-- Mirrored from despina.sk-web-solutions.com/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 05:50:37 GMT -->
</html>