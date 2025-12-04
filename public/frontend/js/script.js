// GlowBeauty E-commerce JavaScript

// DOM Elements
const searchInput = document.getElementById('searchInput');
const searchBtn = document.getElementById('searchBtn');
const cartBtn = document.getElementById('cartBtn');
const wishlistBtn = document.getElementById('wishlistBtn');
const userBtn = document.getElementById('userBtn');
const cartCount = document.querySelector('.cart-count');
const wishlistCount = document.querySelector('.wishlist-count');

// Cart and Wishlist data
let cart = JSON.parse(localStorage.getItem('glowbeauty-cart')) || [];
let wishlist = JSON.parse(localStorage.getItem('glowbeauty-wishlist')) || [];
let isLoggedIn = localStorage.getItem('glowbeauty-logged-in') === 'true';

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
    updateCartCount();
    updateWishlistCount();
    initializeAuthModal();
    initializeDashboard();
    initializeProductFilters();
    initializeContactForm();
    initializeFAQ();
    updateAuthState();
});

// Update cart count display
function updateCartCount() {
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    if (cartCount) {
        cartCount.textContent = totalItems;
        cartCount.style.display = totalItems > 0 ? 'flex' : 'none';
    }
}

// Update wishlist count display
function updateWishlistCount() {
    if (wishlistCount) {
        wishlistCount.textContent = wishlist.length;
        wishlistCount.style.display = wishlist.length > 0 ? 'flex' : 'none';
    }
}

// Add to cart functionality
function addToCart(productId, name, price, image, quantity = 1) {
    const existingItem = cart.find(item => item.id === productId);
    
    if (existingItem) {
        existingItem.quantity += quantity;
    } else {
        cart.push({
            id: productId,
            name: name,
            price: price,
            image: image,
            quantity: quantity
        });
    }
    
    localStorage.setItem('glowbeauty-cart', JSON.stringify(cart));
    updateCartCount();
    showNotification('Product added to cart!', 'success');
}

// Add to wishlist functionality
function addToWishlist(productId, name, price, image) {
    const existingItem = wishlist.find(item => item.id === productId);
    
    if (!existingItem) {
        wishlist.push({
            id: productId,
            name: name,
            price: price,
            image: image
        });
        
        localStorage.setItem('glowbeauty-wishlist', JSON.stringify(wishlist));
        updateWishlistCount();
        showNotification('Product added to wishlist!', 'success');
    } else {
        showNotification('Product already in wishlist!', 'info');
    }
}

// Remove from wishlist
function removeFromWishlist(productId) {
    wishlist = wishlist.filter(item => item.id !== productId);
    localStorage.setItem('glowbeauty-wishlist', JSON.stringify(wishlist));
    updateWishlistCount();
    showNotification('Product removed from wishlist!', 'success');
}

// Show notification
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'}"></i>
        <span>${message}</span>
    `;
    
    document.body.appendChild(notification);
    
    // Add styles if not already added
    if (!document.querySelector('#notification-styles')) {
        const styles = document.createElement('style');
        styles.id = 'notification-styles';
        styles.textContent = `
            .notification {
                position: fixed;
                top: 20px;
                right: 20px;
                background: white;
                padding: 1rem 1.5rem;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                display: flex;
                align-items: center;
                gap: 0.5rem;
                z-index: 10000;
                animation: slideIn 0.3s ease;
            }
            .notification-success { border-left: 4px solid #10b981; }
            .notification-error { border-left: 4px solid #ef4444; }
            .notification-info { border-left: 4px solid #3b82f6; }
            .notification i { color: #f472b6; }
            @keyframes slideIn {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
        `;
        document.head.appendChild(styles);
    }
    
    setTimeout(() => {
        notification.style.animation = 'slideIn 0.3s ease reverse';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Authentication Modal
function initializeAuthModal() {
    // Create modal if it doesn't exist
    if (!document.getElementById('authModal')) {
        const modal = document.createElement('div');
        modal.id = 'authModal';
        modal.className = 'modal';
        modal.innerHTML = `
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="auth-tabs">
                    <button class="auth-tab active" data-tab="login">Login</button>
                    <button class="auth-tab" data-tab="signup">Sign Up</button>
                </div>
                
                <form class="auth-form active" id="loginForm">
                    <h2>Welcome Back</h2>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="auth-btn">Login</button>
                    <div class="auth-link">
                        <a href="#" id="forgotPassword">Forgot Password?</a>
                    </div>
                </form>
                
                <form class="auth-form" id="signupForm">
                    <h2>Create Account</h2>
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="auth-btn">Create Account</button>
                    <div class="auth-link">
                        Already have an account? <a href="#" class="switch-tab" data-tab="login">Login</a>
                    </div>
                </form>
            </div>
        `;
        document.body.appendChild(modal);
    }
    
    const authModal = document.getElementById('authModal');
    const authTabs = document.querySelectorAll('.auth-tab');
    const authForms = document.querySelectorAll('.auth-form');
    const closeBtn = authModal.querySelector('.close');
    
    // Open modal when user icon is clicked and not logged in
    if (userBtn) {
        userBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (!isLoggedIn) {
                authModal.style.display = 'block';
            } else {
                window.location.href = 'dashboard.html';
            }
        });
    }
    
    // Close modal
    closeBtn.addEventListener('click', () => {
        authModal.style.display = 'none';
    });
    
    window.addEventListener('click', (e) => {
        if (e.target === authModal) {
            authModal.style.display = 'none';
        }
    });
    
    // Tab switching
    authTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const targetTab = tab.dataset.tab;
            
            authTabs.forEach(t => t.classList.remove('active'));
            authForms.forEach(f => f.classList.remove('active'));
            
            tab.classList.add('active');
            document.getElementById(targetTab + 'Form').classList.add('active');
        });
    });
    
    // Form submissions
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Simulate login
        isLoggedIn = true;
        localStorage.setItem('glowbeauty-logged-in', 'true');
        authModal.style.display = 'none';
        updateAuthState();
        showNotification('Login successful!', 'success');
    });
    
    document.getElementById('signupForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Simulate signup
        isLoggedIn = true;
        localStorage.setItem('glowbeauty-logged-in', 'true');
        authModal.style.display = 'none';
        updateAuthState();
        showNotification('Account created successfully!', 'success');
    });
}

// Update authentication state
function updateAuthState() {
    if (userBtn) {
        if (isLoggedIn) {
            userBtn.classList.add('active');
            userBtn.title = 'My Account';
        } else {
            userBtn.classList.remove('active');
            userBtn.title = 'Login / Sign Up';
        }
    }
}

// Dashboard functionality
function initializeDashboard() {
    const dashboardNavLinks = document.querySelectorAll('.dashboard-nav .nav-link');
    const contentSections = document.querySelectorAll('.content-section');
    const logoutBtn = document.getElementById('logoutBtn');
    
    // Navigation switching
    dashboardNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (this.classList.contains('logout')) {
                // Handle logout
                isLoggedIn = false;
                localStorage.setItem('glowbeauty-logged-in', 'false');
                window.location.href = 'index.html';
                return;
            }
            
            const targetSection = this.dataset.section;
            
            // Update active nav link
            dashboardNavLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            
            // Show target section
            contentSections.forEach(section => {
                section.classList.remove('active');
                if (section.id === targetSection) {
                    section.classList.add('active');
                }
            });
            
            // Load section-specific content
            loadSectionContent(targetSection);
        });
    });
    
    // Load initial content
    loadSectionContent('overview');
}

// Load section-specific content
function loadSectionContent(section) {
    switch(section) {
        case 'orders':
            loadOrders();
            break;
        case 'wishlist':
            loadWishlistItems();
            break;
        case 'addresses':
            loadAddresses();
            break;
    }
}

// Load orders
function loadOrders() {
    const ordersList = document.getElementById('ordersList');
    if (!ordersList) return;
    
    // Sample orders data
    const orders = [
        {
            id: 'GB-2024-001',
            date: '2024-01-15',
            status: 'Delivered',
            total: '$89.99',
            items: ['Flawless Foundation', 'Vitamin C Serum']
        },
        {
            id: 'GB-2024-002',
            date: '2024-01-20',
            status: 'Shipped',
            total: '$156.50',
            items: ['Luxury Lipstick Set', 'Hydrating Moisturizer']
        }
    ];
    
    ordersList.innerHTML = orders.map(order => `
        <div class="order-item">
            <div class="order-header">
                <h4>Order ${order.id}</h4>
                <span class="order-status status-${order.status.toLowerCase()}">${order.status}</span>
            </div>
            <div class="order-details">
                <p>Date: ${order.date}</p>
                <p>Total: ${order.total}</p>
                <p>Items: ${order.items.join(', ')}</p>
            </div>
            <div class="order-actions">
                <button class="btn-secondary">View Details</button>
                <button class="btn-primary">Track Order</button>
            </div>
        </div>
    `).join('');
}

// Load wishlist items
function loadWishlistItems() {
    const wishlistGrid = document.getElementById('wishlistGrid');
    if (!wishlistGrid) return;
    
    if (wishlist.length === 0) {
        wishlistGrid.innerHTML = `
            <div class="empty-state">
                <i class="fas fa-heart"></i>
                <h3>Your wishlist is empty</h3>
                <p>Save products you love for later</p>
                <a href="products.html" class="cta-btn primary">Shop Now</a>
            </div>
        `;
        return;
    }
    
    wishlistGrid.innerHTML = wishlist.map(item => `
        <div class="wishlist-item">
            <img src="${item.image}" alt="${item.name}">
            <h4>${item.name}</h4>
            <p class="price">${item.price}</p>
            <div class="item-actions">
                <button onclick="addToCart('${item.id}', '${item.name}', '${item.price}', '${item.image}')" class="btn-primary">Add to Cart</button>
                <button onclick="removeFromWishlist('${item.id}')" class="btn-secondary">Remove</button>
            </div>
        </div>
    `).join('');
}

// Load addresses
function loadAddresses() {
    const addressesGrid = document.getElementById('addressesGrid');
    if (!addressesGrid) return;
    
    // Sample addresses
    const addresses = [
        {
            id: 1,
            type: 'Home',
            name: 'Sarah Johnson',
            address: '123 Main St, Apt 4B',
            city: 'New York, NY 10001',
            isDefault: true
        }
    ];
    
    addressesGrid.innerHTML = addresses.map(addr => `
        <div class="address-card ${addr.isDefault ? 'default' : ''}">
            <div class="address-header">
                <h4>${addr.type}</h4>
                ${addr.isDefault ? '<span class="default-badge">Default</span>' : ''}
            </div>
            <div class="address-details">
                <p><strong>${addr.name}</strong></p>
                <p>${addr.address}</p>
                <p>${addr.city}</p>
            </div>
            <div class="address-actions">
                <button class="btn-secondary">Edit</button>
                <button class="btn-danger">Delete</button>
            </div>
        </div>
    `).join('');
}

// Product filters
function initializeProductFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const sortSelect = document.getElementById('sortSelect');
    const viewToggle = document.querySelectorAll('.view-toggle');
    
    // Filter functionality
    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const category = this.dataset.category;
            filterProducts(category);
        });
    });
    
    // Sort functionality
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            sortProducts(this.value);
        });
    }
    
    // View toggle
    viewToggle.forEach(btn => {
        btn.addEventListener('click', function() {
            viewToggle.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const view = this.dataset.view;
            toggleProductView(view);
        });
    });
}

// Filter products by category
function filterProducts(category) {
    const productCards = document.querySelectorAll('.product-card');
    
    productCards.forEach(card => {
        if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Sort products
function sortProducts(sortBy) {
    const productsGrid = document.querySelector('.products-grid');
    const productCards = Array.from(document.querySelectorAll('.product-card'));
    
    productCards.sort((a, b) => {
        switch(sortBy) {
            case 'price-low':
                return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
            case 'price-high':
                return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
            case 'name':
                return a.dataset.name.localeCompare(b.dataset.name);
            case 'rating':
                return parseFloat(b.dataset.rating) - parseFloat(a.dataset.rating);
            default:
                return 0;
        }
    });
    
    productCards.forEach(card => productsGrid.appendChild(card));
}

// Toggle product view
function toggleProductView(view) {
    const productsGrid = document.querySelector('.products-grid');
    if (productsGrid) {
        productsGrid.className = view === 'list' ? 'products-list' : 'products-grid';
    }
}

// Contact form
function initializeContactForm() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Simulate form submission
            setTimeout(() => {
                showNotification('Message sent successfully! We\'ll get back to you soon.', 'success');
                this.reset();
            }, 1000);
        });
    }
}

// FAQ functionality
function initializeFAQ() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const faqItem = this.parentElement;
            const answer = faqItem.querySelector('.faq-answer');
            
            // Toggle active state
            faqItem.classList.toggle('active');
            
            // Toggle answer visibility
            if (faqItem.classList.contains('active')) {
                answer.style.display = 'block';
            } else {
                answer.style.display = 'none';
            }
        });
    });
}

// Search functionality
if (searchBtn) {
    searchBtn.addEventListener('click', function() {
        const query = searchInput.value.trim();
        if (query) {
            window.location.href = `products.html?search=${encodeURIComponent(query)}`;
        }
    });
}

if (searchInput) {
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            const query = this.value.trim();
            if (query) {
                window.location.href = `products.html?search=${encodeURIComponent(query)}`;
            }
        }
    });
}

// Add event listeners to product cards
document.addEventListener('click', function(e) {
    // Add to cart buttons
    if (e.target.classList.contains('add-to-cart-btn')) {
        const card = e.target.closest('.product-card');
        const productId = card.dataset.id || Date.now().toString();
        const name = card.querySelector('h3').textContent;
        const price = card.querySelector('.current-price').textContent;
        const image = card.querySelector('img').src;
        
        addToCart(productId, name, price, image);
    }
    
    // Add to wishlist buttons
    if (e.target.classList.contains('add-to-wishlist')) {
        const card = e.target.closest('.product-card');
        const productId = card.dataset.id || Date.now().toString();
        const name = card.querySelector('h3').textContent;
        const price = card.querySelector('.current-price').textContent;
        const image = card.querySelector('img').src;
        
        addToWishlist(productId, name, price, image);
    }
});

// Initialize cart page functionality
if (window.location.pathname.includes('cart.html')) {
    loadCartItems();
    initializeCheckout();
}

// Load cart items on cart page
function loadCartItems() {
    const cartItemsList = document.querySelector('.cart-items');
    const cartSummary = document.querySelector('.order-summary');
    
    if (!cartItemsList) return;
    
    if (cart.length === 0) {
        cartItemsList.innerHTML = `
            <div class="empty-cart">
                <i class="fas fa-shopping-bag"></i>
                <h3>Your cart is empty</h3>
                <p>Add some beautiful products to get started</p>
                <a href="products.html" class="cta-btn primary">Continue Shopping</a>
            </div>
        `;
        return;
    }
    
    // Render cart items
    cartItemsList.innerHTML = cart.map(item => `
        <div class="cart-item" data-id="${item.id}">
            <img src="${item.image}" alt="${item.name}">
            <div class="item-details">
                <h4>${item.name}</h4>
                <p class="item-price">${item.price}</p>
            </div>
            <div class="quantity-controls">
                <button class="qty-btn minus" onclick="updateQuantity('${item.id}', -1)">-</button>
                <span class="quantity">${item.quantity}</span>
                <button class="qty-btn plus" onclick="updateQuantity('${item.id}', 1)">+</button>
            </div>
            <div class="item-total">$${(parseFloat(item.price.replace('$', '')) * item.quantity).toFixed(2)}</div>
            <button class="remove-item" onclick="removeFromCart('${item.id}')">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    `).join('');
    
    updateCartSummary();
}

// Update item quantity
function updateQuantity(productId, change) {
    const item = cart.find(item => item.id === productId);
    if (item) {
        item.quantity += change;
        if (item.quantity <= 0) {
            removeFromCart(productId);
        } else {
            localStorage.setItem('glowbeauty-cart', JSON.stringify(cart));
            loadCartItems();
            updateCartCount();
        }
    }
}

// Remove from cart
function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    localStorage.setItem('glowbeauty-cart', JSON.stringify(cart));
    loadCartItems();
    updateCartCount();
    showNotification('Item removed from cart', 'info');
}

// Update cart summary
function updateCartSummary() {
    const subtotal = cart.reduce((sum, item) => sum + (parseFloat(item.price.replace('$', '')) * item.quantity), 0);
    const shipping = subtotal > 50 ? 0 : 5.99;
    const tax = subtotal * 0.08;
    const total = subtotal + shipping + tax;
    
    const summaryElement = document.querySelector('.order-summary');
    if (summaryElement) {
        summaryElement.innerHTML = `
            <h3>Order Summary</h3>
            <div class="summary-line">
                <span>Subtotal:</span>
                <span>$${subtotal.toFixed(2)}</span>
            </div>
            <div class="summary-line">
                <span>Shipping:</span>
                <span>${shipping === 0 ? 'Free' : '$' + shipping.toFixed(2)}</span>
            </div>
            <div class="summary-line">
                <span>Tax:</span>
                <span>$${tax.toFixed(2)}</span>
            </div>
            <div class="summary-line total">
                <span>Total:</span>
                <span>$${total.toFixed(2)}</span>
            </div>
            <button class="checkout-btn" onclick="openCheckoutModal()">Proceed to Checkout</button>
        `;
    }
}

// Initialize checkout
function initializeCheckout() {
    // Checkout modal functionality would go here
}

// Open checkout modal
function openCheckoutModal() {
    if (!isLoggedIn) {
        document.getElementById('authModal').style.display = 'block';
        showNotification('Please login to continue with checkout', 'info');
        return;
    }
    
    window.location.href = 'billing.html';
}

// Checkout page functionality
if (window.location.pathname.includes('checkout.html')) {
    initializeCheckoutPage();
}

// Billing page functionality
if (window.location.pathname.includes('billing.html')) {
    initializeBillingPage();
}

// Initialize checkout page
function initializeCheckoutPage() {
    let currentStep = 1;
    const totalSteps = 3;
    
    // Update progress indicator
    updateProgressIndicator();
    
    // Step navigation
    document.getElementById('continueToPayment')?.addEventListener('click', function() {
        if (validateShippingForm()) {
            goToStep(2);
        }
    });
    
    document.getElementById('continueToReview')?.addEventListener('click', function() {
        if (validatePaymentForm()) {
            goToStep(3);
            populateOrderReview();
        }
    });
    
    document.getElementById('backToShipping')?.addEventListener('click', function() {
        goToStep(1);
    });
    
    document.getElementById('backToPayment')?.addEventListener('click', function() {
        goToStep(2);
    });
    
    // Payment method selection
    const paymentMethods = document.querySelectorAll('input[name="paymentType"]');
    paymentMethods.forEach(method => {
        method.addEventListener('change', function() {
            const cardSection = document.getElementById('cardPaymentSection');
            if (this.value === 'card') {
                cardSection.style.display = 'block';
            } else {
                cardSection.style.display = 'none';
            }
        });
    });
    
    // Billing address checkbox
    const sameAsShippingCheckbox = document.getElementById('sameAsShipping');
    sameAsShippingCheckbox?.addEventListener('change', function() {
        const billingSection = document.getElementById('billingAddressSection');
        if (billingSection) {
            billingSection.style.display = this.checked ? 'none' : 'block';
        }
    });
    
    // Card number formatting
    const cardNumberInput = document.getElementById('cardNumber');
    cardNumberInput?.addEventListener('input', function() {
        let value = this.value.replace(/\s/g, '').replace(/[^0-9]/gi, '');
        let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
        this.value = formattedValue;
    });
    
    // Expiry date formatting
    const expiryInput = document.getElementById('expiryDate');
    expiryInput?.addEventListener('input', function() {
        let value = this.value.replace(/\D/g, '');
        if (value.length >= 2) {
            value = value.substring(0, 2) + '/' + value.substring(2, 4);
        }
        this.value = value;
    });
    
    // CVV validation
    const cvvInput = document.getElementById('cvv');
    cvvInput?.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '').substring(0, 4);
    });
    
    function goToStep(step) {
        currentStep = step;
        
        // Hide all steps
        document.querySelectorAll('.checkout-step').forEach(stepEl => {
            stepEl.classList.remove('active');
        });
        
        // Show current step
        document.getElementById(`checkoutStep${step}`).classList.add('active');
        
        // Update progress
        updateProgressIndicator();
    }
    
    function updateProgressIndicator() {
        const progressSteps = document.querySelectorAll('.progress-step');
        progressSteps.forEach((step, index) => {
            if (index + 1 < currentStep) {
                step.classList.add('completed');
                step.classList.remove('active');
            } else if (index + 1 === currentStep) {
                step.classList.add('active');
                step.classList.remove('completed');
            } else {
                step.classList.remove('active', 'completed');
            }
        });
    }
    
    function validateShippingForm() {
        const requiredFields = ['firstName', 'lastName', 'email', 'address', 'city', 'state', 'zipCode'];
        let isValid = true;
        
        requiredFields.forEach(fieldName => {
            const field = document.getElementById(fieldName);
            if (field && !field.value.trim()) {
                field.classList.add('error');
                isValid = false;
            } else if (field) {
                field.classList.remove('error');
            }
        });
        
        if (!isValid) {
            showNotification('Please fill in all required fields', 'error');
        }
        
        return isValid;
    }
    
    function validatePaymentForm() {
        const selectedPayment = document.querySelector('input[name="paymentType"]:checked');
        
        if (selectedPayment.value === 'card') {
            const requiredFields = ['cardNumber', 'expiryDate', 'cvv', 'cardName'];
            let isValid = true;
            
            requiredFields.forEach(fieldName => {
                const field = document.getElementById(fieldName);
                if (field && !field.value.trim()) {
                    field.classList.add('error');
                    isValid = false;
                } else if (field) {
                    field.classList.remove('error');
                }
            });
            
            if (!isValid) {
                showNotification('Please fill in all payment details', 'error');
                return false;
            }
        }
        
        return true;
    }
    
    function populateOrderReview() {
        const shippingReview = document.getElementById('shippingReview');
        const paymentReview = document.getElementById('paymentReview');
        
        if (shippingReview) {
            const firstName = document.getElementById('firstName')?.value || '';
            const lastName = document.getElementById('lastName')?.value || '';
            const address = document.getElementById('address')?.value || '';
            const city = document.getElementById('city')?.value || '';
            const state = document.getElementById('state')?.value || '';
            const zipCode = document.getElementById('zipCode')?.value || '';
            
            shippingReview.innerHTML = `
                <p><strong>${firstName} ${lastName}</strong></p>
                <p>${address}</p>
                <p>${city}, ${state} ${zipCode}</p>
            `;
        }
        
        if (paymentReview) {
            const selectedPayment = document.querySelector('input[name="paymentType"]:checked');
            const cardNumber = document.getElementById('cardNumber')?.value || '';
            
            if (selectedPayment.value === 'card') {
                paymentReview.innerHTML = `
                    <p><strong>Credit/Debit Card</strong></p>
                    <p>**** **** **** ${cardNumber.slice(-4)}</p>
                `;
            } else {
                paymentReview.innerHTML = `
                    <p><strong>${selectedPayment.parentElement.querySelector('span').textContent}</strong></p>
                `;
            }
        }
    }
}

// Initialize billing page
function initializeBillingPage() {
    // Payment method selection
    const paymentMethods = document.querySelectorAll('input[name="paymentMethod"]');
    paymentMethods.forEach(method => {
        method.addEventListener('change', function() {
            const cardSection = document.getElementById('cardSection');
            if (this.value === 'credit-card') {
                cardSection.style.display = 'block';
            } else {
                cardSection.style.display = 'none';
            }
        });
    });
    
    // Billing address toggle
    const billingAddressRadios = document.querySelectorAll('input[name="billingAddress"]');
    billingAddressRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            const differentAddressSection = document.getElementById('differentAddressSection');
            if (this.value === 'different') {
                differentAddressSection.style.display = 'block';
            } else {
                differentAddressSection.style.display = 'none';
            }
        });
    });
    
    // Card number formatting and validation
    const cardNumberInput = document.getElementById('cardNumber');
    cardNumberInput?.addEventListener('input', function() {
        let value = this.value.replace(/\s/g, '').replace(/[^0-9]/gi, '');
        let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
        this.value = formattedValue;
        
        // Update card type icon
        updateCardTypeIcon(value);
    });
    
    // Expiry date formatting
    const expiryInput = document.getElementById('expiryMonth');
    expiryInput?.addEventListener('input', function() {
        let value = this.value.replace(/\D/g, '');
        if (value.length >= 2) {
            value = value.substring(0, 2) + '/' + value.substring(2, 4);
        }
        this.value = value;
    });
    
    // CVV validation
    const cvvInput = document.getElementById('cvv');
    cvvInput?.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '').substring(0, 4);
    });
    
    // Promo code application
    const applyPromoBtn = document.getElementById('applyPromoBtn');
    applyPromoBtn?.addEventListener('click', function() {
        const promoCode = document.getElementById('promoCode').value.trim();
        if (promoCode) {
            applyPromoCode(promoCode);
        }
    });
    
    // Form submission
    const billingForm = document.getElementById('billingForm');
    billingForm?.addEventListener('submit', function(e) {
        e.preventDefault();
        if (validateBillingForm()) {
            processOrder();
        }
    });
    
    function updateCardTypeIcon(cardNumber) {
        const cardTypeIcon = document.getElementById('cardTypeIcon');
        if (!cardTypeIcon) return;
        
        const firstDigit = cardNumber.charAt(0);
        let cardType = 'credit-card';
        
        if (firstDigit === '4') {
            cardType = 'cc-visa';
        } else if (firstDigit === '5') {
            cardType = 'cc-mastercard';
        } else if (firstDigit === '3') {
            cardType = 'cc-amex';
        } else if (firstDigit === '6') {
            cardType = 'cc-discover';
        }
        
        cardTypeIcon.className = `fas fa-${cardType}`;
    }
    
    function applyPromoCode(code) {
        // Simulate promo code validation
        const validCodes = {
            'SAVE10': 0.10,
            'WELCOME20': 0.20,
            'BEAUTY15': 0.15
        };
        
        if (validCodes[code.toUpperCase()]) {
            const discount = validCodes[code.toUpperCase()];
            showNotification(`Promo code applied! ${(discount * 100)}% discount`, 'success');
            updateOrderSummary(discount);
        } else {
            showNotification('Invalid promo code', 'error');
        }
    }
    
    function updateOrderSummary(discount = 0) {
        const subtotal = 89.97; // This would be calculated from cart items
        const shipping = 0;
        const tax = subtotal * 0.08;
        const discountAmount = subtotal * discount;
        const total = subtotal + shipping + tax - discountAmount;
        
        const summaryElements = {
            subtotal: document.querySelector('.summary-line:nth-child(1) .summary-value'),
            discount: document.querySelector('.discount-line .summary-value'),
            shipping: document.querySelector('.summary-line:nth-child(3) .summary-value'),
            tax: document.querySelector('.summary-line:nth-child(4) .summary-value'),
            total: document.querySelector('.total-line .summary-value')
        };
        
        if (summaryElements.subtotal) summaryElements.subtotal.textContent = `$${subtotal.toFixed(2)}`;
        if (summaryElements.shipping) summaryElements.shipping.textContent = shipping === 0 ? 'Free' : `$${shipping.toFixed(2)}`;
        if (summaryElements.tax) summaryElements.tax.textContent = `$${tax.toFixed(2)}`;
        if (summaryElements.total) summaryElements.total.textContent = `$${total.toFixed(2)}`;
        
        if (discount > 0 && summaryElements.discount) {
            summaryElements.discount.textContent = `-$${discountAmount.toFixed(2)}`;
            summaryElements.discount.parentElement.style.display = 'flex';
        }
    }
    
    function validateBillingForm() {
        const selectedPayment = document.querySelector('input[name="paymentMethod"]:checked');
        
        if (selectedPayment.value === 'credit-card') {
            const requiredFields = ['cardNumber', 'expiryMonth', 'cvv', 'cardholderName'];
            let isValid = true;
            
            requiredFields.forEach(fieldName => {
                const field = document.getElementById(fieldName);
                if (field && !field.value.trim()) {
                    field.classList.add('error');
                    isValid = false;
                } else if (field) {
                    field.classList.remove('error');
                }
            });
            
            if (!isValid) {
                showNotification('Please fill in all payment details', 'error');
                return false;
            }
        }
        
        return true;
    }
    
    function processOrder() {
        // Show loading state
        const submitBtn = document.querySelector('.place-order-btn');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
        submitBtn.disabled = true;
        
        // Simulate order processing
        setTimeout(() => {
            // Reset button
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            
            // Show success modal
            const modal = document.getElementById('orderConfirmationModal');
            if (modal) {
                modal.style.display = 'block';
                
                // Generate order number
                const orderNumber = 'GB-' + new Date().getFullYear() + '-' + Math.random().toString(36).substr(2, 6).toUpperCase();
                const orderNumberElement = document.getElementById('orderNumber');
                if (orderNumberElement) {
                    orderNumberElement.textContent = orderNumber;
                }
            }
            
            // Clear cart
            cart = [];
            localStorage.setItem('glowbeauty-cart', JSON.stringify(cart));
            updateCartCount();
            
        }, 2000);
    }
    
    // Modal close functionality
    const modal = document.getElementById('orderConfirmationModal');
    const closeBtn = modal?.querySelector('.close');
    
    closeBtn?.addEventListener('click', function() {
        modal.style.display = 'none';
        window.location.href = 'dashboard.html';
    });
    
    window.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.style.display = 'none';
            window.location.href = 'dashboard.html';
        }
    });
}
