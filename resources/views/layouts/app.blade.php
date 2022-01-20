<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="" href="{{asset('https://pbs.twimg.com/profile_images/641538009460961281/JC1u0tef.jpg')}}" type="">
        <title>DHM</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('')}}css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('')}}vendors/linericon/style.css">
        <link rel="stylesheet" href="{{asset('')}}css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('')}}vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('')}}vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="{{asset('')}}vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="{{asset('')}}vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('')}}css/style.css">
        <link rel="stylesheet" href="{{asset('')}}css/responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{asset('')}}index.html"><img src="{{asset('')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="{{asset('')}}about.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('accomodation') }}">Accomodation</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('')}}gallery.html">Gallery</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="{{asset('')}}#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{asset('')}}blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('')}}blog-single.html">Blog Details</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="{{asset('')}}elements.html">Elemests</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('')}}contact.html">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        @yield('content')
        
        <!--================ Recent Area  =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="{{asset('')}}#">Home</a></li>
                                        <li><a href="{{asset('')}}#">Feature</a></li>
                                        <li><a href="{{asset('')}}#">Services</a></li>
                                        <li><a href="{{asset('')}}#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="{{asset('')}}#">Team</a></li>
                                        <li><a href="{{asset('')}}#">Pricing</a></li>
                                        <li><a href="{{asset('')}}#">Blog</a></li>
                                        <li><a href="{{asset('')}}#">Contact</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="{{asset('')}}image/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="{{asset('')}}image/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="{{asset('')}}image/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="{{asset('')}}image/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="{{asset('')}}image/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="{{asset('')}}image/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="{{asset('')}}image/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="{{asset('')}}image/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>						
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{asset('')}}https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="{{asset('')}}#"><i class="fa fa-facebook"></i></a>
                        <a href="{{asset('')}}#"><i class="fa fa-twitter"></i></a>
                        <a href="{{asset('')}}#"><i class="fa fa-dribbble"></i></a>
                        <a href="{{asset('')}}#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('')}}js/jquery-3.2.1.min.js"></script>
        <script src="{{asset('')}}js/popper.js"></script>
        <script src="{{asset('')}}js/bootstrap.min.js"></script>
        <script src="{{asset('')}}vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="{{asset('')}}js/jquery.ajaxchimp.min.js"></script>
        <script src="{{asset('')}}js/mail-script.js"></script>
        <script src="{{asset('')}}vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="{{asset('')}}vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="{{asset('')}}js/mail-script.js"></script>
        <script src="{{asset('')}}js/stellar.js"></script>
        <script src="{{asset('')}}vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="{{asset('')}}js/custom.js"></script>
    </body>
</html>