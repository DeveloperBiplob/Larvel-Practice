@extends('Layouts.master')
@section('title', 'User | Dashboard')
@section('master-content')
    <h3>Hey! {{ auth()->user()->name ?? '' }}.</h3>
    <h3>Welcome to our User Dashboard</h3>
@endsection
