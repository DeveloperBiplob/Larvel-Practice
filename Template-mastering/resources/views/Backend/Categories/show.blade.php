@extends('Backend.Layouts.master')
@section('title', 'Admin | Show Category')
@section('master-content')
<div class="card">
    <div class="card-header">
        <h3 class="text-info float-left">Show Category</h3>
        <a href="{{ route('category.index') }}" class="btn btn-success btn-sm float-right">Back Dashboard</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td>{{ $category->name }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
