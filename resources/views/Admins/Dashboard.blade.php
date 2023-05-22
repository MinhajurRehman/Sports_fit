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
                <img src="{{ url('Admins/images/membership.png') }}" width="99%">

            </div>
            {{-- Container close --}}
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ url('Admins/images/ticket.png') }}" width="80%">

            </div>
            <div class="col-lg-8">
                <h1>BUY Tickets Users Details</h1>
                {{-- Membership Table Data fetch  --}}
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    {{-- Table head heading that Stable in position --}}
                    <thead>
                        {{-- tr = table row --}}

                        <tr>
                            {{-- th = Table head --}}
                            <th><b>ID</b></th>
                            <th><b>name</b></th>
                            <th><b>email</b></th>
                            <th><b>membership No</b></th>
                            <th><b>event Name</b></th>
                            <th><b>payment</b></th>
                        </tr>
                    </thead>
                    {{-- Foreach loop using to create and view data --}}
                    @foreach ($ticket_details as $ticket)
                        {{-- tr = table row --}}
                        <tr>
                            {{-- td = Table data --}}
                            <td>{{ $ticket->id }}</td>
                            <td>{{ $ticket->name }}</td>
                            <td>{{ $ticket->email }}</td>
                            <td>{{ $ticket->membership }}</td>
                            <td>{{ $ticket->event }}</td>
                            <td>{{ $ticket->payment }}</td>
                        </tr>
                    @endforeach
                    {{-- Close Foreach loop --}}
                </table>
            </div>
            {{-- Container close --}}
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8">
                <h1>User Contacts Information</h1>
                {{-- Membership Table Data fetch  --}}
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    {{-- Table head heading that Stable in position --}}
                    <thead>
                        {{-- tr = table row --}}

                        <tr>
                            {{-- th = Table head --}}
                            <th><b>ID</b></th>
                            <th><b>name</b></th>
                            <th><b>email</b></th>
                            <th><b>subject</b></th>
                            <th><b>Message</b></th>
                        </tr>
                    </thead>
                    {{-- Foreach loop using to create and view data --}}
                    @foreach ($contact_details as $contact)
                        {{-- tr = table row --}}
                        <tr>
                            {{-- td = Table data --}}
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->textarea }}</td>
                        </tr>
                    @endforeach
                    {{-- Close Foreach loop --}}
                </table>
            </div>
            <div class="col-lg-4">
                <img src="{{ url('Admins/images/contact.png') }}" width="75%">

            </div>
            {{-- Container close --}}
        </div>
        <hr>
        {{-- main container div close below --}}
    </div>
@endsection
