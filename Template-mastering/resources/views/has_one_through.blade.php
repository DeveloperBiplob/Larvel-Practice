@extends('Backend.Layouts.app')
@section('app-content')
    <div class="container">
        <h1 class="text-center">Has One Through</h1>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Mechanic</th>
                <th>Car</th>
                <th>Owner</th>
            </tr>
            @foreach ($mechanics as $mechanic)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $mechanic->name }}</td>
                <td>{{ $mechanic->car->name }}</td>
                {{-- <td>{{ $mechanic->car->owner->name }}</td> --}}
                <td>{{ $mechanic->carOwner->name }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
