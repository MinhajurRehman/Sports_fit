@extends('Admins.header.main')

@section('main-container')
    <div>
        <h1>{{ $title }} </h1>
    </div>
    <form action="{{ $url }}" method="POST" enctype='multipart/form-data'>
        @csrf
        <label for="Event-image">Event Image</label>
        <input type="file" id="img" name="img">
        <input type="text" id="event-title" name="eventtitle" placeholder="Name of event title">
        <label for="Event-date">Date of Event</label>
        <input type="date" id="event-date" name="eventdate">
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
