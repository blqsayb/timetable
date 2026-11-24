@extends('layouts.app')

@section('title', 'Set New Password')

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
                        <h2 class="auth-title">New Password</h2>
                        <p class="auth-subtitle">Create a new secure password for your account</p>
                    </div>

                    <form method="POST" action="{{ route('password.update') }}" novalidate>
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

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
                                       value="{{ $email ?? old('email') }}" 
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
                            <label for="password" class="auth-label">{{ __('New Password') }}</label>
                            <div class="auth-input-group">
                                <span class="input-icon">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input id="password" 
                                       type="password" 
                                       class="form-control @error('password') is-invalid @enderror" 
                                       name="password" 
                                       placeholder="Minimum 8 characters"
                                       required 
                                       autocomplete="new-password">
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label for="password-confirm" class="auth-label">{{ __('Confirm Password') }}</label>
                            <div class="auth-input-group">
                                <span class="input-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </span>
                                <input id="password-confirm" 
                                       type="password" 
                                       class="form-control" 
                                       name="password_confirmation" 
                                       placeholder="Re-type password"
                                       required 
                                       autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-2">
                            <button type="submit" class="btn btn-auth-primary">
                                <i class="fas fa-check-circle"></i>
                                <span>{{ __('Reset Password') }}</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
