@extends('Layouts.app')
@section('title', 'Reset Password')
@section('app-content')
<div class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-body">
                <h3 class="mb-3 text-center text-primary">Reset Password</h3>
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter your Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                        <div class="">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
@endsection
