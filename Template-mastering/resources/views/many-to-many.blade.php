@extends('Backend.Layouts.app')
@section('app-content')
    <div class="container">
        <h1 class="text-center">Many to Many</h1>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>user</th>
                <th>Skill</th>
            </tr>
            {{-- @foreach ($mechanics as $mechanic)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $mechanic->name }}</td>
                <td>{{ $mechanic->car->name }}</td>
            </tr>
            @endforeach --}}
        </table>
    </div>
@endsection
