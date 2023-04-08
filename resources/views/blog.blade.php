<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/sportsteam/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 10:03:52 GMT -->

<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sports Team template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/blog.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
    <script nonce="05fd2884-0769-4c5d-890a-68fa2ab0955b">
        (function(w, d) {
            ! function(bv, bw, bx, by) {
                bv[bx] = bv[bx] || {};
                bv[bx].executed = [];
                bv.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bv.zaraz.q = [];
                bv.zaraz._f = function(bz) {
                    return function() {
                        var bA = Array.prototype.slice.call(arguments);
                        bv.zaraz.q.push({
                            m: bz,
                            a: bA
                        })
                    }
                };
                for (const bB of ["track", "set", "debug"]) bv.zaraz[bB] = bv.zaraz._f(bB);
                bv.zaraz.init = () => {
                    var bC = bw.getElementsByTagName(by)[0],
                        bD = bw.createElement(by),
                        bE = bw.getElementsByTagName("title")[0];
                    bE && (bv[bx].t = bw.getElementsByTagName("title")[0].text);
                    bv[bx].x = Math.random();
                    bv[bx].w = bv.screen.width;
                    bv[bx].h = bv.screen.height;
                    bv[bx].j = bv.innerHeight;
                    bv[bx].e = bv.innerWidth;
                    bv[bx].l = bv.location.href;
                    bv[bx].r = bw.referrer;
                    bv[bx].k = bv.screen.colorDepth;
                    bv[bx].n = bw.characterSet;
                    bv[bx].o = (new Date).getTimezoneOffset();
                    if (bv.dataLayer)
                        for (const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ, bK) => ({
                                ...bJ[1],
                                ...bK[1]
                            }))))) zaraz.set(bI[0], bI[1], {
                            scope: "page"
                        });
                    bv[bx].q = [];
                    for (; bv.zaraz.q.length;) {
                        const bL = bv.zaraz.q.shift();
                        bv[bx].q.push(bL)
                    }
                    bD.defer = !0;
                    for (const bM of [localStorage, sessionStorage]) Object.keys(bM || {}).filter((bO => bO
                        .startsWith("_zaraz_"))).forEach((bN => {
                        try {
                            bv[bx]["z_" + bN.slice(7)] = JSON.parse(bM.getItem(bN))
                        } catch {
                            bv[bx]["z_" + bN.slice(7)] = bM.getItem(bN)
                        }
                    }));
                    bD.referrerPolicy = "origin";
                    bD.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bv[bx])));
                    bC.parentNode.insertBefore(bD, bC)
                };
                ["complete", "interactive"].includes(bw.readyState) ? zaraz.init() : bv.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
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
                                                <li><a href="index-2.html">home</a></li>
                                                <li><a href="about.html">about the club</a></li>
                                                <li><a href="#">media</a></li>
                                            </ul>
                                        </div>
                                        <div class="logo_container text-center">
                                            <div class="trans_400"><a href="#"><img src="images/logo.png"
                                                        alt=""></a></div>
                                        </div>
                                        <div>
                                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="#">tickets</a></li>
                                                <li><a href="blog.html">news</a></li>
                                                <li><a href="contact.html">contact</a></li>
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

                <div class="header_bar">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div
                                    class="header_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="header_links">
                                        <ul class="d-flex flex-row align-items-start justify-content-start">
                                            <li><a href="#">GET Tickets</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </div>
                                    <div
                                        class="header_bar_right ml-auto d-flex flex-row align-items-center justify-content-start">

                                        <div class="header_live">
                                            <a href="#">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <div>live</div>
                                                    <div>Lorem ipsum dolor sit amet, consectetur...</div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="user_area">
                                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="#">Sign up</a></li>
                                                <li><a href="#">Sign in</a></li>
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
                            <li><a href="#">Sign up</a></li>
                            <li><a href="#">Sign in</a></li>
                        </ul>
                    </div>
                    <nav class="menu_nav">
                        <ul class="text-right">
                            <li><a href="index-2.html">home</a></li>
                            <li><a href="about-2.html">about us</a></li>
                            <li><a href="team.html">the team</a></li>
                            <li><a href="blog.html">news</a></li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                    <div class="menu_links">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li><a href="#">GET Tickets</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="home d-flex flex-column align-items-start justify-content-end">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg"
                data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="home_text">The <span>News</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9">
                        <div class="blog_posts">

                            <div class="blog_post">
                                <div class="blog_post_image">
                                    <img src="images/blog_1.jpg" alt="https://unsplash.com/@johntorcasio">
                                    <div class="blog_post_date">
                                        <a href="#">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <div>10</div>
                                                <div>sept</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog_post_content">
                                    <div class="tags">
                                        <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <li><a href="blog.html">News</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog_post_title"><a href="blog.html">T-shirt release date -
                                            Announcement</a></div>
                                    <div class="blog_post_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan
                                            dolor id enim lacinia, sed feugiat ex suscipit. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed
                                            feugiat ex suscipit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_post">
                                <div class="blog_post_image">
                                    <img src="images/blog_2.jpg" alt="">
                                    <div class="blog_post_date">
                                        <a href="#">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <div>10</div>
                                                <div>sept</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog_post_content">
                                    <div class="tags">
                                        <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <li><a href="blog.html">News</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog_post_title"><a href="blog.html">3 new transfers for this
                                            summer</a></div>
                                    <div class="blog_post_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan
                                            dolor id enim lacinia, sed feugiat ex suscipit. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed
                                            feugiat ex suscipit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_post">
                                <div class="blog_post_image">
                                    <img src="images/blog_3.jpg" alt="https://unsplash.com/@aloragriffiths">
                                    <div class="blog_post_date">
                                        <a href="#">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <div>10</div>
                                                <div>sept</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog_post_content">
                                    <div class="tags">
                                        <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <li><a href="blog.html">News</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog_post_title"><a href="blog.html">Woman’s league is comming
                                            strong</a></div>
                                    <div class="blog_post_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan
                                            dolor id enim lacinia, sed feugiat ex suscipit. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed
                                            feugiat ex suscipit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 sidebar_col">
                        <div class="sidebar">
                            <div class="latest_games">
                                <div class="sidebar_title_container">
                                    <div class="sidebar_title">
                                        <h3>latest games</h3>
                                    </div>
                                    <div class="sidebar_subtitle">Results</div>
                                </div>

                                <div class="latest_games_container text-center">
                                    <ul>
                                        <li>
                                            <div class="latest_games_score">8 : 3</div>
                                            <div
                                                class="latest_games_teams d-flex flex-row align-items-start justify-content-start">
                                                <div
                                                    class="d-flex flex-xl-row flex-lg-column flex-row align-items-xl-center align-items-lg-start align-items-center justify-content-start">
                                                    <div class="team_logo"><a href="team.html"><img
                                                                src="images/logo_1.png" alt=""></a></div>
                                                    <div class="team_name text-left"><a href="team.html">New
                                                            Alligators</a></div>
                                                </div>
                                                <div
                                                    class="d-flex flex-xl-row flex-lg-column flex-row align-items-xl-center align-items-lg-end align-items-center justify-content-end">
                                                    <div class="team_name text-right order-xl-1 order-lg-2 order-1"><a
                                                            href="team.html">The Tigers</a></div>
                                                    <div class="team_logo order-xl-2 order-lg-1 order-2"><a
                                                            href="team.html"><img src="images/logo_2.png"
                                                                alt=""></a></div>
                                                </div>
                                            </div>
                                            <div class="latest_games_date"><a href="#">August 25, 2018 / 17
                                                    UTC</a></div>
                                        </li>
                                        <li>
                                            <div class="latest_games_score">7 : 5</div>
                                            <div
                                                class="latest_games_teams d-flex flex-row align-items-start justify-content-start">
                                                <div
                                                    class="d-flex flex-xl-row flex-lg-column flex-row align-items-xl-center align-items-lg-start align-items-center justify-content-start">
                                                    <div class="team_logo"><a href="team.html"><img
                                                                src="images/logo_2.png" alt=""></a></div>
                                                    <div class="team_name text-left"><a href="team.html">The
                                                            Tigers</a></div>
                                                </div>
                                                <div
                                                    class="d-flex flex-xl-row flex-lg-column flex-row align-items-xl-center align-items-lg-end align-items-center justify-content-end">
                                                    <div class="team_name text-right order-xl-1 order-lg-2 order-1"><a
                                                            href="team.html">The Eagles</a></div>
                                                    <div class="team_logo order-xl-2 order-lg-1 order-2"><a
                                                            href="team.html"><img src="images/logo_4.png"
                                                                alt=""></a></div>
                                                </div>
                                            </div>
                                            <div class="latest_games_date"><a href="#">August 25, 2018 / 17
                                                    UTC</a></div>
                                        </li>
                                        <li>
                                            <div class="latest_games_score">3 : 9</div>
                                            <div
                                                class="latest_games_teams d-flex flex-row align-items-start justify-content-start">
                                                <div
                                                    class="d-flex flex-xl-row flex-lg-column flex-row align-items-xl-center align-items-lg-start align-items-center justify-content-start">
                                                    <div class="team_logo"><a href="team.html"><img
                                                                src="images/logo_3.png" alt=""></a></div>
                                                    <div class="team_name text-left"><a href="team.html">Denver
                                                            Pumas</a></div>
                                                </div>
                                                <div
                                                    class="d-flex flex-xl-row flex-lg-column flex-row align-items-xl-center align-items-lg-end align-items-center justify-content-end">
                                                    <div class="team_name text-right order-xl-1 order-lg-2 order-1"><a
                                                            href="team.html">The Tigers</a></div>
                                                    <div class="team_logo order-xl-2 order-lg-1 order-2"><a
                                                            href="team.html"><img src="images/logo_2.png"
                                                                alt=""></a></div>
                                                </div>
                                            </div>
                                            <div class="latest_games_date"><a href="#">August 25, 2018 / 17
                                                    UTC</a></div>
                                        </li>
                                        <li>
                                            <div class="latest_games_score">7 : 5</div>
                                            <div
                                                class="latest_games_teams d-flex flex-row align-items-start justify-content-start">
                                                <div
                                                    class="d-flex flex-xl-row flex-lg-column flex-row align-items-xl-center align-items-lg-start align-items-center justify-content-start">
                                                    <div class="team_logo"><a href="team.html"><img
                                                                src="images/logo_2.png" alt=""></a></div>
                                                    <div class="team_name text-left"><a href="team.html">New
                                                            Tigers</a></div>
                                                </div>
                                                <div
                                                    class="d-flex flex-xl-row flex-lg-column flex-row align-items-xl-center align-items-lg-end align-items-center justify-content-end">
                                                    <div class="team_name text-right order-xl-1 order-lg-2 order-1"><a
                                                            href="team.html">The Eagles</a></div>
                                                    <div class="team_logo order-xl-2 order-lg-1 order-2"><a
                                                            href="team.html"><img src="images/logo_5.png"
                                                                alt=""></a></div>
                                                </div>
                                            </div>
                                            <div class="latest_games_date"><a href="#">August 25, 2018 / 17
                                                    UTC</a></div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="categories">
                                    <div class="sidebar_title_container">
                                        <div class="sidebar_title">
                                            <h3>categories</h3>
                                        </div>
                                        <div class="sidebar_subtitle">Results</div>
                                    </div>
                                    <div class="categories_list">
                                        <ul>
                                            <li><a href="#">Games</a></li>
                                            <li><a href="#">About the team</a></li>
                                            <li><a href="#">Press Release</a></li>
                                            <li><a href="#">Football</a></li>
                                            <li><a href="#">Uncategorized</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="latest_posts">
                                    <div class="sidebar_title_container">
                                        <div class="sidebar_title">
                                            <h3>latest posts</h3>
                                        </div>
                                        <div class="sidebar_subtitle">Results</div>
                                    </div>
                                    <div class="latest_posts_container">

                                        <div
                                            class="latest_post d-flex flex-row align-items-start justify-content-start">
                                            <div class="latest_post_image"><a href="#"><img
                                                        src="images/latest_1.jpg" alt=""></a></div>
                                            <div class="latest_post_content">
                                                <div class="latest_post_date"><a href="#">Sept 10</a></div>
                                                <div class="latest_post_title"><a href="#">3 New transfers for
                                                        this summer</a></div>
                                            </div>
                                        </div>

                                        <div
                                            class="latest_post d-flex flex-row align-items-start justify-content-start">
                                            <div class="latest_post_image"><a href="#"><img
                                                        src="images/latest_2.jpg" alt=""></a></div>
                                            <div class="latest_post_content">
                                                <div class="latest_post_date"><a href="#">Sept 10</a></div>
                                                <div class="latest_post_title"><a href="#">T-shirt release press
                                                        conference</a></div>
                                            </div>
                                        </div>

                                        <div
                                            class="latest_post d-flex flex-row align-items-start justify-content-start">
                                            <div class="latest_post_image"><a href="#"><img
                                                        src="images/latest_3.jpg" alt=""></a></div>
                                            <div class="latest_post_content">
                                                <div class="latest_post_date"><a href="#">Sept 10</a></div>
                                                <div class="latest_post_title"><a href="#">3 New transfers for
                                                        this summer</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tickets">
                                    <div class="background_image" style="background-image:url(images/tickets.jpg)">
                                    </div>
                                    <div class="tickets_content text-center">
                                        <div class="tickets_title">Buy Tickets</div>
                                        <div class="tickets_subtitle">See The Tigers Play</div>
                                        <div class="tickets_logo"><img src="images/logo.png" alt=""></div>
                                        <div class="button tickets_button"><a href="#">Get tickets now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row page_nav_row">
                    <div class="col">
                        <div class="page_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <li class="active"><a href="#">01.</a></li>
                                <li><a href="#">02.</a></li>
                                <li><a href="#">03.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="footer_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 order-lg-1 order-3">
                            <div
                                class="footer_image d-flex flex-column align-items-lg-start align-items-center justify-content-end">
                                <div><img src="images/footer.png" alt=""></div>
                            </div>
                        </div>
                        <div class="col-lg-3 order-lg-2 order-1">
                            <div class="footer_contact_info">
                                <div class="footer_logo"><a href="#"><img src="images/footer_logo.png"
                                            alt=""></a></div>
                                <div class="footer_contact_list">
                                    <ul>
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div>Address</div>
                                            <div>245 Principe Lane Avila Beach, USA</div>
                                        </li>
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div>Phone</div>
                                            <div>+36 345 7953 4994</div>
                                        </li>
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div>E-mail</div>
                                            <div><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="91e8fee4e3fcf0f8fdd1f6fcf0f8fdbff2fefc">[email&#160;protected]</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-3 order-2">
                            <div class="newsletter">
                                <div class="newsletter_title">Subscribe to newsletter</div>
                                <div class="newsletter_form_container">
                                    <form action="#" class="newsletter_form" id="newsletter_form">
                                        <div class="d-flex flex-row align-items-start justify-content-start">
                                            <input type="email" class="newsletter_input"
                                                placeholder="Your e-mail address" required="required">
                                            <button class="newsletter_button">Submit</button>
                                        </div>
                                    </form>
                                    <div class="newsletter_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div
                                class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                                <div class="cr order-md-1 order-2">
                                    Copyright &copy;
                                    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i
                                        class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                        href="https://colorlib.com/" target="_blank">Colorlib</a>
                                </div>
                                <nav class="footer_nav ml-md-auto order-md-2 order-1">
                                    <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <li><a href="index-2.html">Home</a></li>
                                        <li><a href="team.html">The Team</a></li>
                                        <li><a href="#">Tickets</a></li>
                                        <li><a href="blog.html">News</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="styles/bootstrap-4.1.2/popper.js"></script>
    <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/progressbar/progressbar.min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/blog.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996"
        integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ=="
        data-cf-beacon='{"rayId":"7b417012599887a7","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/sportsteam/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 10:04:03 GMT -->

</html>
