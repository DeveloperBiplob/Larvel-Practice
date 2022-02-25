@extends('Backend.Layouts.master')
@section('title', 'Admin | Update Category')
@section('master-content')
    <div class="row card" style="height: 80vh">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="text-info float-left">Update Category</h3>
                    <a href="{{ route('category.index') }}" class="btn btn-success btn-sm float-right">Back Dashboard</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update', $category->slug) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-gorup">
                            <label for="">Categoy Name</label>
                            <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                        </div>
                        <div class="form-gorup">
                            <button type="submit" class="btn btn-primary btn-block mt-2">Upadate Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
