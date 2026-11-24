@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4">
            <div class="auth-card">
                <div class="auth-card-body">
                    <div class="text-center">
                        <div class="auth-icon-tile">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h2 class="auth-title">Sign In</h2>
                        <p class="auth-subtitle">Enter your email and password to access your account</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}" novalidate>
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

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="auth-label">{{ __('Password') }}</label>
                            <div class="auth-input-group">
                                <span class="input-icon">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input id="password" 
                                       type="password" 
                                       class="form-control has-toggle @error('password') is-invalid @enderror" 
                                       name="password" 
                                       placeholder="Enter password"
                                       required 
                                       autocomplete="current-password">
                                <button type="button" class="btn-password-toggle" id="togglePasswordBtn" tabindex="-1" title="Show/Hide Password">
                                    <i class="fas fa-eye" id="passwordEyeIcon"></i>
                                </button>
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="d-flex align-items-center">
                                <input class="auth-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="auth-check-label" for="remember">
                                    {{ __('Remember me') }}
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="auth-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot password?') }}
                                </a>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-2">
                            <button type="submit" class="btn btn-auth-primary">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>{{ __('Sign In') }}</span>
                            </button>
                        </div>

                        <!-- Register Prompt -->
                        @if (Route::has('register'))
                            <div class="auth-divider"></div>
                            <p class="auth-footer-prompt">
                                Don't have an account? 
                                <a href="{{ route('register') }}" class="auth-link">
                                    Create account
                                </a>
                            </p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('togglePasswordBtn');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('passwordEyeIcon');

        if (toggleBtn && passwordInput && eyeIcon) {
            toggleBtn.addEventListener('click', function () {
                const isPassword = passwordInput.getAttribute('type') === 'password';
                passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                eyeIcon.classList.toggle('fa-eye', !isPassword);
                eyeIcon.classList.toggle('fa-eye-slash', isPassword);
            });
        }
    });
</script>
@endsection
