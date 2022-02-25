@extends('Backend.Layouts.master')
@section('title', 'Admin | Cateogy')
@section('master-content')
    <div class="row p-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-info">Manage Category</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('category.show', $category->slug) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('category.edit', $category->slug) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form class="d-inline-block" action="{{ route('category.destroy', $category->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-info">Add Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-gorup">
                            <label for="">Categoy Name</label>
                            <input type="text" name="name" placeholder="Enter a Category Name" class="form-control">
                        </div>
                        <div class="form-gorup">
                            <button type="submit" class="btn btn-primary btn-block mt-2">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
