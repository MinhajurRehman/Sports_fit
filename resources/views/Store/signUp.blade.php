<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-*-*">
                    <!-- Sign up form -->
                    <section class="signup">
                        <div class="container">
                            <div class="signup-content">
                                <div class="signup-form">
                                    <h2 class="form-title">Sign up</h2>

                                    <form method="post" class="register-form" id="register-form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name"><i
                                                    class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="name" id="name"
                                                placeholder="Your Name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                                            <input type="email" name="email" id="email"
                                                placeholder="Your Email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="password" name="pass" id="pass"
                                                placeholder="Password" />
                                        </div>
                                        <div class="form-group">
                                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                            <input type="password" name="re_pass" id="re_pass"
                                                placeholder="Repeat your password" />
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="agreeterm" id="agree-term"
                                                class="agree-term" />
                                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I
                                                agree
                                                all
                                                statements in <a href="#" class="term-service">Terms of
                                                    service</a></label>
                                        </div>
                                        <div class="form-group form-button">
                                            <input type="submit" name="signup" id="signup" class="form-submit"
                                                value="Register" />
                                        </div>
                                    </form>
                                </div>
                                <div class="signup-image">
                                    <figure><img src="images/logo.png" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
