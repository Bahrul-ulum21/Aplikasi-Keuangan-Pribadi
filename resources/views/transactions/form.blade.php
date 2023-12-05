<!-- resources/views/transactions/form.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ isset($transaction) ? 'Edit Transaction' : 'Add Transaction' }}</h2>
        <form action="{{ isset($transaction) ? route('transactions.update', $transaction->id) : route('transactions.store') }}" method="post">
            @csrf
            @if(isset($transaction))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date', isset($transaction) ? $transaction->date : '') }}" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" value="{{ old('amount', isset($transaction) ? $transaction->amount : '') }}" required>
            </div>
            <div class="mb-3">
                <label for="in_out" class="form-label">Type</label>
                <select class="form-control" id="in_out" name="in_out" required>
                    <option value="1" {{ old('in_out', isset($transaction) && $transaction->in_out ? 'selected' : '') }}>Pemasukan</option>
                    <option value="0" {{ old('in_out', isset($transaction) && !$transaction->in_out ? 'selected' : '') }}>Pengeluaran</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', isset($transaction) ? $transaction->description : '') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="">Uncategorized</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', isset($transaction) && $transaction->category_id == $category->id ? 'selected' : '') }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

