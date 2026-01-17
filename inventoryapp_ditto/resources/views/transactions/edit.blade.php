@extends('layouts.master')

@section('title')
    Update Transactions
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/transactions/{{ $transaction->id }}" method="POST" class="my-3">
    @csrf
    @method('PUT')

    {{-- Product --}}
    <div class="mb-3">
        <label class="form-label">Product</label>
        <select name="product_id" class="form-select" required>
            <option value="" disabled>-- Select Product --</option>
            @foreach ($products as $product)
                <option value="{{ $product->id }}"
                    {{ $transaction->product_id == $product->id ? 'selected' : '' }}>
                    {{ $product->name }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Type --}}
    <div class="mb-3">
        <label class="form-label">Type</label>
        <select name="type" class="form-select" required>
            <option value="in" {{ $transaction->type == 'in' ? 'selected' : '' }}>In</option>
            <option value="out" {{ $transaction->type == 'out' ? 'selected' : '' }}>Out</option>
        </select>
    </div>

    {{-- Amount --}}
    <div class="mb-3">
        <label class="form-label">Amount</label>
        <input type="number" name="amount" class="form-control"
               value="{{ $transaction->amount }}" min="1" required>
    </div>

    {{-- Notes --}}
    <div class="mb-3">
        <label class="form-label">Notes</label>
        <textarea name="notes" class="form-control" rows="3">{{ $transaction->notes }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary btn-sm">
        Update Transaction
    </button>

    <a href="/transactions" class="btn btn-secondary btn-sm">
        Back
    </a>
</form>

@endsection
