@extends('layouts.master')
@section('title', 'Edit Product')

@section('content')
<form action="/products/{{$products->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
{{-- Error Validation --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Inputan Form --}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" name="name" class="form-control" value="{{old('name', $products->name)}}">    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Change Image</label>
    <input type="file" name="image" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Product Description</label>
    <textarea name="description" class="form-control" cols="30" rows="10">{{old('description', $products->description)}}</textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input type="number" name="price" class="form-control" value="{{old('price', $products->price)}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stock</label>
    <input type="number" name="stock" class="form-control" value="{{old('stock', $products->stock)}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Categories</label>
    <option value="">-- Select Categories --</option>
    <select name="category_id" class="form-select">
        @forelse ($categories as $item)
            @if ($item->id == $products->category_id)
                <option value="{{$item->id}}" selected>{{$item->name}}</option>
            @else
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endif
        @empty
            <option value="">No Categories Available</option>
        @endforelse
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection 