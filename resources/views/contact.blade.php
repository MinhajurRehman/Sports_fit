@extends('Both.abc')
@section('main-container')
    <div class="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="contact_content">
                        <div class="contact_title">Get in touch with us</div>
                        <div class="contact_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id
                                enim lacinia, sed feugiat ex suscipit. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit.</p>
                        </div>
                        <div class="contact_form_container">
                            <form method="post" class="contact_form" id="contact_form">
                                @csrf
                                <input type="text" name="name" class="contact_input" placeholder="Name"
                                    required="required">
                                <input type="email" name="email" class="contact_input" placeholder="Mail"
                                    required="required">
                                <input type="text" name="subject" class="contact_input" placeholder="Subject">
                                <textarea class="contact_input contact_textarea" name="textarea" placeholder="Message" required="required"></textarea>
                                <br>
                                <input type="submit" class="btn btn-primary btn-block">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact_image">
                        <div class="background_image" style="background-image:url(images/contact_image.jpg)">
                        </div>
                        <img src="images/contact_image.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row contact_info_row">
                <div class="col-lg-4">
                    <div class="contact_info_container d-flex flex-column align-items-center justify-content-start">
                        <div
                            class="contact_info_icon_container d-flex flex-column align-items-center justify-content-start">
                            <div class="contact_info_icon"><img src="images/icon_6.svg" alt=""></div>
                            <div class="contact_info_title">stadium</div>
                        </div>
                        <div class="contact_info_list">
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
                                    <div><a href="">[email
                                            protected]</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_info_container d-flex flex-column align-items-center justify-content-start">
                        <div
                            class="contact_info_icon_container d-flex flex-column align-items-center justify-content-start">
                            <div class="contact_info_icon"><img src="images/icon_7.svg" alt=""></div>
                            <div class="contact_info_title">main arena</div>
                        </div>
                        <div class="contact_info_list">
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
                                    <div><a href="">[email
                                            protected]</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_info_container d-flex flex-column align-items-center justify-content-start">
                        <div
                            class="contact_info_icon_container d-flex flex-column align-items-center justify-content-start">
                            <div class="contact_info_icon"><img src="images/icon_8.svg" alt=""></div>
                            <div class="contact_info_title">offices</div>
                        </div>
                        <div class="contact_info_list">
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
                                    <div><a href="">[email
                                            protected]</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
