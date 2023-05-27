@extends('Admins.header.main')

@section('main-container')
    <div>
        <h1>{{ $title }} </h1>
    </div>
    <form action="{{ $url }}" method="post" enctype='multipart/form-data'>
        @csrf
        <label for="Event-image">Latest News Image</label>
        <input type="file" id="img" name="img4">
        <input type="text" id="title" name="ltitle" placeholder="Name of latest title">
        <input type="text" id="date" name="ldate" placeholder="Enter today date ex: 26">
        <input type="text" id="month" name="month" placeholder="Name of Month in short form like: sept">
        <textarea name="Bio" placeholder="Enter short Bio about news"> </textarea>
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
