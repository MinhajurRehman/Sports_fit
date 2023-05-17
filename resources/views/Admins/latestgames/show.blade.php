@extends('Admins.header.main')

@section('main-container')
    <div class="container">
        {{-- Heading --}}
        <h1 style="text-align: center; color:black;">match data</h1>
        {{-- Table --}}


        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            {{-- Table head heading that Stable in position --}}
            <thead>
                {{-- tr = table row --}}
                <div style="padding-bottom: 30px;">
                    <a href="{{ url('latestgames/get') }}">
                        <button class="btn btn-block btn-info d-inline-block">
                            <b> Add</b>
                        </button>
                    </a>

                </div>

                <tr>
                    {{-- th = Table head --}}

                    <th><b>img_1</b></th>
                    <th><b>team1title</b></th>
                    <th><b>team1score</b></th>
                    <th><b>matchtitle</b></th>
                    <th><b>matchdate</b></th>
                    <th><b>img_2</b></th>
                    <th><b>team2title</b></th>
                    <th><b>team2score</b></th>
                    <th><b>Delete</b></th>
                    <th><b>Edit</b></th>
                </tr>
            </thead>
            {{-- Foreach loop using to create and view data --}}
            @foreach ($latest_games as $latestgames)
                {{-- tr = table row --}}
                <tr>
                    {{-- td = Table data --}}
                    <td><img src="{{ $latestgames->img_1 }}"></td>
                    <td>{{ $latestgames->team1title }}</td>
                    <td>{{ $latestgames->team1score }}</td>
                    <td>{{ $latestgames->matchtitle }}</td>
                    <td>{{ $latestgames->matchdate }}</td>
                    <td><img src="{{ $latestgames->img_2 }}"></td>
                    <td>{{ $latestgames->team2title }}</td>
                    <td>{{ $latestgames->team2score }}</td>
                    <td>
                        <a href="{{ route('latestgames.delete', ['id' => $latestgames->id]) }}"><button
                                class="btn btn-danger">Delete</button></a>
                    </td>
                    <td>
                        <a href="{{ route('latestgames.edit', ['id' => $latestgames->id]) }}"><button
                                class="btn btn-success">Edit</button></a>
                    </td>
                </tr>
            @endforeach
            {{-- Close Foreach loop --}}
        </table>
    </div>
@endsection
