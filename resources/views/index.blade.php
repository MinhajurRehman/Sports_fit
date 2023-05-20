@extends('Both.abc')
@section('main-container')
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


    <div class="milestones">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/milestones.jpg"
            data-speed="0.8"></div>
        <div class="container">
            <div class="row milestones_row">

                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-start justify-content-start">
                        <div class="milestone_icon"><img src="images/icon_1.svg"
                                alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="23" data-sign-after="k">0</div>
                            <div class="milestone_title">Team players</div>
                            <div class="milestone_subtitle">Lorem ipsum dolor sit amet,</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-start justify-content-start">
                        <div class="milestone_icon"><img src="images/icon_2.svg"
                                alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="120">0</div>
                            <div class="milestone_title">Trophies</div>
                            <div class="milestone_subtitle">Lorem ipsum dolor sit amet,</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-start justify-content-start">
                        <div class="milestone_icon"><img src="images/icon_3.svg"
                                alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="7">0</div>
                            <div class="milestone_title">Medals</div>
                            <div class="milestone_subtitle">Lorem ipsum dolor sit amet,</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-start justify-content-start">
                        <div class="milestone_icon"><img src="images/icon_4.svg"
                                alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="36">0</div>
                            <div class="milestone_title">Kicks/Match</div>
                            <div class="milestone_subtitle">Lorem ipsum dolor sit amet,</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="upcoming_latest">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="section_title_container">
                        <div class="section_title light">
                            <h1>upcoming events</h1>
                        </div>
                        <div class="section_subtitle">What's next this month</div>
                    </div>

                    <div class="custom_list_a">
                        <div class="upcoming_image"><img src="" alt=""></div>
                        <ul>
                            @foreach ($upcoming_events as $upcomming)
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="custom_list_image"><img src="{{ asset($upcomming->img) }}"
                                            alt="">
                                    </div>
                                    <div class="custom_list_title_container">
                                        <div class="custom_list_title"><a
                                                href="blog.html">{{ $upcomming->eventtitle }}</a>
                                        </div>
                                        <div class="custom_list_date">{{ $upcomming->eventdate }}</div>
                                    </div>
                                    <div class="custom_list_link ml-auto"><a href="{{ url('/tickets') }}">BUY</a></div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>


                <div class="col-xl-6 custom_lists_col">
                    <div class="section_title_container">
                        <div class="section_title light">
                            <h1>latest games</h1>
                        </div>
                        <div class="section_subtitle">Results</div>
                    </div>
                    <div class="custom_list_b">
                        <ul>
                            @foreach ($latest_games as $latestgames)
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="d-flex flex-row align-items-center justify-content-start">

                                        <div
                                            class="team_logo d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{ asset($latestgames->img_1) }}" alt="">
                                        </div>
                                        <div class="team_name"><a href="team.html">{{ $latestgames->team1title }}</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div>{{ $latestgames->matchtitle }}</div>
                                        <div>{{ $latestgames->team1score }} : {{ $latestgames->team2score }}</div>
                                        <div>{{ $latestgames->matchdate }}</div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center justify-content-end">
                                        <div class="team_name text-right"><a
                                                href="team.html">{{ $latestgames->team2title }}</a></div>
                                        <div
                                            class="team_logo d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{ asset($latestgames->img_2) }}" alt="">
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="player">
        <div class="container" id="about-section">
            <div class="row">
                <div class="col-xl-6">
                    <div class="player_content">
                        <div class="section_title_container">
                            <div class="section_title">
                                <h1>the tigers</h1>
                            </div>
                            <div class="player_name">mission&vision</div>
                        </div>


                        <div class="player_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id
                                enim lacinia, sed feugiat ex suscipit. Nunc molestie malesuada pellentesque.
                                Quisque mattis ante ut nisl tristique ornare. Aenean interdum dictum augue, quis
                                egestas erat lacinia in. Proin dictum commodo nulla ut mattis. Pellentesque vel
                                commodo nisi. Donec eget purus eget ex efficitur tristique. Nulla ut mollis
                                justo.</p>
                            <p>Nam turpis nulla, ullamcorper volutpat faucibus ut, facilisis in elit. Nam
                                blandit diam vel felis porta, vitae congue nulla feugiat. Vestibulum rhoncus
                                odio elit, at aliquet sem posuere vel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="player_images d-flex flex-row align-items-end justify-content-start">
                        <img src="images/about_1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news">
        <div class="container" id="latest-news">
            <div class="row">
                <div class="col">
                    <div class="section_title_container">
                        <div class="section_title">
                            <h1>latest news</h1>
                        </div>
                        <div class="section_subtitle">What's next this month</div>
                    </div>
                </div>
            </div>
            <div class="row news_row">

                <div class="col-lg-4">
                    <div class="news_post">
                        <div class="news_post_image">
                            <img src="images/news_1.jpg" alt="">
                            <div class="news_post_date">
                                <a href="#">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div>10</div>
                                        <div>sept</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="news_post_content">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li><a href="blog.html">News</a></li>
                                </ul>
                            </div>
                            <div class="news_post_title"><a href="blog.html">T-shirt release date</a></div>
                            <div class="news_post_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id
                                    enim lacinia, sed feugiat ex suscipit.</p>
                            </div>
                            <br>
                            <div class="custom_list_link"><a href="blog.html">Buy Tickets</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="news_post">
                        <div class="news_post_image">
                            <img src="images/news_2.jpg" alt="">
                            <div class="news_post_date">
                                <a href="#">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div>10</div>
                                        <div>sept</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="news_post_content">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li><a href="blog.html">News</a></li>
                                </ul>
                            </div>
                            <div class="news_post_title"><a href="blog.html">Junior league Openings</a></div>
                            <div class="news_post_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id
                                    enim lacinia, sed feugiat ex suscipit.</p>
                            </div>
                            <br>
                            <div class="custom_list_link"><a href="blog.html">Buy Tickets</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="news_post">
                        <div class="news_post_image">
                            <img src="images/news_3.jpg" alt="">
                            <div class="news_post_date">
                                <a href="#">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div>10</div>
                                        <div>sept</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="news_post_content">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li><a href="blog.html">News</a></li>
                                </ul>
                            </div>
                            <div class="news_post_title"><a href="blog.html">The summer transfers</a></div>
                            <div class="news_post_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id
                                    enim lacinia, sed feugiat ex suscipit.</p>
                            </div>
                            <br>
                            <div class="custom_list_link"><a href="blog.html">Buy Tickets</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta">
        <div class="container" id="join">
            <div class="row">
                <div class="col">
                    <div
                        class="cta_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                        <div class="cta_text">Would you like to join our <span>SPORTS CLUB?</span></div>
                        <div class="cta_button button ml-md-auto"><a href="{{ url('/membership') }}">See More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
