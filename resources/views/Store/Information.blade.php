@extends('Store.ST.M-file')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($products->product) }}" height="30px" />
            </div>
            <div class="col-md-6">
                <h1>{{ $products->productname }}</h1>
                <span>{{ $products->productprice }}</span>
                <p>Product Description</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8 box">
                    <h1>FORM</h1>
                    <form action="" method="post">
                        @csrf
                        <label for="plan">Select a plan:</label>
                        <select id="plan" name="plan" onchange="calculatePayment()">
                            <option value="Basic">Basic</option>
                            <option value="standard">Standard</option>
                            <option value="premium">Premium</option>
                        </select>

                        <input type="text" id="name" name="name" value=""
                            placeholder="Enter Your Full Name">

                        <input type="text" id="address" name="address" value=""
                            placeholder="Enter Your Complete Address">

                        <input type="text" id="contact" name="contact" value=""
                            placeholder="Enter Your Contact Number">

                        <select id="payment_method" name="payment_method" value="">
                            <option value="Banktransfer">Banktransfer</option>
                        </select>
                        <label for="payment">Show Package payment:</label>
                        <input type="text" name="pay" id="payment" readonly>
                        <input type="submit" class="btn btn-default" value="Go to Payment Process">

                    </form>
                </div>
            <div class="col-md-4">
                        <h4><strong>Your Order</strong></h4>
                        <hr>
                        <h5>Product Name <span>ABC</span></h5>
                        <h5>Product Price <span>$45</span></h5>
                        <h5>Delivery charger <span>$10</span></h5>
                        <hr>
                        <h5>Total <span>$55</span></h5>
                       </div>
    </div>
    </div>
    <style>
        .box {
            background-color: transparent;
            border-radius: 10px;

            text-align: center;
            transform: scale(0.95);
            transition: transform 1.8s ease-in-out;
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
