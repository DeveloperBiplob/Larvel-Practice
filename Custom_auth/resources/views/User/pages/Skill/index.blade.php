@extends('Layouts.master')
@section('title', 'Skill')
@section('master-content')
    <div class="card ">
        <div class="card-header">
            <h1 class="text-info float-left">Skills</h1>
            <a href="" class="btn btn-xs btn-success float-right">Add Skill</a>
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
                       @can('update', $skill)
                       <a href="{{ route('skill.edit', $skill->id) }}" class="btn btn-info btn-xs">Edit</a>
                       @endcan
                        @can('delete', $skill)
                        <form action="{{ route('skill.destroy', $skill) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-xs btn-danger">Delete</button>
                        </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </table>
            {{-- {{ $skills->links() }} --}}
        </div>
    </div>
@endsection
