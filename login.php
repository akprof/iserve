<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekiti ServiceConnect - Authentication</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- Authentication Container -->
    <div class="auth-container">
        <!-- Left Panel - Features -->
        <div class="features-panel">
            <div class="logo-section">
                <div class="state-logo">
                    <img src="images/ekiti-logo.png" alt="Ekiti Logo" width="80" class="me-2">
                </div>
                <div class="app-info">
                    <h1 class>Ekiti ServiceConnect</h1>
                    <p>Ekiti State Government</p>
                </div>
            </div>
            
            <h2>Welcome to Ekiti ServiceConnect</h2>
            <p>Access all government services with a single account</p>
            
            <div class="features-list">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Save Time</h3>
                        <p>Access multiple services without visiting different offices</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Secure & Safe</h3>
                        <p>Your data is protected with advanced security measures</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Mobile Friendly</h3>
                        <p>Access services from any device, anywhere, anytime</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial">
                <div class="testimonial-text">
                    "Ekiti ServiceConnect has transformed how I interact with government services. What used to take days now takes minutes!"
                </div>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User">
                    <span>Adeola Johnson, Business Owner</span>
                </div>
            </div>
        </div>
        
        <!-- Right Panel - Forms -->
        <div class="forms-panel">
            <div class="auth-card">
                <div class="auth-header">
                    <h2 id="register-header">Create Your Account</h2>
                    <h2 id="login-header"></h2>
                    <p id="login-subtitle">Join thousands of citizens using Ekiti ServiceConnect</p>
                </div>
                
                <div class="auth-tabs">
                    <div class="auth-tab" data-tab="login">Login</div>
                    <div class="auth-tab active" data-tab="register">Register</div>
                </div>
                
                <!-- Login Form -->
                <form class="auth-form" id="login-form">
                    <div class="form-group">
                        <label for="login-email" class="form-label">Email Address</label>
                        <div class="input-with-icon">
                            <input type="email" id="login-email" class="form-control" placeholder="Enter your email" required>
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="login-password" class="form-label">Password</label>
                        <div class="input-with-icon">
                            <input type="password" id="login-password" class="form-control" placeholder="Enter your password" required>
                            <i class="fas fa-eye password-toggle input-icon" id="login-toggle-password"></i>
                        </div>
                    </div>
                    
                    <div class="form-options">
                        <div class="remember-me">
                            <input type="checkbox" id="remember-me">
                            <label for="remember-me">Remember me</label>
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-sign-in-alt"></i> Login to Your Account
                    </button>
                    
                    <div class="auth-divider">
                        <span>Or continue with</span>
                    </div>
                    
                    <button type="button" class="btn btn-google">
                        <i class="fab fa-google"></i> Google
                    </button>
                    
                    <div class="auth-footer">
                        Don't have an account? <a href="#" class="switch-to-register">Sign up here</a>
                    </div>
                </form>
                
                <!-- Register Form -->
                <form class="auth-form active" id="register-form">
                    <div class="form-group">
                        <label for="register-fullname" class="form-label">
                            Full Name
                            <!-- <i class="fas fa-times error-icon"></i> -->
                        </label>
                        <div class="input-with-icon">
                            <input type="text" id="register-fullname" class="form-control" placeholder="Enter your full name" required>
                            <i class="fas fa-user input-icon"></i>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="register-email" class="form-label">
                            Email Address
                            <!-- <i class="fas fa-comment info-icon"></i> -->
                        </label>
                        <div class="input-with-icon">
                            <input type="email" id="register-email" class="form-control" value="bicisec@mail.com" required>
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="register-phone" class="form-label">
                            Phone Number
                            <!-- <i class="fas fa-file-alt info-icon"></i> -->
                        </label>
                        <div class="input-with-icon">
                            <input type="tel" id="register-phone" class="form-control" placeholder="Enter your phone number" required>
                            <i class="fas fa-phone input-icon"></i>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="register-password" class="form-label">
                            Password
                            <!-- <i class="fas fa-circle error-icon"></i> -->
                        </label>
                        <div class="input-with-icon">
                            <input type="password" id="register-password" class="form-control" placeholder="Create a password" required>
                            <i class="fas fa-eye password-toggle input-icon" id="register-toggle-password"></i>
                        </div>
                        <div class="password-strength">
                            <div class="strength-bar active"></div>
                            <div class="strength-bar"></div>
                            <div class="strength-bar"></div>
                            <div class="strength-bar"></div>
                        </div>
                        <div class="form-note">Password must be at least 8 characters with uppercase, lowercase, and numbers</div>
                    </div>
                    
                    <div class="form-group">
                        <div class="remember-me">
                            <input type="checkbox" id="agree-terms" required>
                            <label for="agree-terms">I agree to the <a href="#" style="color: var(--primary-green);">Terms of Service</a> and <a href="#" style="color: var(--primary-green);">Privacy Policy</a></label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Create Account
                    </button>
                    
                    <div class="auth-divider">
                        <span>Or continue with</span>
                    </div>
                    
                    <button type="button" class="btn btn-google">
                        <i class="fab fa-google"></i> Google
                    </button>
                    
                    <div class="auth-footer">
                        Already have an account? <a href="#" class="switch-to-login">Login here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="footer-content">
                <a href="index3.php" class="back-to-home">
                    <i class="fas fa-arrow-left"></i> Back to Home
                </a>
                <div class="copyright">
                    &copy; 2023 Ekiti ServiceConnect. All rights reserved. | Ekiti State Government
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab switching functionality
            const tabs = document.querySelectorAll('.auth-tab');
            const forms = document.querySelectorAll('.auth-form');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const targetTab = this.getAttribute('data-tab');
                    
                    // Update active tab
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Show corresponding form
                    forms.forEach(form => {
                        form.classList.remove('active');
                        if (form.id === `${targetTab}-form`) {
                            form.classList.add('active');
                        }
                    });
                });
            });
            
            // Switch to register form link
            document.querySelector('.switch-to-register').addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('[data-tab="register"]').click();
            });
            
            // Switch to login form link
            document.querySelector('.switch-to-login').addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('[data-tab="login"]').click();
            });
            //change header text based on active tab
            const loginHeader = document.getElementById('login-header');
            const registerHeader = document.getElementById('register-header');
            const loginSubtitle = document.getElementById('login-subtitle');
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const targetTab = this.getAttribute('data-tab');
                    if (targetTab === 'login') {
                        loginHeader.innerHTML = "Welcome Back! <br>Login To Your Account";
                        loginSubtitle.innerHTML = "Access all government services with a single account";
                        loginHeader.style.display = 'block';
                        registerHeader.style.display = 'none';
                    } else {
                        loginSubtitle.innerHTML = "Join thousands of citizens using Ekiti ServiceConnect";
                        loginHeader.style.display = 'none';
                        registerHeader.style.display = 'block';
                    }
                });
            }); 

            // Password toggle functionality
            const togglePassword = (toggleId, inputId) => {
                const toggle = document.getElementById(toggleId);
                const input = document.getElementById(inputId);
                
                toggle.addEventListener('click', function() {
                    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                    input.setAttribute('type', type);
                    this.classList.toggle('fa-eye');
                    this.classList.toggle('fa-eye-slash');
                });
            };
            
            togglePassword('login-toggle-password', 'login-password');
            togglePassword('register-toggle-password', 'register-password');
            
            // Password strength indicator
            const passwordInput = document.getElementById('register-password');
            const strengthBars = document.querySelectorAll('.strength-bar');
            
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                
                // Check password strength
                if (password.length >= 8) strength++;
                if (/[A-Z]/.test(password)) strength++;
                if (/[a-z]/.test(password)) strength++;
                if (/[0-9]/.test(password)) strength++;
                
                // Update strength bars
                strengthBars.forEach((bar, index) => {
                    bar.classList.remove('active', 'medium', 'strong');
                    if (index < strength) {
                        bar.classList.add('active');
                        if (strength >= 3) bar.classList.add('medium');
                        if (strength >= 4) bar.classList.add('strong');
                    }
                });
            });
            
            // Form validation
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');
            
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Add your login logic here
                alert('Login functionality would be implemented here');
            });
            
            registerForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const password = document.getElementById('register-password').value;
                const confirmPassword = document.getElementById('register-confirm-password');
                
                // Check if confirm password field exists
                if (confirmPassword) {
                    if (password !== confirmPassword.value) {
                        alert('Passwords do not match');
                        return;
                    }
                }
                
                // Add your registration logic here
                alert('Registration functionality would be implemented here');
            });
            
            // Google sign-in button
            document.querySelectorAll('.btn-google').forEach(button => {
                button.addEventListener('click', function() {
                    // Add Google authentication logic here
                    alert('Google authentication would be implemented here');
                });
            });
        });
    </script>
</body>
</html>