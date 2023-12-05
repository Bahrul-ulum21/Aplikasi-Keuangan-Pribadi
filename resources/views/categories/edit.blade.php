<!-- resources/views/categories/edit.blade.php -->

@extends('layouts.layout')

@section('content')
    <div class="container">
        <h2>Edit Category</h2>
        <form method="POST" action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control">{{ $category->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input type="color" name="color" id="color" class="form-control" value="{{ $category->color }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
@endsection
