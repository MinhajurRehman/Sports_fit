@extends('Admins.header.main')

@section('main-container')
<div>
    <h1>{{ $title }} </h1>
</div>
<form action="{{ $url }}" method="post" enctype='multipart/form-data'>
    @csrf
    <label for="Event-image">Product Image</label>
    <input type="file" id="product" name="product">
    <input type="text" id="productname" name="productname" placeholder="Name of Product">
    <input type="text" id="productprice" name="productprice" placeholder="Price of product">
    <input type="submit" value="submit">


</form>
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

    label {
        font-weight: bold;
        margin-top: 10px;
    }

    input[type="text"],
    input[type="date"],
    input[type="file"] {
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
