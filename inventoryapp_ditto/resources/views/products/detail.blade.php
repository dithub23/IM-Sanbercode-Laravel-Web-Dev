@extends('layouts.master')
@section('title', 'Detail Products')

@section('content')

    <img src="{{asset('image/'.$products->image)}}" width="10%" class="card-img-top mb-3" alt="">
    <h1 class="text-primary">{{$products->name}}</h1>
    <p>{{$products->description}}</p>
    <p>Stock: {{$products->stock}}</p>
    <p>Price: {{$products->price}}</p>

    <a href="/products" class="btn btn-secondary my-3">Kembali</a>
@endsection