<html>

<head>
    <title>Sports Team</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sports Team template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
</head>

<body>
    <!--Trigger-->
    <a class="login-trigger" href="#" data-target="#login" data-toggle="modal">Login</a>

    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-body">
                    <button data-dismiss="modal" class="close">&times;</button>
                    <h4>Login</h4>
                    <form>
                        <input type="text" name="username" class="username form-control" placeholder="Username" />
                        <input type="password" name="password" class="password form-control" placeholder="password" />
                        <input class="btn login" type="submit" value="Login" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

{{-- CSS --}}
<style>
    body {
        height: 100vh;
        text-align: center;
    }

    /*Trigger Button*/
    .login-trigger {
        font-weight: bold;
        color: #fff;
        background: linear-gradient(to bottom right, #B05574, #F87E7B);
        padding: 15px 30px;
        border-radius: 30px;
        position: relative;
        top: 50%;
    }

    /*Modal*/
    h4 {
        font-weight: bold;
        color: #fff;
    }

    .close {
        color: #fff;
        transform: scale(1.2)
    }

    .modal-content {
        font-weight: bold;
        background: linear-gradient(to bottom right, #F87E7B, #B05574);
    }

    .form-control {
        margin: 1em 0;
    }

    .form-control:hover,
    .form-control:focus {
        box-shadow: none;
        border-color: #fff;
    }

    .username,
    .password {
        border: none;
        border-radius: 0;
        box-shadow: none;
        border-bottom: 2px solid #eee;
        padding-left: 0;
        font-weight: normal;
        background: transparent;
    }

    .form-control::-webkit-input-placeholder {
        color: #eee;
    }

    .form-control:focus::-webkit-input-placeholder {
        font-weight: bold;
        color: #fff;
    }

    .login {
        padding: 6px 20px;
        border-radius: 20px;
        background: none;
        border: 2px solid #FAB87F;
        color: #FAB87F;
        font-weight: bold;
        transition: all .5s;
        margin-top: 1em;
    }

    .login:hover {
        background: #FAB87F;
        color: #fff;
    }
</style>
