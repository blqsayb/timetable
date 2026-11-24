@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-11 col-md-10 col-lg-8 col-xl-7">
            <div class="auth-card">
                <div class="auth-card-body">
                    <div class="text-center">
                        <div class="auth-icon-tile">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h2 class="auth-title">Create Account</h2>
                        <p class="auth-subtitle">Register a new student or administrator profile</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}" novalidate>
                        @csrf

                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-12 col-md-6">
                                <label for="name" class="auth-label">{{ __('Full Name') }}</label>
                                <div class="auth-input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input id="name" 
                                           type="text" 
                                           class="form-control @error('name') is-invalid @enderror" 
                                           name="name" 
                                           value="{{ old('name') }}" 
                                           placeholder="e.g. John Doe"
                                           required 
                                           autocomplete="name" 
                                           autofocus>
                                </div>
                                @error('name')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Email Address -->
                            <div class="col-12 col-md-6">
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
                                           autocomplete="email">
                                </div>
                                @error('email')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="col-12 col-md-6">
                                <label for="password" class="auth-label">{{ __('Password') }}</label>
                                <div class="auth-input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-key"></i>
                                    </span>
                                    <input id="password" 
                                           type="password" 
                                           class="form-control has-toggle @error('password') is-invalid @enderror" 
                                           name="password" 
                                           placeholder="Minimum 8 characters"
                                           required 
                                           autocomplete="new-password">
                                    <button type="button" class="btn-password-toggle toggle-pass-btn" data-target="password" tabindex="-1" title="Show/Hide Password">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="col-12 col-md-6">
                                <label for="password-confirm" class="auth-label">{{ __('Confirm Password') }}</label>
                                <div class="auth-input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </span>
                                    <input id="password-confirm" 
                                           type="password" 
                                           class="form-control has-toggle" 
                                           name="password_confirmation" 
                                           placeholder="Re-type password"
                                           required 
                                           autocomplete="new-password">
                                    <button type="button" class="btn-password-toggle toggle-pass-btn" data-target="password-confirm" tabindex="-1" title="Show/Hide Password">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-12 col-md-6">
                                <label for="phone_number" class="auth-label">Phone Number</label>
                                <div class="auth-input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    <input id="phone_number" 
                                           type="text" 
                                           class="form-control @error('phone_number') is-invalid @enderror" 
                                           name="phone_number" 
                                           value="{{ old('phone_number') }}" 
                                           placeholder="e.g. 0123456789"
                                           required>
                                </div>
                                @error('phone_number')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Age -->
                            <div class="col-12 col-md-6">
                                <label for="age" class="auth-label">Age</label>
                                <div class="auth-input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <input id="age" 
                                           type="number" 
                                           class="form-control @error('age') is-invalid @enderror" 
                                           name="age" 
                                           value="{{ old('age') }}" 
                                           placeholder="e.g. 21"
                                           min="1"
                                           max="120"
                                           required>
                                </div>
                                @error('age')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Address -->
                            <div class="col-12">
                                <label for="address" class="auth-label">Address</label>
                                <div class="auth-input-group">
                                    <span class="input-icon" style="align-items: flex-start; padding-top: 10px;">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    <textarea id="address" 
                                              class="form-control @error('address') is-invalid @enderror" 
                                              name="address" 
                                              rows="2"
                                              placeholder="Residential address"
                                              required>{{ old('address') }}</textarea>
                                </div>
                                @error('address')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-auth-primary">
                                    <i class="fas fa-user-plus"></i>
                                    <span>{{ __('Register Account') }}</span>
                                </button>
                            </div>
                        </div>

                        <!-- Login Prompt -->
                        <div class="auth-divider"></div>
                        <p class="auth-footer-prompt">
                            Already have an account? 
                            <a href="{{ route('login') }}" class="auth-link">
                                Sign in
                            </a>
                        </p>
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
        const toggleButtons = document.querySelectorAll('.toggle-pass-btn');

        toggleButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetId = this.getAttribute('data-target');
                const targetInput = document.getElementById(targetId);
                const eyeIcon = this.querySelector('i');

                if (targetInput && eyeIcon) {
                    const isPassword = targetInput.getAttribute('type') === 'password';
                    targetInput.setAttribute('type', isPassword ? 'text' : 'password');
                    eyeIcon.classList.toggle('fa-eye', !isPassword);
                    eyeIcon.classList.toggle('fa-eye-slash', isPassword);
                }
            });
        });
    });
</script>
@endsection
