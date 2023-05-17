@extends('Admins.header.main')

@section('main-container')
    <div class="container">
        {{-- Heading --}}
        <h1 style="text-align: center; color:black;">Event details</h1>
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

                    <th><b>img</b></th>
                    <th><b>eventtitle</b></th>
                    <th><b>eventdate</b></th>
                    <th><b>Delete</b></th>
                    <th><b>Edit</b></th>
                </tr>
            </thead>
            {{-- Foreach loop using to create and view data --}}
            @foreach ($upcoming_events as $upcoming_events)
                {{-- tr = table row --}}
                <tr>
                    {{-- td = Table data --}}
                    <td><img src="{{ $upcoming_events->img }}"></td>
                    <td>{{ $upcoming_events->eventtitle }}</td>
                    <td>{{ $upcoming_events->eventdate }}</td>
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
