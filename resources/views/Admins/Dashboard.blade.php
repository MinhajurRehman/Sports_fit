@extends('Admins.header.main')

@section('main-container')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>DASHBOARD</b></h1>
        </div>
        <div class="row">
            <div class="col-lg-8">
                {{-- Membership Table Data fetch  --}}
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    {{-- Table head heading that Stable in position --}}
                    <thead>
                        {{-- tr = table row --}}

                        <tr>
                            {{-- th = Table head --}}
                            <th><b>ID</b></th>
                            <th><b>name</b></th>
                            <th><b>address</b></th>
                            <th><b>contact</b></th>
                            <th><b>payment_method</b></th>
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
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->address }}</td>
                            <td>{{ $member->contact }}</td>
                            <td>{{ $member->payment_method }}</td>
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
            <div class="col-lg-4">
                <div class="pie animate" style="--p:20"> 20%</div>
                <div class="pie animate" style="--p:40;--c:darkblue;--b:10px"> 40%</div>
                <div class="pie animate no-round" style="--p:60;--c:purple;--b:15px"> 60%</div>
                <div class="pie animate no-round" style="--p:80;--c:orange;"> 80%</div>
                <style>
                    @property --p {
                        syntax: '<number>';
                        inherits: true;
                        initial-value: 0;
                    }

                    .pie {
                        --p: 20;
                        --b: 22px;
                        --c: darkred;
                        --w: 150px;

                        width: var(--w);
                        aspect-ratio: 1;
                        position: relative;
                        display: inline-grid;
                        margin: 5px;
                        place-content: center;
                        font-size: 25px;
                        font-weight: bold;
                        font-family: sans-serif;
                    }

                    .pie:before,
                    .pie:after {
                        content: "";
                        position: absolute;
                        border-radius: 50%;
                    }

                    .pie:before {
                        inset: 0;
                        background:
                            radial-gradient(farthest-side, var(--c) 98%, #0000) top/var(--b) var(--b) no-repeat,
                            conic-gradient(var(--c) calc(var(--p)*1%), #0000 0);
                        -webkit-mask: radial-gradient(farthest-side, #0000 calc(99% - var(--b)), #000 calc(100% - var(--b)));
                        mask: radial-gradient(farthest-side, #0000 calc(99% - var(--b)), #000 calc(100% - var(--b)));
                    }

                    .pie:after {
                        inset: calc(50% - var(--b)/2);
                        background: var(--c);
                        transform: rotate(calc(var(--p)*3.6deg)) translateY(calc(50% - var(--w)/2));
                    }

                    .animate {
                        animation: p 1s .5s both;
                    }

                    .no-round:before {
                        background-size: 0 0, auto;
                    }

                    .no-round:after {
                        content: none;
                    }

                    @keyframes p {
                        from {
                            --p: 0
                        }
                    }

                    body {
                        background: #ddd;
                    }
                </style>

            </div>
            {{-- Container close --}}
        </div>
    </div>
@endsection
