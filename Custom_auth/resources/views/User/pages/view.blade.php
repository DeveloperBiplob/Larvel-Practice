@extends('Layouts.master')
@section('title', 'Category View')
@section('master-content')
    <div class="card ">
        <div class="card-header">
            <h1 class="text-info float-left">Categories Details</h1>
            <a href="{{ route('user.category') }}" class="btn btn-xs btn-success float-right">Back</a>
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
