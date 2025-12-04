<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GlowBeauty</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #f472b6;
            --secondary-color: #d946ef;
            --accent-color: #c084fc;
            --text-color: #6b5b73;
            --light-text: #8b7355;
            --white: #fff;
            --background: #fdf2f8;
            --border-color: rgba(244, 114, 182, 0.2);
            --gradient: linear-gradient(135deg, #f472b6, #d946ef);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            background: var(--background);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        .header {
            background: linear-gradient(135deg, #fff 0%, #fdf2f8 100%);
            box-shadow: 0 4px 20px rgba(244, 114, 182, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            gap: 2rem;
        }
        
        .logo h1 a {
            font-family: 'Playfair Display', serif;
            background: linear-gradient(135deg, #f472b6, #d946ef, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            text-decoration: none;
        }
        
        .nav ul {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }
        
        .nav a {
            text-decoration: none;
            color: #6b5b73;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav a:hover, .nav a.active {
            color: #f472b6;
        }
        
        .nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #f472b6, #d946ef);
            transition: width 0.3s ease;
        }
        
        .nav a:hover::after, .nav a.active::after {
            width: 100%;
        }
        
        .search-bar {
            display: flex;
            align-items: center;
            background: white;
            border-radius: 25px;
            padding: 0.5rem 1rem;
            box-shadow: 0 2px 10px rgba(244, 114, 182, 0.1);
            min-width: 300px;
        }
        
        .search-bar input {
            border: none;
            outline: none;
            flex: 1;
            padding: 0.5rem;
            font-size: 0.9rem;
        }
        
        .search-bar button {
            background: none;
            border: none;
            color: #f472b6;
            cursor: pointer;
            padding: 0.5rem;
        }
        
        .nav-icons {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }
        
        .nav-icons a {
            color: #6b5b73;
            font-size: 1.2rem;
            position: relative;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .nav-icons a:hover, .nav-icons a.active {
            color: #f472b6;
            transform: translateY(-2px);
        }
        
        .cart-count, .wishlist-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: linear-gradient(135deg, #f472b6, #d946ef);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        /* Main Content */
        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
        }
        
        .auth-container {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(244, 114, 182, 0.15);
            width: 100%;
            max-width: 450px;
            overflow: hidden;
            border: 1px solid rgba(244, 114, 182, 0.1);
        }
        
        .auth-header {
            background: linear-gradient(135deg, #f472b6, #d946ef);
            color: var(--white);
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .auth-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .auth-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }
        
        .auth-header p {
            font-size: 16px;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }
        
        .auth-form {
            padding: 30px;
        }
        
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        
        .form-group input {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 2px solid var(--border-color);
            border-radius: 15px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: var(--white);
        }
        
        .form-group input:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(244, 114, 182, 0.1);
            transform: translateY(-2px);
        }
        
        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--light-text);
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--light-text);
            cursor: pointer;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .remember-me input[type="checkbox"] {
            accent-color: var(--primary-color);
        }
        
        .remember-me label {
            font-size: 14px;
            color: var(--light-text);
        }
        
        .forgot-password {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .forgot-password:hover {
            color: var(--secondary-color);
            text-decoration: underline;
        }
        
        .auth-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #f472b6, #d946ef);
            color: var(--white);
            border: none;
            border-radius: 15px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(244, 114, 182, 0.3);
        }
        
        .auth-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(244, 114, 182, 0.4);
        }
        
        .auth-links {
            margin-top: 20px;
            text-align: center;
        }
        
        .auth-links a {
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .auth-links a:hover {
            color: var(--secondary-color);
            text-decoration: underline;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: var(--light-text);
        }
        
        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: var(--border-color);
        }
        
        .divider span {
            padding: 0 15px;
            font-size: 14px;
        }
        
        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid var(--border-color);
            background: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--text-color);
        }
        
        .social-btn:hover {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--white);
            transform: translateY(-3px);
        }
        
        /* Footer Styles */
        .footer {
            background: linear-gradient(135deg, #6b5b73 0%, #5a4a4a 100%);
            color: var(--white);
            padding: 3rem 0 1rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .footer-section h4 {
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .footer-section p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            margin-bottom: 1rem;
        }
        
        .footer-section ul {
            list-style: none;
        }
        
        .footer-section ul li {
            margin-bottom: 0.5rem;
        }
        
        .footer-section ul li a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-section ul li a:hover {
            color: var(--primary-color);
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-links a {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .nav-wrapper {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav ul {
                gap: 1rem;
            }
            
            .search-bar {
                min-width: auto;
                width: 100%;
            }
            
            .auth-container {
                margin: 0 20px;
            }
            
            .auth-header {
                padding: 25px;
            }
            
            .auth-form {
                padding: 25px;
            }
            
            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .social-links {
                justify-content: center;
            }
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }
        
        .modal-content {
            background: white;
            margin: 5% auto;
            padding: 0;
            border-radius: 20px;
            width: 90%;
            max-width: 450px;
            position: relative;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        
        .close {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 28px;
            font-weight: bold;
            color: #aaa;
            cursor: pointer;
            z-index: 1;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .close:hover {
            background: rgba(244, 114, 182, 0.1);
            color: #f472b6;
        }
        
        .auth-tabs {
            display: flex;
            margin-bottom: 2rem;
            border-bottom: 1px solid #f1f5f9;
        }
        
        .auth-tab {
            flex: 1;
            padding: 1rem;
            background: none;
            border: none;
            font-weight: 600;
            color: #8b7355;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .auth-tab.active {
            color: #f472b6;
            border-bottom: 2px solid #f472b6;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <h1><a href="index.html">GlowBeauty</a></h1>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    </ul>
                </nav>
               <!-- <div class="search-bar">
                    <input type="text" placeholder="Search products..." id="searchInput">
                    <button type="button" id="searchBtn"><i class="fas fa-search"></i></button>
                </div>-->
                <div class="nav-icons">
                    <a href="#" class="icon-link" id="wishlistBtn"><i class="fas fa-heart"></i><span class="wishlist-count">0</span></a>
                    <!--<a href="cart.html" class="icon-link" id="cartBtn"><i class="fas fa-shopping-bag"></i><span class="cart-count">0</span></a>
                    <a href="#" class="icon-link" id="userBtn"><i class="fas fa-user"></i></a>-->
                </div>
            </div>
        </div>
    </header>


    <!-- Main Content -->
    <main class="main-content">
       @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>GlowBeauty</h3>
                    <p>Clean beauty for everyone. Discover your perfect glow with our carefully curated collection of premium cosmetics.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="products.html?category=skincare">Skincare</a></li>
                        <li><a href="products.html?category=makeup">Makeup</a></li>
                        <li><a href="products.html?category=haircare">Hair Care</a></li>
                        <li><a href="products.html?category=fragrance">Fragrance</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Customer Care</h4>
                    <ul>
                        <li><a href="#">Shipping Info</a></li>
                        <li><a href="#">Returns & Exchanges</a></li>
                        <li><a href="#">Size Guide</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 GlowBeauty. All rights reserved. | Privacy Policy | Terms of Service</p>
            </div>
        </div>
    </footer>

    <script>
        // Password visibility toggle
        const passwordToggle = document.getElementById('passwordToggle');
        const passwordInput = document.getElementById('password');
        
        passwordToggle.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggle.innerHTML = '<i class="fas fa-eye-slash"></i>';
            } else {
                passwordInput.type = 'password';
                passwordToggle.innerHTML = '<i class="fas fa-eye"></i>';
            }
        });
        
        // Modal functionality
        const modal = document.getElementById("authModal");
        const userBtn = document.getElementById("userBtn");
        const closeBtn = document.querySelector(".close");
        const authTabs = document.querySelectorAll(".auth-tab");
        const authForms = document.querySelectorAll(".auth-form");
        
        userBtn.addEventListener("click", function(e) {
            e.preventDefault();
            modal.style.display = "block";
        });
        
        closeBtn.addEventListener("click", function() {
            modal.style.display = "none";
        });
        
        window.addEventListener("click", function(e) {
            if (e.target == modal) {
                modal.style.display = "none";
            }
        });
        
        authTabs.forEach(tab => {
            tab.addEventListener("click", function() {
                const tabName = this.getAttribute("data-tab");
                
                // Update active tab
                authTabs.forEach(t => t.classList.remove("active"));
                this.classList.add("active");
                
                // Show corresponding form
                authForms.forEach(form => {
                    form.classList.remove("active");
                    if (form.id === `${tabName}Form`) {
                        form.classList.add("active");
                    }
                });
            });
        });
        
        // Switch auth type from link
        const switchAuthLinks = document.querySelectorAll(".switch-auth");
        switchAuthLinks.forEach(link => {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                const tabName = this.getAttribute("data-tab");
                
                // Update active tab
                authTabs.forEach(t => {
                    t.classList.remove("active");
                    if (t.getAttribute("data-tab") === tabName) {
                        t.classList.add("active");
                    }
                });
                
                // Show corresponding form
                authForms.forEach(form => {
                    form.classList.remove("active");
                    if (form.id === `${tabName}Form`) {
                        form.classList.add("active");
                    }
                });
            });
        });
    </script>
</body>
</html>