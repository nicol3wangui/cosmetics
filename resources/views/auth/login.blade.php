@extends('layouts.auth')
@section('content')
 <div class="auth-container">
            <div class="auth-header">
                <h2>Welcome Back</h2>
                <p>Sign in to access your account and continue your beauty journey</p>
            </div>
            
            <form class="auth-form" method="POST" action="{{route('login')}}">
                @csrf
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" required>
                     @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong><span style="color:red">{{ $message }}<span></strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong><span style="color:red">{{ $message }}</span></strong>
                        </span>
                     @enderror
                    <span class="password-toggle" id="passwordToggle">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </div>
                
                <button type="submit" class="auth-btn">Login</button>
                
                <div class="auth-links">
                    Don't have an account? <a href="{{route('register')}}">Sign up</a>
                </div>
                
                <!--<div class="divider">
                    <span>Or continue with</span>
                </div>
                
                <div class="social-login">
                    <div class="social-btn">
                        <i class="fab fa-google"></i>
                    </div>
                    <div class="social-btn">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social-btn">
                        <i class="fab fa-apple"></i>
                    </div>
                </div>-->
            </form>
        </div>
@endsection