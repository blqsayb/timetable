@extends('layouts.app')

@section('title', 'Verify Email')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
            <div class="auth-card">
                <div class="auth-card-body text-center">
                    <div class="auth-icon-tile">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h2 class="auth-title">{{ __('Verify Your Email Address') }}</h2>
                    <p class="auth-subtitle">{{ __('Please check your email for a verification link before proceeding.') }}</p>

                    @if (session('resent'))
                        <div class="alert-theme-success text-start" role="alert">
                            <i class="fas fa-check-circle me-1"></i> {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p style="color: var(--slate-600); font-size: 0.86rem; line-height: 1.6;">
                        {{ __('If you did not receive the email, click the button below to request another.') }}
                    </p>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-auth-primary">
                            <i class="fas fa-paper-plane"></i>
                            <span>{{ __('Resend Verification Email') }}</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
