@extends('layouts.app')

@section('title', 'Confirm Password')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4">
            <div class="auth-card">
                <div class="auth-card-body">
                    <div class="text-center">
                        <div class="auth-icon-tile">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h2 class="auth-title">Confirm Password</h2>
                        <p class="auth-subtitle">Please confirm your password before continuing</p>
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}" novalidate>
                        @csrf

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="auth-label">{{ __('Password') }}</label>
                            <div class="auth-input-group">
                                <span class="input-icon">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input id="password" 
                                       type="password" 
                                       class="form-control @error('password') is-invalid @enderror" 
                                       name="password" 
                                       placeholder="Enter your password"
                                       required 
                                       autocomplete="current-password" 
                                       autofocus>
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-auth-primary">
                                <i class="fas fa-check"></i>
                                <span>{{ __('Confirm Password') }}</span>
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="auth-divider"></div>
                            <p class="auth-footer-prompt">
                                <a class="auth-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
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
