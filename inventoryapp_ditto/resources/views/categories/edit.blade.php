@extends('layouts.master')
@section('title')
    Edit Categories
@endsection

@section('content')
<form action="/categories/{{$categories->id}}" method="POST">
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
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{$categories->name}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" cols="30" rows="10">{{$categories->description}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection