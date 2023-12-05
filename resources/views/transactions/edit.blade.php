<!-- resources/views/transactions/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Transaction</h2>
        <form method="POST" action="{{ route('transactions.update', $transaction->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $transaction->date }}">
            </div>

            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" name="amount" id="amount" class="form-control" value="{{ $transaction->amount }}">
            </div>

            <div class="form-group">
                <label for="in_out">Type:</label>
                <select name="in_out" id="in_out" class="form-control">
                    <option value="1" {{ $transaction->in_out == 1 ? 'selected' : '' }}>Income</option>
                    <option value="0" {{ $transaction->in_out == 0 ? 'selected' : '' }}>Expense</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control">{{ $transaction->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" data-color="{{ $category->color }}" {{ $transaction->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @if($transaction->category)
                    <div id="categoryColor" style="margin-top: 10px; background-color: {{ $transaction->getCategoryColorAttribute() }}; padding: 5px; border-radius: 5px; color: white;">
                        Current Category Color
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Transaction</button>
        </form>
    </div>

    <script>
        // Update category color when selecting a new category
        document.getElementById('category_id').addEventListener('change', function () {
            var selectedOption = this.options[this.selectedIndex];
            var categoryColor = selectedOption.getAttribute('data-color');
            var categoryColorDiv = document.getElementById('categoryColor');
            if (categoryColor) {
                categoryColorDiv.style.backgroundColor = categoryColor;
                categoryColorDiv.innerHTML = 'Selected Category Color';
            } else {
                categoryColorDiv.style.backgroundColor = '';
                categoryColorDiv.innerHTML = '';
            }
        });
    </script>
@endsection
