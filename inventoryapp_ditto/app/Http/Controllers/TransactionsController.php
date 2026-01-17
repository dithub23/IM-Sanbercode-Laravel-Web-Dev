<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;


class TransactionsController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        if ($user->role === 'admin') {
            $transactions = Transactions::get();
        } else {
            $transactions = Transactions::where('user_id', $user->id)->get();
        }
        return view('transactions.index', [
            'transactions' => $transactions]);
    }
  
    public function create()
    {
        $products = Products::get();
        return view('transactions.create', ['products' => $products]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id', 
            'type' => 'required|in:in,out',
            'amount' => 'required|integer|min:1',
            'notes' => 'nullable|string',
        ]);  

        $user_id = Auth::id();

        $transactions = new Transactions;
            $transactions->product_id = $request->input('product_id');
            $transactions->user_id = $user_id;
            $transactions->type = $request->input('type');
            $transactions->amount = $request->input('amount');
            $transactions->notes = $request->input('notes');
        $transactions->save();

        $products = Products::find($request->input('product_id'));
        $products->decrement('stock', 1);


        return redirect('/transactions')->with('success', 'Transaction created successfully.');
    }

        public function edit($id)
        {
            $transaction = Transactions::findOrFail($id);
            $products = Products::all();

            return view('transactions.edit', compact('transaction', 'products'));
        }

}
