@extends('Backend.Layouts.master')
@section('master-content')
    @foreach ($shops as $shop)
        <span class="badge badge-info">{{ $shop->name }}</span><br>
    @endforeach

    <br>
    {{ $shops }}
    {{ $shop_names }}

    <h1>@CustomUpperCase('biplob jabery')</h1>
    @php
        $users = App\Models\User::all();
    @endphp
    <x-Alert type="danger" :users="$users"/>
@endsection
