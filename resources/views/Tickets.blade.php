@extends('Both.abc')
@section('main-container')
    <div class="home d-flex flex-column align-items-start justify-content-end">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg"
            data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="home_text"><span>tickets</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="contact_content">
                        <div class="contact_title">BUY EVENTS TICKET</div>

                        <div class="contact_form_container">
                            <form method="post" class="contact_form" id="contact_form">
                                @csrf
                                <input type="text" name="name" class="contact_input" placeholder="Name"
                                    required="required">
                                <input type="email" name="email" class="contact_input" placeholder="Mail"
                                    required="required">
                                    <p style="color:red;">
                                 *if you are member then enter your membership # otherwise dont fill it
                                    </p>
                                <input type="text" name="membership" class="contact_input" placeholder="Membership No">
                                <label for="Event">Choose a event:</label>
                                <select id="event" name="event">
                                    <option value="Cricket_Tournament">Cricket Tournament</option>
                                    <option value="Ruby_Tournament">Ruby Tournament</option>
                                </select>
                                <label for="payment">Choose a payment method:</label>
                                <select id="payment" name="payment">
                                    <option value="bank Transfer">bank Transfer</option>
                                </select>
                                <br>
                                <input type="submit" class="btn btn-success btn-block">
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
                                    <div>Wah cantt</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>Phone</div>
                                    <div>+92 345 7953</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>E-mail</div>
                                    <div><a href="https://www.linkedin.com/in/minhaj-ur-rehman-21502417a/">[email
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
                                    <div>Wah cantt</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>Phone</div>
                                    <div>+92 345 7953</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>E-mail</div>
                                    <div><a href="https://www.linkedin.com/in/minhaj-ur-rehman-21502417a/">[email
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
                                    <div>Wah cantt</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>Phone</div>
                                    <div>+92 345 7953</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>E-mail</div>
                                    <div><a href="https://www.linkedin.com/in/minhaj-ur-rehman-21502417a/">[email
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
