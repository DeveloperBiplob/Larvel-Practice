@extends('Layouts.master')
@section('title', 'Update Category')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <h1>Update Category</h1>
        </div>
        <div class="card-body" style="width: 600px; margin:auto">
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                </div>
                <div class="form-gorup">
                    <input type="submit" value="Update Category" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
