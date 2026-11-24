@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4">
            <div class="auth-card">
                <div class="auth-card-body">
                    <div class="text-center">
                        <div class="auth-icon-tile">
                            <i class="fas fa-key"></i>
                        </div>
                        <h2 class="auth-title">Reset Password</h2>
                        <p class="auth-subtitle">Enter your email and we'll send you a password reset link</p>
                    </div>

                    @if (session('status'))
                        <div class="alert-theme-success" role="alert">
                            <i class="fas fa-check-circle me-1"></i> {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" novalidate>
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="auth-label">{{ __('Email Address') }}</label>
                            <div class="auth-input-group">
                                <span class="input-icon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input id="email" 
                                       type="email" 
                                       class="form-control @error('email') is-invalid @enderror" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       placeholder="name@example.com"
                                       required 
                                       autocomplete="email" 
                                       autofocus>
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-2">
                            <button type="submit" class="btn btn-auth-primary">
                                <i class="fas fa-paper-plane"></i>
                                <span>{{ __('Send Reset Link') }}</span>
                            </button>
                        </div>

                        <!-- Back to Login -->
                        <div class="auth-divider"></div>
                        <p class="auth-footer-prompt">
                            Remember your password? 
                            <a href="{{ route('login') }}" class="auth-link">
                                Back to sign in
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
