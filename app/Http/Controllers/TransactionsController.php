<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Category;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('transactions.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|string',
            'amount' => 'required|numeric',
            'in_out' => 'required|boolean',
            'description' => 'required|string',
            'category_id' => 'nullable|exists:tbl_categories,id',
        ]);

        $transaction = new Transaction([
            'date' => $request->input('date'),
            'amount' => $request->input('amount'),
            'in_out' => $request->input('in_out'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'creator_id' => auth()->id(),
        ]);

        $transaction->save();

        return redirect()->route('transactions.index')->with('success', 'Transaction created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        $categories = Category::all();
        return view('transactions.edit', compact('transaction', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'date' => 'required|string',
            'amount' => 'required|numeric',
            'in_out' => 'required|boolean',
            'description' => 'required|string',
            'category_id' => 'nullable|exists:tbl_categories,id',
        ]);

        $transaction->date = $request->input('date');
        $transaction->amount = $request->input('amount');
        $transaction->in_out = $request->input('in_out');
        $transaction->description = $request->input('description');
        $transaction->category_id = $request->input('category_id');
        $transaction->save();

        return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully');
    }
}
