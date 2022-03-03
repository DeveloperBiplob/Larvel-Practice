@extends('Layouts.master')
@section('title', 'Admin | Dashboard')
@section('master-content')
    <h3>Hey! {{ auth()->user()->name ?? '' }}.</h3>
    <h3>Welcome to our Admin Dashboard</h3>
@endsection
