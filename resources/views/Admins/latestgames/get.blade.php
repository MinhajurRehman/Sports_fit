@extends('Admins.header.main')

@section('main-container')
    <div>
        <h1>{{ $title }} </h1>
    </div>
    <form action="{{ $url }}" method="post" enctype='multipart/form-data'>
        @csrf
        <label for="team1image">Team One Logo</label>
        <input type="file" id="team1image" name="img_1">

        <input type="text" id="team1title" name="team1title" placeholder="Title of Team 1">

        <input type="text" id="team1score" name="team1score" placeholder="Score of Team 1">

        <input type="text" id="macthtitle" name="matchtitle" placeholder="Match Title eg: Cricket , Football etc">

        <label for="matchdate">Date of Match</label>
        <input type="date" id="matchdate" name="matchdate">

        <label for="team2image">Team Two Logo</label>
        <input type="file" id="team2image" name="img_2">


        <input type="text" id="team2title" name="team2title" placeholder="Title of Team 2">

        <input type="text" id="team2score" name="team2score" placeholder="Score of Team 2">




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
