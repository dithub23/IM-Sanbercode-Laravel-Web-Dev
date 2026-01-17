@extends('layouts.master')
@section('title', 'Create Transactions')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9 col-md-11 col-12">

            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                
                <div class="card-header bg-gradient-primary text-white py-5 text-center">
                    <h3 class="mb-1 fw-bold fs-5">Create Transactions</h3>
                    <p class="mb-0 fs-2 text-muted">Create your transactions product</p>
                </div>

                <div class="card-body p-5 p-md-5">

                    <a href="{{ url()->previous() }}" class="btn btn-link text-decoration-none mb-4 d-inline-block">
                        ← Back
                    </a>

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show mb-5">
                            <strong>Oops! Ada kesalahan:</strong>
                            <ul class="mb-0 mt-2 ps-4">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ url('/transactions') }}" method="POST">
                        @csrf

                        {{-- PRODUCT --}}
                        <div class="mb-3">
                            <label class="form-label">Product</label>
                            <select name="product_id" class="form-select">
                                <option value="" disabled selected>-- Select Product --</option>
                                @forelse($products as $product)
                                    <option value="{{ $product->id }}">
                                        {{ $product->name }}
                                    </option>
                                @empty
                                    <option value="" disabled>No Products Available</option>
                                @endforelse
                            </select>
                        </div>

                        {{-- USER INFO (TEXT ONLY) --}}
                        <div class="mb-3">
                            <label class="form-label">User</label>
                            <div class="form-control bg-light">
                                User ID Anda saat ini:
                                <strong>{{ auth()->user()->id }}</strong>
                                ({{ auth()->user()->name }})
                            </div>
                        </div>

                        {{-- TYPE --}}
                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <select name="type" class="form-select">
                                <option value="" disabled selected>-- Select Type --</option>
                                <option value="in">In</option>
                                <option value="out">Out</option>
                            </select>
                        </div>

                        {{-- AMOUNT --}}
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control" value="{{ old('amount') }}">
                        </div>

                        {{-- NOTES --}}
                        <div class="mb-3">
                            <label class="form-label">Notes</label>
                            <input type="text" name="notes" class="form-control" value="{{ old('notes') }}">
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2 mt-4">
                            Create Transaction
                        </button>

                    </form>

                </div>
            </div>

        </div>   
    </div>
</div>

@endsection
