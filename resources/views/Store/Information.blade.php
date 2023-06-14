@extends('Store.ST.M-file')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($products->product) }}" height="200px" />
            </div>
            <div class="col-md-6">
                <h2><strong>{{ $products->productname }}</strong></h2>
                <span><b>price: </b>{{ $products->productprice }}</span>
                <p><h3>Description</h3> <br> {{ $products->Description }}</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8 box">
                    <h1>Billing</h1>
                    <form method="post">
                        @csrf
                        <input type="text" id="name" name="name"
                            placeholder="Enter Your Full Name">

                        <input type="text" id="email" name="email"
                            placeholder="Enter Your Email address">

                        <input type="text" id="contact" name="contact"
                            placeholder="Enter Your Contact Number">

                        <input type="text" id="contact" name="Pname" value="Product Name : {{ $products->productname }}"
                            placeholder="Enter Your Contact Number" readonly>

                        <input type="text" id="contact" name="Pprice" value="Product price : {{ $products->productprice }}"
                            placeholder="Enter Your Contact Number" readonly>

                        <select id="payment_method" name="payment_method" value="Banktransfer">
                            <option value="Banktransfer">Banktransfer</option>
                        </select>
                        <input type="submit" class="btn btn-default" value="Go to Payment Process">
                    </form>
                </div>
            <div class="col-md-4 order">
                        <h4><strong>Your Order</strong></h4>
                        <hr>
                        <h5>Product Name <span>{{ $products->productname }}</span></h5>
                        <h5>Product Price <span>{{ $products->productprice }}</span></h5>
                        <h5>Delivery charger <span>$10</span></h5>
                        <hr>
                        <h5>Total <span>$55</span></h5>
                       </div>
    </div>
    </div>
    <style>
        .order span{
            float: right;
        }
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
