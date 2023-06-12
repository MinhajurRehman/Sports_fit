<!DOCTYPE html>
<html lang="en">




<head>
    <link rel="icon" type="image/x-icon" href="{{ url('Admins/images/logos.png') }}">
    <title>Sports Fit</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sports Team template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/responsive.css') }}">

</head>

<body>
    <div class="super_container">

        <header class="header">

            <div class="header_content">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div
                                class="main_nav_container_outer d-flex flex-row align-items-end justify-content-center trans_400">
                                <nav class="main_nav">
                                    <div
                                        class="main_nav_container d-flex flex-row align-items-center justify-content-lg-start justify-content-center">
                                        <div>

                                            <div class="header_live">
                                                <a href="#">
                                                    <div
                                                        class="d-flex flex-row align-items-center justify-content-start">
                                                        <div>live</div>
                                                        <div>Lorem ipsum dolor sit amet, consectetur...</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <ul class="d-flex flex-row align-items-start justify-content-end">
                                                <li class="active"><a href="{{ url('/') }}">home</a></li>
                                                <li><a href="#about-section">about the club</a></li>
                                                <li><a href="#join">Membership</a></li>
                                            </ul>
                                        </div>
                                        <div class="logo_container text-center">
                                            <div class="trans_400"><a href="{{ url('/') }}"><img
                                                        src="images/logo.png" alt=""></a></div>
                                        </div>
                                        <div>
                                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="{{ url('/tickets') }}">tickets</a></li>
                                                <li><a href="#latest-news">news</a></li>
                                                <li><a href="{{ url('/contact') }}">contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <div class="hamburger">
                                    <i class="fa fa-bars trans_200"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Add commit --}}

                <div class="header_bar">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div
                                    class="header_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="header_links">
                                        <ul class="d-flex flex-row align-items-start justify-content-start">
                                            <li><a href="{{ url('/tickets') }}"><i class="fa fa-ticket"
                                                        aria-hidden="true"></i> GET
                                                    Tickets</a></li>
                                            <li><a href="{{ url('/login') }}"><i class="fa fa-shopping-bag"
                                                        aria-hidden="true"></i>
                                                    Store </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div
                                        class="header_bar_right ml-auto d-flex flex-row align-items-center justify-content-start">


                                        <div class="user_area">
                                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="{{ url('/membership') }}"><i class="fa fa-user-o"
                                                            aria-hidden="true"></i>
                                                        MEMBERSHIP </a></li>
                                                <li><a href="{{ url('/Admins/Login') }}"><i class="fa fa-sign-in"
                                                            aria-hidden="true"></i>
                                                        ADMINS </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="menu">
            <div class="menu_background">
                <div class="menu_container d-flex flex-column align-items-end justify-content-start">
                    <div class="menu_close">close</div>
                    <div class="menu_user_area">
                        <ul class="d-flex flex-row align-items-start justify-content-end">
                            <li><a href="{{ url('/membership') }}"><i class="fa fa-user-o" aria-hidden="true"></i>
                                    MEMBERSHIP </a></li>
                            <li><a href="{{ url('/Admins/Login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                    ADMINS </a></li>
                        </ul>
                    </div>
                    <nav class="menu_nav">
                        <ul class="text-right">
                            <li><a href="{{ url('/index-2') }}">home</a></li>
                            <li><a href="{{ url('/about-2') }}">about us</a></li>
                            <li><a href="{{ url('/team') }}">the team</a></li>
                            <li><a href="{{ url('/blog') }}">news</a></li>
                            <li><a href="{{ url('/contact') }}">contact</a></li>
                        </ul>
                    </nav>
                    <div class="menu_links">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li><a href="{{ url('/tickets') }}"><i class="fa fa-ticket" aria-hidden="true"></i> GET
                                    Tickets</a></li>
                            <li><a href="{{ url('/login') }}"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    Store </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="home">

            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">

                    <div class="home_slide">
                        <div class="background_image" style="background-image:url(images/index.jpg)"></div>
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="home_content" data-animation-in="zoomInDown"
                                            data-animation-out="animate-out fadeOut">
                                            <div class="home_text d-flex flex-row align-items-center justify-content-start">
                                                <div>2</div>
                                                <span>days until the next match</span>
                                            </div>
                                            <div class="next_match">
                                                <div>
                                                    <div class="next_match_home">
                                                        <a href="#">The Tigers</a>
                                                    </div>
                                                    <div class="next_match_guest">
                                                        <a href="#">The Bears</a>
                                                    </div>
                                                </div>
                                                <div class="vs">vs</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="home_slide">
                        <div class="background_image" style="background-image:url(images/index.jpg)"></div>
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="home_content" data-animation-in="zoomInDown"
                                            data-animation-out="animate-out fadeOut">
                                            <div class="home_text d-flex flex-row align-items-center justify-content-start">
                                                <div>2</div>
                                                <span>days until the next match</span>
                                            </div>
                                            <div class="next_match">
                                                <div>
                                                    <div class="next_match_home">
                                                        <a href="#">The Tigers</a>
                                                    </div>
                                                    <div class="next_match_guest">
                                                        <a href="#">The Bears</a>
                                                    </div>
                                                </div>
                                                <div class="vs">vs</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="home_slide">
                        <div class="background_image" style="background-image:url(images/index.jpg)"></div>
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="home_content" data-animation-in="zoomInDown"
                                            data-animation-out="animate-out fadeOut">
                                            <div class="home_text d-flex flex-row align-items-center justify-content-start">
                                                <div>2</div>
                                                <span>days until the next match</span>
                                            </div>
                                            <div class="next_match">
                                                <div>
                                                    <div class="next_match_home">
                                                        <a href="#">The Tigers</a>
                                                    </div>
                                                    <div class="next_match_guest">
                                                        <a href="#">The Bears</a>
                                                    </div>
                                                </div>
                                                <div class="vs">vs</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home_slider_nav">
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>
        </div>

        <div class="breaking_news d-flex flex-row align-items-start justify-content-start">
            <div class="breaking_news_title text-right">Breaking News</div>
            <div class="breaking_news_content">
                <div class="breaking_news_slider_container">
                    <div class="owl-carousel owl-theme breaking_news_slider">

                        <div class="breaking_news_slide">Pellentesque enim nunc, vehicula in massa quis, consectetur
                            tempus nulla</div>

                        <div class="breaking_news_slide">Enim nunc, vehicula in massa quis, consectetur tempus</div>

                        <div class="breaking_news_slide">Vehicula in massa quis, consectetur tempus nulla. Pellentesque
                            enim nunc</div>
                    </div>
                </div>
            </div>
        </div>
