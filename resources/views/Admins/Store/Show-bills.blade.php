@extends('Admins.header.main')

@section('main-container')
<div class="container">
    {{-- Heading --}}
    <h1 style="text-align: center; color:black;">Billing Details</h1>
    {{-- Table --}}


    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        {{-- Table head heading that Stable in position --}}
        <thead>
            {{-- tr = table row --}}

            <tr>
                {{-- th = Table head --}}

                <th><b>Name</b></th>
                <th><b>email</b></th>
                <th><b>contact</b></th>
                <th><b>product name</b></th>
                <th><b>product price</b></th>
                <th><b>payment method</b></th>
            </tr>
        </thead>
        {{-- Foreach loop using to create and view data --}}
        @foreach ($billing as $billings)
            {{-- tr = table row --}}
            <tr>
                {{-- td = Table data --}}
                <td>{{ $billings->name }}</td>
                <td>{{ $billings->email }}</td>
                <td>{{ $billings->contact }}</td>
                <td>{{ $billings->Pname }}</td>
                <td>{{ $billings->Pprice }}</td>
                <td>{{ $billings->payment_method }}</td>
            </tr>
        @endforeach
        {{-- Close Foreach loop --}}
    </table>
</div>




@endsection
