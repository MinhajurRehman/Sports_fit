@extends('Admins.header.main')

@section('main-container')
    <div class="container">
        {{-- Heading --}}
        <h1 style="text-align: center; color:black;">Club Members</h1>
        {{-- Table --}}

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            {{-- Table head heading that Stable in position --}}
            <thead>
                {{-- tr = table row --}}

                <tr>
                    {{-- th = Table head --}}
                    <th><b>ID</b></th>
                    <th><b>plan</b></th>
                    <th><b>name</b></th>
                    <th><b>address</b></th>
                    <th><b>contact</b></th>
                    <th><b>payment_method</b></th>
                    <th><b>plan_pay</b></th>
                    <th><b>Delete</b></th>
                    <th><b>Edit</b></th>
                </tr>
            </thead>
            {{-- Foreach loop using to create and view data --}}
            @foreach ($members as $member)
                {{-- tr = table row --}}
                <tr>
                    {{-- td = Table data --}}
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->plan }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->address }}</td>
                    <td>{{ $member->contact }}</td>
                    <td>{{ $member->payment_method }}</td>
                    <td>{{ $member->pay }}</td>
                    <td>
                        <a href="{{ route('member.delete', ['id' => $member->id]) }}"><button
                                class="btn btn-danger">Delete</button></a>
                    </td>
                    <td>
                        <a href="{{ route('member.edit', ['id' => $member->id]) }}"><button
                                class="btn btn-success">Edit</button></a>
                    </td>
                </tr>
            @endforeach
            {{-- Close Foreach loop --}}
        </table>
    </div>
@endsection
