<!-- resources/views/transactions/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Transactions</h2>
        <a href="{{ route('transactions.create') }}" class="btn btn-primary">Add Transaction</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->date }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->in_out ? 'Pemasukan' : 'Pengeluaran' }}</td>
                        <td>{{ $transaction->description }}</td>
                        <td>
                            @if($transaction->category)
                                <span class="category-badge" style="background-color: {{ $transaction->category->color }}">{{ $transaction->category->name }}</span>
                            @else
                                Uncategorized
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('transactions.destroy', $transaction->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
