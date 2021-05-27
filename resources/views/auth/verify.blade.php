@extends('layouts.welcome_page.app')

@section('content')
<div class="container">
    <div class="card text-center border-0">
        <div class="logo_area m-auto">
            <img src="{{ asset('/storage/Altus_Logo.png') }}" class="card-img-top img-fluid "  alt="logo">
        </div>
        <hr class=" w-auto">
        <div class="card-body">
             <div class="text_design1 text-3"><h2>{{ __('Verify Your Email Address') }}</h2></div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-decoration-none "> <a class="button1 eight" id="button2" > &rarr; {{ __('click here to request another') }} </a></button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.welcome_page.footer')
</div>
@endsection
