@extends('Layouts.master')
@section('title', 'Category')
@section('master-content')
    <div class="card ">
        <div class="card-header">
            <h1 class="text-info float-left">Categories</h1>
            <a href="{{ route('category.create') }}" class="btn btn-xs btn-success float-right">Add Category</a>
        </div>
        @can('isAdmin')
        <h1>Admin can get access</h1>
        @endcan
        @can('isEditor')
            <h1>Editor can get access</h1>
        @endcan
        @can('isModerator ')
            <h1>Moderator can get access</h1>
        @endcan
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ Str::ucfirst($category->name) }}</td>
                    <td>{{ Str::ucfirst($category->user->role) }}</td>
                    <td>
                        <a href="{{ route('category.view', $category->id) }}" class="btn btn-success btn-xs">View</a>
                        @can('updateCategory', $category)
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info btn-xs">Edit</a>
                        @endcan
                        <a href="" class="btn btn-danger btn-xs">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
