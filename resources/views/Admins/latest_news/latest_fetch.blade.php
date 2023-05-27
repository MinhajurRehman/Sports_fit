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
                    <a href="{{ url('news/get') }}">
                        <button class="btn btn-block btn-info d-inline-block">
                            <b> Add</b>
                        </button>
                    </a>

                </div>

                <tr>
                    {{-- th = Table head --}}

                    <th><b>Latest News Image</b></th>
                    <th><b>latest title</b></th>
                    <th><b>latest date</b></th>
                    <th><b>latest month</b></th>
                    <th><b>Short Bio</b></th>
                    <th><b>Delete</b></th>
                    <th><b>Edit</b></th>
                </tr>
            </thead>
            {{-- Foreach loop using to create and view data --}}
            @foreach ($latest_news as $news)
                {{-- tr = table row --}}
                <tr>
                    {{-- td = Table data --}}
                    <td><img src="{{ asset($news->img4) }}" height="30px"></td>
                    <td>{{ $news->ltitle }}</td>
                    <td>{{ $news->ldate }}</td>
                    <td>{{ $news->month }}</td>
                    <td>{{ $news->Bio }}</td>
                    <td>
                        <a href="{{ route('news.delete', ['id' => $news->id]) }}"><button
                                class="btn btn-danger">Delete</button></a>
                    </td>
                    <td>
                        <a href="{{ route('news.edit', ['id' => $news->id]) }}"><button
                                class="btn btn-success">Edit</button></a>
                    </td>
                </tr>
            @endforeach
            {{-- Close Foreach loop --}}
        </table>
    </div>
@endsection
