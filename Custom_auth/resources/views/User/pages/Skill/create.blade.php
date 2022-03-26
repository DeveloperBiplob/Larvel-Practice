@extends('Layouts.master')
@section('title', 'Add Category')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <h1 class="float-left">Add Category</h1>
            <a href="{{ route('user.category') }}" class="btn btn-xs btn-success float-right">Back</a>
        </div>
        <div class="card-body" style="width: 600px; margin:auto">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter a cateogy name">
                </div>
                <div class="form-gorup">
                    <input type="submit" value="Add Category" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
