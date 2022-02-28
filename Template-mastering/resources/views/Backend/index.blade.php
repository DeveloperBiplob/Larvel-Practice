@extends('Backend.Layouts.master')
@section('master-content')
    @foreach ($shops as $shop)
        <span class="badge badge-info">{{ $shop->name }}</span><br>
    @endforeach
@endsection
