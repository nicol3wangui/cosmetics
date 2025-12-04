@extends('layouts.frontend')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <nav>
                <a href="index.html">Home</a> > <a href="cart.html">Cart</a> > <span>Checkout</span>
            </nav>
        </div>
    </div>

    <!-- Checkout Section -->
    <section class="checkout-page">
        <div class="container">
            <div class="checkout-header">
                <h1 class="page-title">Secure Checkout</h1>
                <div class="security-badges">
                    <div class="security-badge">
                        <i class="fas fa-shield-alt"></i>
                        <span>SSL Secured</span>
                    </div>
                    <div class="security-badge">
                        <i class="fas fa-lock"></i>
                        <span>256-bit Encryption</span>
                    </div>
                    <div class="security-badge">
                        <i class="fas fa-credit-card"></i>
                        <span>PCI Compliant</span>
                    </div>
                </div>
            </div>

            <!-- Progress Steps -->
            <div class="checkout-progress">
                <div class="progress-step active" data-step="1">
                    <div class="step-circle">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <span class="step-label">Shipping</span>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step" data-step="2">
                    <div class="step-circle">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <span class="step-label">Payment</span>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step" data-step="3">
                    <div class="step-circle">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <span class="step-label">Review</span>
                </div>
            </div>

            <div class="checkout-container">
                <!-- Checkout Form -->
                <div class="checkout-form-section">
                    <!-- Step 1: Shipping Information -->
                    <div class="checkout-step active" id="checkoutStep1">
                        <div class="step-header">
                            <h2><i class="fas fa-shipping-fast"></i> Shipping Information</h2>
                            <p>Please provide your delivery details</p>
                        </div>

                        <form class="checkout-form" id="shippingForm">
                            <div class="form-section">
                                <h3>Contact Information</h3>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="email">Email Address *</label>
                                        <input type="email" id="email" name="email" required>
                                        <small>We'll send your order confirmation here</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number *</label>
                                        <input type="tel" id="phone" name="phone" required>
                                        <small>For delivery updates</small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-section">
                                <h3>Shipping Address</h3>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="firstName">First Name *</label>
                                        <input type="text" id="firstName" name="firstName" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Last Name *</label>
                                        <input type="text" id="lastName" name="lastName" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Street Address *</label>
                                    <input type="text" id="address" name="address" placeholder="123 Main Street" required>
                                </div>
                                <div class="form-group">
                                    <label for="apartment">Apartment, Suite, etc. (Optional)</label>
                                    <input type="text" id="apartment" name="apartment" placeholder="Apt 4B">
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="city">City *</label>
                                        <input type="text" id="city" name="city" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="state">State *</label>
                                        <select id="state" name="state" required>
                                            <option value="">Select State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="zipCode">ZIP Code *</label>
                                        <input type="text" id="zipCode" name="zipCode" placeholder="12345" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-section">
                                <h3>Shipping Method</h3>
                                <div class="shipping-options">
                                    <label class="shipping-option selected">
                                        <input type="radio" name="shipping" value="standard" checked>
                                        <div class="option-content">
                                            <div class="option-header">
                                                <span class="option-name">Standard Shipping</span>
                                                <span class="option-price">FREE</span>
                                            </div>
                                            <div class="option-details">
                                                <span class="delivery-time">5-7 business days</span>
                                                <span class="delivery-info">Free on orders over $35</span>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="shipping-option">
                                        <input type="radio" name="shipping" value="express">
                                        <div class="option-content">
                                            <div class="option-header">
                                                <span class="option-name">Express Shipping</span>
                                                <span class="option-price">$9.99</span>
                                            </div>
                                            <div class="option-details">
                                                <span class="delivery-time">2-3 business days</span>
                                                <span class="delivery-info">Fast & reliable</span>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="shipping-option">
                                        <input type="radio" name="shipping" value="overnight">
                                        <div class="option-content">
                                            <div class="option-header">
                                                <span class="option-name">Overnight Shipping</span>
                                                <span class="option-price">$19.99</span>
                                            </div>
                                            <div class="option-details">
                                                <span class="delivery-time">Next business day</span>
                                                <span class="delivery-info">Order by 2 PM</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="step-actions">
                                <button type="button" class="btn-secondary" onclick="window.location.href='cart.html'">
                                    <i class="fas fa-arrow-left"></i> Back to Cart
                                </button>
                                <button type="button" class="btn-primary" id="continueToPayment">
                                    Continue to Payment <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Step 2: Payment Information -->
                    <div class="checkout-step" id="checkoutStep2">
                        <div class="step-header">
                            <h2><i class="fas fa-credit-card"></i> Payment Information</h2>
                            <p>Your payment information is secure and encrypted</p>
                        </div>

                        <form class="checkout-form" id="paymentForm">
                            <div class="form-section">
                                <h3>Payment Method</h3>
                                <div class="payment-methods">
                                    <label class="payment-method selected">
                                        <input type="radio" name="paymentType" value="card" checked>
                                        <div class="method-content">
                                            <i class="fas fa-credit-card"></i>
                                            <span>Credit/Debit Card</span>
                                        </div>
                                    </label>
                                    <label class="payment-method">
                                        <input type="radio" name="paymentType" value="paypal">
                                        <div class="method-content">
                                            <i class="fab fa-paypal"></i>
                                            <span>PayPal</span>
                                        </div>
                                    </label>
                                    <label class="payment-method">
                                        <input type="radio" name="paymentType" value="apple">
                                        <div class="method-content">
                                            <i class="fab fa-apple-pay"></i>
                                            <span>Apple Pay</span>
                                        </div>
                                    </label>
                                    <label class="payment-method">
                                        <input type="radio" name="paymentType" value="google">
                                        <div class="method-content">
                                            <i class="fab fa-google-pay"></i>
                                            <span>Google Pay</span>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-section" id="cardPaymentSection">
                                <h3>Card Information</h3>
                                <div class="form-group">
                                    <label for="cardNumber">Card Number *</label>
                                    <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>
                                    <div class="card-icons">
                                        <i class="fab fa-cc-visa"></i>
                                        <i class="fab fa-cc-mastercard"></i>
                                        <i class="fab fa-cc-amex"></i>
                                        <i class="fab fa-cc-discover"></i>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="expiryDate">Expiry Date *</label>
                                        <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cvv">CVV *</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="123" required>
                                        <small><i class="fas fa-info-circle"></i> 3-4 digits on back of card</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cardName">Name on Card *</label>
                                    <input type="text" id="cardName" name="cardName" placeholder="John Doe" required>
                                </div>
                            </div>

                            <div class="form-section">
                                <h3>Billing Address</h3>
                                <label class="checkbox-option">
                                    <input type="checkbox" id="sameAsShipping" checked>
                                    <span class="checkmark"></span>
                                    <span class="checkbox-text">Same as shipping address</span>
                                </label>
                            </div>

                            <div class="step-actions">
                                <button type="button" class="btn-secondary" id="backToShipping">
                                    <i class="fas fa-arrow-left"></i> Back to Shipping
                                </button>
                                <button type="button" class="btn-primary" id="continueToReview">
                                    Review Order <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Step 3: Order Review -->
                    <div class="checkout-step" id="checkoutStep3">
                        <div class="step-header">
                            <h2><i class="fas fa-check-circle"></i> Review Your Order</h2>
                            <p>Please review your order details before placing your order</p>
                        </div>

                        <div class="order-review-section">
                            <div class="review-card">
                                <h3><i class="fas fa-shipping-fast"></i> Shipping Information</h3>
                                <div class="review-content" id="shippingReview">
                                    <!-- Shipping details will be populated here -->
                                </div>
                                <button type="button" class="edit-btn" onclick="goToStep(1)">Edit</button>
                            </div>

                            <div class="review-card">
                                <h3><i class="fas fa-credit-card"></i> Payment Information</h3>
                                <div class="review-content" id="paymentReview">
                                    <!-- Payment details will be populated here -->
                                </div>
                                <button type="button" class="edit-btn" onclick="goToStep(2)">Edit</button>
                            </div>
                        </div>

                        <div class="step-actions">
                            <button type="button" class="btn-secondary" id="backToPayment">
                                <i class="fas fa-arrow-left"></i> Back to Payment
                            </button>
                            <button type="button" class="btn-primary btn-place-order" onclick="window.location.href='billing.html'">
                                <i class="fas fa-arrow-right"></i> Continue to Billing
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="order-summary-section">
                    <div class="summary-card">
                        <h3>Order Summary</h3>
                        
                        <div class="order-items" id="orderItems">
                            <!-- Sample items - these would be populated dynamically -->
                            <div class="order-item">
                                <div class="item-image">
                                    <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=100&h=100&fit=crop&crop=center" alt="Fenty Beauty Foundation">
                                </div>
                                <div class="item-details">
                                    <h4>Fenty Beauty Pro Filt'r Foundation</h4>
                                    <p>Shade: 240 • Qty: 1</p>
                                </div>
                                <div class="item-price">$36.00</div>
                            </div>
                            
                            <div class="order-item">
                                <div class="item-image">
                                    <img src="https://images.unsplash.com/photo-1631214540242-3cd8c4b1b3c5?w=100&h=100&fit=crop&crop=center" alt="Urban Decay Eyeshadow">
                                </div>
                                <div class="item-details">
                                    <h4>Urban Decay Naked Eyeshadow Palette</h4>
                                    <p>Heat Collection • Qty: 1</p>
                                </div>
                                <div class="item-price">$54.00</div>
                            </div>
                            
                            <div class="order-item">
                                <div class="item-image">
                                    <img src="https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=100&h=100&fit=crop&crop=center" alt="Charlotte Tilbury Lipstick">
                                </div>
                                <div class="item-details">
                                    <h4>Charlotte Tilbury Matte Revolution Lipstick</h4>
                                    <p>Pillow Talk • Qty: 2</p>
                                </div>
                                <div class="item-price">$68.00</div>
                            </div>
                        </div>

                        <div class="promo-section">
                            <div class="promo-input">
                                <input type="text" placeholder="Enter promo code" id="promoCode">
                                <button type="button" class="apply-btn">Apply</button>
                            </div>
                        </div>

                        <div class="order-totals">
                            <div class="total-row">
                                <span>Subtotal:</span>
                                <span id="subtotalAmount">$158.00</span>
                            </div>
                            <div class="total-row">
                                <span>Shipping:</span>
                                <span id="shippingAmount">Free</span>
                            </div>
                            <div class="total-row">
                                <span>Tax:</span>
                                <span id="taxAmount">$12.64</span>
                            </div>
                            <div class="total-row discount-row" id="discountRow" style="display: none;">
                                <span>Discount:</span>
                                <span id="discountAmount">-$15.80</span>
                            </div>
                            <hr>
                            <div class="total-row final-total">
                                <span>Total:</span>
                                <span id="finalTotal">$170.64</span>
                            </div>
                        </div>

                        <div class="trust-badges">
                            <div class="trust-badge">
                                <i class="fas fa-truck"></i>
                                <span>Free shipping over $35</span>
                            </div>
                            <div class="trust-badge">
                                <i class="fas fa-undo"></i>
                                <span>30-day returns</span>
                            </div>
                            <div class="trust-badge">
                                <i class="fas fa-shield-alt"></i>
                                <span>Secure checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content success-modal">
            <div class="success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2>Order Placed Successfully!</h2>
            <p>Thank you for your purchase. Your order confirmation has been sent to your email.</p>
            <div class="order-details">
                <p><strong>Order Number:</strong> #GB-2024-001234</p>
                <p><strong>Estimated Delivery:</strong> March 15-17, 2024</p>
            </div>
            <div class="success-actions">
                <button type="button" class="btn-primary" onclick="window.location.href='index.html'">
                    Continue Shopping
                </button>
                <button type="button" class="btn-secondary" onclick="window.location.href='dashboard.html'">
                    View Order Status
                </button>
            </div>
        </div>
    </div>
@endsection
    