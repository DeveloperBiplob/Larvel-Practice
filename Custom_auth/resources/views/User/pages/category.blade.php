@extends('Layouts.master')
@section('title', 'Category')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <h1>Categories</h1>
            @can('isAdmin')
                <h1>Admin can get access</h1>
            @endcan
            @can('isEditor')
                <h1>Editor can get access</h1>
            @endcan
            @can('isModerator ')
                <h1>Moderator can get access</h1>
            @endcan
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Role</th>
                </tr>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ Str::ucfirst($category->name) }}</td>
                    <td>{{ Str::ucfirst($category->user->role) }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
