<!-- resources/views/categories/index.blade.php -->

@extends('layouts.layout')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Uang Masuk</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <a href="{{ route('categories.create') }}" class="btn btn-gradient-success btn-rounded btn-fw">Tambah Data</a>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-13 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Kategori</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Color</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $index => $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td style="width: 100px; border-radius: 10px; background-color: {{ $category->color }};"></td>
                                        <td>
                                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-gradient-info btn-sm">
                                                <i class="mdi mdi-brush"></i>Edit
                                            </a>
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-inverse-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                    <i class="mdi mdi-close-box"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
