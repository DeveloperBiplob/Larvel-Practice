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
                <th>View</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    @foreach ($user->skills as $skill)
                    <span class="badge badge-info">{{ $skill->name }}</span>
                    @endforeach
                </td>
                <td>
                    @foreach ($user->skills as $skill)
                    <span class="badge badge-info">{{ $skill->myPivot->view }}</span>
                    @endforeach
                </td>
            </tr>
           @endforeach
        </table>

        <hr>
        {{ $global_data }} <br>
        {{ $global_information }} <br>
        {{ $shops }}
    </div>
@endsection
