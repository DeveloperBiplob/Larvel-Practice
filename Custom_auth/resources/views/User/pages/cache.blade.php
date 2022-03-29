@extends('Layouts.master')
@section('title', 'Cache')
@section('master-content')
    <div class="card ">
        <div class="card-header">
            <h1 class="text-info float-left">Cache</h1>
            <a href="" class="btn btn-xs btn-success float-right">Add Cache</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                @foreach ($skills as $skill)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ Str::ucfirst($skill->name) }}</td>
                    <td>{{ Str::ucfirst($skill->user->role) }}</td>
                    <td>
                        <a href="" class="btn btn-success btn-xs">View</a>
                       <a href="" class="btn btn-info btn-xs">Edit</a>
                       <form action="{{ route('cache.delete', $skill->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {{-- {{ $skills->links() }} --}}
        </div>
    </div>
@endsection
