@extends('layouts.master')
@section('title')
    Detail Categories
@endsection

@section('content')
    <h1 class="text-primary">{{$categories->name}}</h1>
    <p>{{$categories->description}}</p>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Deskripsi Produk</th>
                <th scope="col">Stok</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories->products as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->stock }}</td>
                <td>{{ $item->price }}</td>
                <td>
                    <form action="/products/{{$item->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <a href="/products/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/products/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit", class="btn btn-danger btn-sm" value="Delete">
                    </form>
            </tr>

            @empty
            <tr>
                <td colspan="4" class="text-center">There are currently no products available in this category. </td>
            </tr>
            @endforelse
        </tbody>

    <a href="/categories" class="btn btn-secondary my-3">Kembali</a>
@endsection