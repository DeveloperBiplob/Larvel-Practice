@extends('Layouts.app')
@section('title', 'Reset Password')
@section('app-content')
<div class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-body">
                <h3 class="mb-3 text-center text-primary">Create a New Password</h3>
                <form action="{{ route('password.update') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ request()->route('token') }}">
                        <input type="email" class="form-control" value="{{ old('email', request()->email) }}" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Enter your new Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Enter your Confirmation Password" name="password_confirmation">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('password_confirmation')
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
