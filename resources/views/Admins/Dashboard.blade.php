@extends('Admins.header.main')

@section('main-container')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b><i class="fas fa-fw fa-tachometer-alt"></i>DASHBOARD</b></h1>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8">
                <h1>Club Members</h1>
                {{-- Membership Table Data fetch  --}}
                <table class="table" id="dataTable" width="100%" cellspacing="0">
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
                            <th><b>plan payment</b></th>
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
                        </tr>
                    @endforeach
                    {{-- Close Foreach loop --}}
                </table>
            </div>
            <div class="col-lg-4">
                <div class="pie animate" style="--p:20"> 20%</div>
                <div class="pie animate" style="--p:40;--c:darkblue;--b:10px"> 40%</div>
                <div class="pie animate no-round" style="--p:60;--c:purple;--b:15px"> 60%</div>
                <div class="pie animate no-round" style="--p:80;--c:orange;"> 80%</div>

            </div>
            {{-- Container close --}}
        </div>
        <hr>
        {{-- main container div close below --}}
    </div>
@endsection
