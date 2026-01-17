@extends('layouts.master')
@section('title', 'List Products')

@section('content')

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@auth
    @if (Auth::check() && Auth::user()->role === 'admin')
        <a href="/products/create" class="btn btn-sm btn-primary my-3">Add Product</a>
    @endif
@endauth

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
    @forelse ($products as $item)
        <div class="col">
            <div class="card h-100 shadow-sm"> <!-- tambah h-100 biar tinggi card sama + shadow biar lebih bagus -->

                @if($item->image)
                    <img src="{{ asset('image/' . $item->image) }}" 
                         style="height: 275px; object-fit: cover;" 
                         class="card-img-top" 
                         alt="{{ $item->name }}">
                @else
                    <!-- fallback jika tidak ada gambar -->
                    <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 275px;">
                        No Image
                    </div>
                @endif

                <div class="card-body d-flex flex-column"> <!-- jadikan flex column -->

                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text text-muted flex-grow-1">
                        {{ Str::limit($item->description, 150) }}
                    </p>

                    <span class="badge bg-secondary text-dark">{{ $item->category->name }}</span>

                    <!-- Tombol Read More - full width -->
                    <div class="d-grid mt-2">
                        <a href="/products/{{ $item->id }}" class="btn btn-primary rounded-1">Read More</a>
                    </div>

                    <!-- Edit & Delete - lebar sama & lurus -->
                    @auth
                    @if (Auth::check() && Auth::user()->role === 'admin')
                    <div class="d-flex gap-2 mt-3">
                        <a href="/products/{{ $item->id }}/edit" 
                           class="btn btn-warning flex-fill rounded-1">Edit</a>
                        
                        <form action="/products/{{ $item->id }}" method="POST" class="flex-fill">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="btn btn-danger w-100 rounded-1"
                                    onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                Delete
                            </button>
                        </form>
                    </div>
                    @endif
                    @endauth

                </div>
            </div>
        </div>
    @empty
        <div class="col">
            <h4 class="text-center my-5">Belum ada produk tersedia</h4>
        </div>
    @endforelse
</div>

@endsection