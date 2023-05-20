@extends('Admins.header.main')

@section('main-container')
    <div class="con">
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
                <option value="Choose Payment Method">Choose Payment Method</option>
                <option value="Easypaisa">Easypaisa</option>
                <option value="Banktransfer">Banktransfer</option>
            </select>
            <label for="payment">Show Package payment:</label>
            <input type="text" name="pay" id="payment" readonly>
            <input type="submit" value="submit">


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
    <style>
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
