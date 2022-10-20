@extends('layouts.app')

@section('content')
    <nav class="navbar">
        <div class="container-fluid" style="max-width: 80%">
            <div class="navbar-brand mb-0 mt-3" style="font-size: 16px; font-weight: 500">
                Dream Team<span style="color: #9596a0; font-size: 14px; font-weight: 400">
                    | Team 4</span>
            </div>
            <div style="font-size: 16px; font-weight: 200">

                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

            </div>
        </div>


    </nav>
    <div class="heading d-flex justify-content-center">
        <div>
            <h6 class="text-center" style="color: #6d50a0">
                What have you read today?
            </h6>
            <h1 class="text-center mt-3" style="font-weight: 200">
                My Reading <span style="font-weight: 500">List</span>
            </h1>
        </div>
    </div>
    <div class="mybox rounded-3">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mybucket mb-3">
                <div class="d-block">
                    <legend class="mb-3 text-center" style="font-weight: 200">
                        Log in here
                    </legend>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: 400">Email</label>
                        <input id="email" type="email" placeholder="Enter your email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" style="font-weight: 400">Password</label>
                        <input id="password" type="password" placeholder="Enter your password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary" type="submit" style="font-weight: 400">
                            Log in
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
