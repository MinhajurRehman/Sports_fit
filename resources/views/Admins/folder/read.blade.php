<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    {{-- Datatables --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- stylesheet CDN's that connected with Internet --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    {{-- DATATABLES --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

</head>
{{-- Called Internal Css --}}
<style>
    body {
        background-color: white;
        margin-top: 20px;
        color: black;
    }

    tr {
        color: black;
    }

    th {
        color: black;
        font-size: 20px;
    }

    /* Jquery class use there with important attribute */
    .dataTables_wrapper .dataTables_length select {
        background-color: black !important;
        color: white !important;
    }
</style>
{{-- Close Internal Css --}}

<body>
    <div class="container">
        {{-- Heading --}}
        <h1 style="text-align: center; color:white;">member_data</h1>
        {{-- Table --}}
        <table class="table table-bordered" id="member_data">
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

                    <th>
                        <a href="{{ url('folder/create') }}">
                            <button class="btn btn-block btn-info d-inline-block">
                                <b> Add</b>
                            </button>
                        </a>
                    </th>
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
                        <a href="{{ route('member.edit', ['id' => $member->id]) }}"><button
                                class="btn btn-success">Edit</button></a>
                    </td>
                </tr>
            @endforeach
            {{-- Close Foreach loop --}}
    </div>
    {{-- Datatables link and script --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#EmpTable').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "INPUT ",
                    searchPlaceholder: "Search",
                }
            });
        });
    </script>
</body>

</html>
