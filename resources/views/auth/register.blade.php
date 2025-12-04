@extends('layouts.auth')
@section('content')
      <div class="auth-container">
            <div class="auth-header">
                <h2>Create Your Account</h2>
                <p>Join our beauty community and discover your perfect glow</p>
            </div>
            
            <form class="auth-form" method="POST" action="{{route('register')}}">
                @csrf
               
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter fullname" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong><span style="color:red">{{ $message }}</span></strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <input type="text" name="phonenumber" class="form-control @error('phonenumber') is-invalid @enderror" value="{{ old('phonenumber') }}" placeholder="Enter phonenumber eg 07xxxxxxxx" required>
                        @error('phonenumber')
                            <span class="invalid-feedback" role="alert">
                                <strong><span style="color:red">{{ $message }}</span></strong>
                            </span>
                        @enderror
                    </div>

                    
                    <!--<div class="form-group">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Last Name" required>
                    </div>-->
              
                
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong><span style="color:red">{{ $message }}</span></strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong><span style="color:red">{{ $message }}</span></strong>
                        </span>
                    @enderror
                    <span class="password-toggle" id="passwordToggle">
                        <i class="fas fa-eye"></i>
                    </span>
                    <div class="password-strength">
                        <div class="strength-meter" id="strengthMeter"></div>
                    </div>
                    <div class="strength-text" id="strengthText">Password strength</div>
                </div>
                
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password_confirmation" id="confirmPassword" placeholder="Confirm Password" required>
                    <span class="password-toggle" id="confirmPasswordToggle">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>

                <div class="form-group">
                  
                    <input type="text" name="role" class="form-control" value="Customer"  hidden="true">
                    
                </div>
                
                <div class="terms-container">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">I agree to the Terms of Serviceand Privacy Policy</label>
                </div>
                
                <div class="terms-container">
                    <input type="checkbox" id="newsletter">
                    <label for="newsletter">Send me beauty tips, exclusive offers, and product updates</label>
                </div>
                
                <button type="submit" class="auth-btn">Create Account</button>
                
                <div class="auth-links">
                    Already have an account? <a href="{{route('login')}}">Sign in</a>
                </div>
                
               <!-- <div class="divider">
                    <span>Or register with</span>
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