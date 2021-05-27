@extends('layouts.welcome_page.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div class=" card  border-0">
        <div class=" card-body">
            <div class="logo_area m-auto">
                <img src="{{ asset('/storage/Altus_Logo.png') }}" class="card-img-top img-fluid "  alt="logo">
            </div>

            <hr>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 pb-3">
            <div class="card border-0">



                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            @if(session()->has('invalid'))
                                <div class="alert alert-danger">
                                    {{ session()->get('invalid') }}
                                </div>
                            @endif
                            <div class="login-box">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h3 class="form_header"><div class="text_design_register ">Log In</div></h3>
                                    <div class="form-group m-10">

                                        <input id="email" type="email" class="input_form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <i class=" text-warning">{{ $message }}</i>
                                                </span>
                                            @enderror


                                    </div>

                                    <div class="form-group m-10">


                                        <input id="password" type="password" class="input_form @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <i class=" text-warning">{{ $message }}</i>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label text-white" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                    </div>
                                    <div class="form-group d-grid gap-2">
                                        <button class="btn btn-primary" type="submit">Log In</button>
                                    </div>


                                        <div class=" offset-md-3 ">

                                            @if (Route::has('password.request'))
                                              <a class="btn btn-link pb-0" id="forget" href="{{ route('password.request') }}">
                                                    Forgot Password
                                             </a>
                                             @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-5"></div>
    @include('layouts.welcome_page.footer')
</div>
@endsection
