@extends('layouts.master')

@section('title')
    Transactions
@endsection

@section('content')

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="/transactions/create" class="btn btn-primary btn-sm my-3">
    Create Transactions
</a>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Product Id</th>
            <th>User Id</th>
            <th>Type</th>
            <th>Amount</th>
            <th>Notes</th>
            @if (Auth::check() && Auth::user()->role === 'admin')
                <th>Actions</th>
            @endif
        </tr>
    </thead>

    <tbody>
        @forelse ($transactions as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->product_id }}</td>
                <td>{{ $item->user_id }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->amount }}</td>
                <td>{{ $item->notes }}</td>

                @if (Auth::check() && Auth::user()->role === 'admin')
                    <td>
                        <a href="/transactions/{{ $item->id }}" class="btn btn-warning btn-sm">
                                Update
                        </a>
                    </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center">
                    There are no transactions yet. Start by adding one.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
