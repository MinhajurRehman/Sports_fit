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
                                        <div>1</div>
                                        <span>MEMBERSHIP</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container">
        <div class="row con">

            <div class="col-md-6">
                <div style="padding-top: 20%";>
                    <div class="c">
                        <div class="card box">
                            <div class="card-body">
                                <h4 class="card-title">Basic Card</h4>
                                <p class="card-text">Some example text. Some example text.</p>
                                <p class="card-text">2500</p>
                            </div>
                        </div>
                    </div>

                    <div class="c">
                        <div class="card box">
                            <div class="card-body">
                                <h4 class="card-title">Standard Card</h4>
                                <p class="card-text">Some example text. Some example text.</p>
                                <p class="card-text">5000</p>
                            </div>
                        </div>
                    </div>
                    <div class="c">
                        <div class="card box">
                            <div class="card-body">
                                <h4 class="card-title">Premium Card</h4>
                                <p class="card-text">Some example text. Some example text.</p>
                                <p class="card-text">10.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="c">
                        <div class="card box">
                            <div class="card-body">
                                <h4 class="card-title">Membership Number generator</h4>
                                <p class="card-text">copy it</p>
                                <button class="btn btn-primary" onclick="gfg();">
                                    click here
                                </button>
                                <p id="geeks">
                                    <script>
                                        var up = document.getElementById('GFG_UP');
                                        var down = document.getElementById('geeks');

                                        function gfg() {
                                            var minm = 10000;
                                            var maxm = 99999;
                                            down.innerHTML = Math.floor(Math
                                                .random() * (maxm - minm + 1)) + minm;
                                        }
                                    </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 box">
                <h1>{{ $title }}</h1>

                <form action="{{ $url }}" method="post">
                    @csrf
                    <label for="plan">Select a plan:</label>
                    <select id="plan" name="plan" onchange="calculatePayment()">
                        <option value="Basic">Basic</option>
                        <option value="standard">Standard</option>
                        <option value="premium">Premium</option>
                    </select>

                    <input type="text" id="name" name="name" value="{{ $members->name }}"
                        placeholder="Enter Your Full Name">

                    <input type="text" id="address" name="address" value="{{ $members->address }}"
                        placeholder="Enter Your Complete Address">

                    <input type="text" id="contact" name="contact" value="{{ $members->contact }}"
                        placeholder="Enter Your Contact Number">

                    <select id="payment_method" name="payment_method" value="{{ $members->payment_method }}">
                        <option value="Banktransfer">Banktransfer</option>
                    </select>
                    <label for="payment">Show Package payment:</label>
                    <input type="text" name="pay" id="payment" readonly>
                    <input type="submit" class="btn btn-default" value="submit">


                </form>
                <script>
                    function calculatePayment() {
                        var plan = document.getElementById("plan").value;
                        var paymentField = document.getElementById("payment");

                        if (plan === "standard") {
                            paymentField.value = "Rs. 5,000";
                        } else if (plan === "premium") {
                            paymentField.value = "Rs. 10,000";
                        } else if (plan === "Basic") {
                            paymentField.value = "Rs. 2,500";
                        }
                    }
                </script>
            </div>
        </div>
    </div>



    <style>
        .box {
            background-color: transparent;
            border-radius: 10px;
            box-shadow: 0 0 10px lightslategray;
            padding: 20px;
            text-align: center;
            padding-right: 40px;
        }

        .box h4,
        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .box p {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
        }

        .box:hover {
            transform: scale(0.95);
            transition: transform 0.5s ease-in-out;
        }

        .c {
            padding-bottom: 30px;
        }

        .con {
            padding-bottom: 5%;
        }

        h1 {
            text-align: center;

        }

        form {
            display: flex;
            flex-direction: column;

            margin: 50px auto;
            max-width: 500px;
        }

        label,
        select,
        option {
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"],
        select,
        option {
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
@endsection
