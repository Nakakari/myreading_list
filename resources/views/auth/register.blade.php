@extends('layouts.app')

@section('content')
    <!-- <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-header">{{ __('Register') }}</div>

                                                    <div class="card-body">
                                                        <form method="POST" action="{{ route('register') }}">
                                                            @csrf

                                                            <div class="row mb-3">
                                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="name" type="text"
                                                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                                    @error('name')
        <span class="invalid-feedback" role="alert">
                                                                                                            <strong>{{ $message }}</strong>
                                                                                                        </span>
    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="email"
                                                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="email" type="email"
                                                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                                                        value="{{ old('email') }}" placeholder="Enter your name" required
                                                                        autocomplete="email">

                                                                    @error('email')
        <span class="invalid-feedback" role="alert">
                                                                                                            <strong>{{ $message }}</strong>
                                                                                                        </span>
    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="password"
                                                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="password" type="password"
                                                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                                                        required autocomplete="new-password">

                                                                    @error('password')
        <span class="invalid-feedback" role="alert">
                                                                                                            <strong>{{ $message }}</strong>
                                                                                                        </span>
    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="password-confirm"
                                                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="password-confirm" type="password" class="form-control"
                                                                        name="password_confirmation" required autocomplete="new-password">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-0">
                                                                <div class="col-md-6 offset-md-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        {{ __('Register') }}
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> -->
    <nav class="navbar">
        <div class="container-fluid" style="max-width: 80%">
            <div class="navbar-brand mb-0 mt-3" style="font-size: 16px; font-weight: 500">
                Dream Team<span style="color: #9596a0; font-size: 14px; font-weight: 400">
                    | Team 4</span>
            </div>
            <div style="font-size: 16px; font-weight: 200"><a class="nav-link"
                    href="{{ route('login') }}">{{ __('Login') }}</a></div>
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
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mybucket mb-3">
                <div class="d-block">
                    <legend class="mb-3 text-center" style="font-weight: 200">
                        Register your account
                    </legend>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: 400">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" placeholder="Enter your name" value="{{ old('name') }}" required
                            autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-weight: 400">Email</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Enter your mail"
                                placeholder="Enter your email" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" style="font-weight: 400">Password</label>

                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" style="font-weight: 400">Confirm
                            Password</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            placeholder="Enter your password" required autocomplete="new-password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-outline-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
