@extends('Admins.header.main')

@section('main-container')
<div class="container">
    {{-- Heading --}}
    <h1 style="text-align: center; color:black;">Products</h1>
    {{-- Table --}}


    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        {{-- Table head heading that Stable in position --}}
        <thead>
            {{-- tr = table row --}}
            <div style="padding-bottom: 30px;">
                <a href="{{ url('product/get') }}">
                    <button class="btn btn-block btn-info d-inline-block">
                        <b> Add</b>
                    </button>
                </a>

            </div>

            <tr>
                {{-- th = Table head --}}

                <th><b>product image</b></th>
                <th><b>product name</b></th>
                <th><b>product price</b></th>
                <th><b>Delete</b></th>
                <th><b>Edit</b></th>
            </tr>
        </thead>
        {{-- Foreach loop using to create and view data --}}
        @foreach ($products as $product)
            {{-- tr = table row --}}
            <tr>
                {{-- td = Table data --}}
                <td><img src="{{ asset($product->product) }}" height="30px"></td>
                <td>{{ $product->productname }}</td>
                <td>{{ $product->productprice }}</td>
                <td>
                    <a href="{{ route('product.delete', ['id' => $product->id]) }}"><button
                            class="btn btn-danger">Delete</button></a>
                </td>
                <td>
                    <a href="{{ route('product.edit', ['id' => $product->id]) }}"><button
                            class="btn btn-success">Edit</button></a>
                </td>
            </tr>
        @endforeach
        {{-- Close Foreach loop --}}
    </table>
</div>




@endsection
