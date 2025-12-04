
@extends('layouts.frontend')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <nav>
                <a href="index.html">Home</a> > <a href="cart.html">Cart</a> > <a href="checkout.html">Checkout</a> > <span>Billing</span>
            </nav>
        </div>
    </div>

    <!-- Billing Section -->
    <section class="billing-page">
        <div class="container">
            <div class="billing-header">
                <h1 class="page-title">Billing Information</h1>
                <div class="billing-progress">
                    <div class="progress-indicator">
                        <div class="progress-step completed">
                            <i class="fas fa-check"></i>
                            <span>Cart</span>
                        </div>
                        <div class="progress-line completed"></div>
                        <div class="progress-step completed">
                            <i class="fas fa-check"></i>
                            <span>Shipping</span>
                        </div>
                        <div class="progress-line completed"></div>
                        <div class="progress-step active">
                            <i class="fas fa-credit-card"></i>
                            <span>Billing</span>
                        </div>
                        <div class="progress-line"></div>
                        <div class="progress-step">
                            <i class="fas fa-receipt"></i>
                            <span>Review</span>
                        </div>
                    </div>
                </div>
                <div class="security-notice">
                    <i class="fas fa-shield-alt"></i>
                    <span>Your payment information is encrypted and secure</span>
                </div>
            </div>

            <div class="billing-container">
                <!-- Billing Form -->
                <div class="billing-form-section">
                    <form class="billing-form" id="billingForm">
                        <!-- Payment Method Selection -->
                        <div class="form-section">
                            <h2><i class="fas fa-credit-card"></i> Payment Method</h2>
                            <div class="payment-methods-grid">
                                <label class="payment-method-card selected">
                                    <input type="radio" name="paymentMethod" value="credit-card" checked>
                                    <div class="method-icon">
                                        <i class="fas fa-credit-card"></i>
                                    </div>
                                    <div class="method-info">
                                        <h3>Credit/Debit Card</h3>
                                        <p>Visa, Mastercard, American Express</p>
                                    </div>
                                    <div class="card-logos">
                                        <i class="fab fa-cc-visa"></i>
                                        <i class="fab fa-cc-mastercard"></i>
                                        <i class="fab fa-cc-amex"></i>
                                    </div>
                                </label>

                                <label class="payment-method-card">
                                    <input type="radio" name="paymentMethod" value="paypal">
                                    <div class="method-icon">
                                        <i class="fab fa-paypal"></i>
                                    </div>
                                    <div class="method-info">
                                        <h3>PayPal</h3>
                                        <p>Pay with your PayPal account</p>
                                    </div>
                                </label>

                                <label class="payment-method-card">
                                    <input type="radio" name="paymentMethod" value="apple-pay">
                                    <div class="method-icon">
                                        <i class="fab fa-apple-pay"></i>
                                    </div>
                                    <div class="method-info">
                                        <h3>Apple Pay</h3>
                                        <p>Touch ID or Face ID</p>
                                    </div>
                                </label>

                                <label class="payment-method-card">
                                    <input type="radio" name="paymentMethod" value="google-pay">
                                    <div class="method-icon">
                                        <i class="fab fa-google-pay"></i>
                                    </div>
                                    <div class="method-info">
                                        <h3>Google Pay</h3>
                                        <p>Quick and secure payments</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Credit Card Information -->
                        <div class="form-section" id="creditCardSection">
                            <h2><i class="fas fa-lock"></i> Card Information</h2>
                            <div class="card-form">
                                <div class="form-group">
                                    <label for="cardNumber">Card Number *</label>
                                    <div class="card-input-wrapper">
                                        <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" maxlength="19" required>
                                        <div class="card-type-icon" id="cardTypeIcon"></div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="expiryDate">Expiry Date *</label>
                                        <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" maxlength="5" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cvv">CVV *</label>
                                        <div class="cvv-input-wrapper">
                                            <input type="text" id="cvv" name="cvv" placeholder="123" maxlength="4" required>
                                            <div class="cvv-info">
                                                <i class="fas fa-question-circle"></i>
                                                <div class="cvv-tooltip">
                                                    <p>3-digit code on the back of your card</p>
                                                    <p>4-digit code on the front for Amex</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="cardholderName">Cardholder Name *</label>
                                    <input type="text" id="cardholderName" name="cardholderName" placeholder="John Doe" required>
                                </div>
                            </div>
                        </div>

                        <!-- Billing Address -->
                        <div class="form-section">
                            <h2><i class="fas fa-map-marker-alt"></i> Billing Address</h2>
                            <div class="billing-address-options">
                                <label class="address-option selected">
                                    <input type="radio" name="billingAddress" value="same-as-shipping" checked>
                                    <div class="option-content">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Same as shipping address</span>
                                    </div>
                                </label>
                                <label class="address-option">
                                    <input type="radio" name="billingAddress" value="different">
                                    <div class="option-content">
                                        <i class="fas fa-plus-circle"></i>
                                        <span>Use a different billing address</span>
                                    </div>
                                </label>
                            </div>

                            <div class="different-address-form" id="differentAddressForm" style="display: none;">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="billingFirstName">First Name *</label>
                                        <input type="text" id="billingFirstName" name="billingFirstName">
                                    </div>
                                    <div class="form-group">
                                        <label for="billingLastName">Last Name *</label>
                                        <input type="text" id="billingLastName" name="billingLastName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="billingAddress">Street Address *</label>
                                    <input type="text" id="billingAddress" name="billingAddress" placeholder="123 Main Street">
                                </div>
                                <div class="form-group">
                                    <label for="billingApartment">Apartment, Suite, etc. (Optional)</label>
                                    <input type="text" id="billingApartment" name="billingApartment" placeholder="Apt 4B">
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="billingCity">City *</label>
                                        <input type="text" id="billingCity" name="billingCity">
                                    </div>
                                    <div class="form-group">
                                        <label for="billingState">State *</label>
                                        <select id="billingState" name="billingState">
                                            <option value="">Select State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="CA">California</option>
                                            <option value="FL">Florida</option>
                                            <option value="NY">New York</option>
                                            <option value="TX">Texas</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="billingZip">ZIP Code *</label>
                                        <input type="text" id="billingZip" name="billingZip" placeholder="12345">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Options -->
                        <div class="form-section">
                            <h2><i class="fas fa-cog"></i> Additional Options</h2>
                            <div class="additional-options">
                                <label class="checkbox-option">
                                    <input type="checkbox" id="savePaymentMethod">
                                    <span class="checkmark"></span>
                                    <div class="option-text">
                                        <span class="option-title">Save payment method</span>
                                        <span class="option-description">Securely save this card for faster checkout next time</span>
                                    </div>
                                </label>
                                
                                <label class="checkbox-option">
                                    <input type="checkbox" id="subscribeNewsletter">
                                    <span class="checkmark"></span>
                                    <div class="option-text">
                                        <span class="option-title">Subscribe to newsletter</span>
                                        <span class="option-description">Get exclusive offers and beauty tips delivered to your inbox</span>
                                    </div>
                                </label>
                                
                                <label class="checkbox-option">
                                    <input type="checkbox" id="agreeTerms" required>
                                    <span class="checkmark"></span>
                                    <div class="option-text">
                                        <span class="option-title">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> *</span>
                                        <span class="option-description">Required to complete your purchase</span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="billing-actions">
                            <button type="button" class="btn-secondary" onclick="window.location.href='checkout.html'">
                                <i class="fas fa-arrow-left"></i> Back to Checkout
                            </button>
                            <button type="submit" class="btn-primary btn-complete-order">
                                <i class="fas fa-lock"></i> Complete Order
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Order Summary -->
                <div class="order-summary-section">
                    <div class="summary-card">
                        <h3><i class="fas fa-receipt"></i> Order Summary</h3>
                        
                        <div class="order-items">
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
                            <div class="applied-promo" id="appliedPromo" style="display: none;">
                                <div class="promo-info">
                                    <i class="fas fa-tag"></i>
                                    <span>BEAUTY20 Applied</span>
                                </div>
                                <button type="button" class="remove-promo">Remove</button>
                            </div>
                            <div class="promo-input" id="promoInput">
                                <input type="text" placeholder="Enter promo code" id="promoCodeInput">
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
                                <span>Discount (BEAUTY20):</span>
                                <span id="discountAmount">-$31.60</span>
                            </div>
                            <hr>
                            <div class="total-row final-total">
                                <span>Total:</span>
                                <span id="finalTotal">$170.64</span>
                            </div>
                        </div>

                        <div class="payment-security">
                            <div class="security-badges">
                                <div class="security-badge">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>SSL Secured</span>
                                </div>
                                <div class="security-badge">
                                    <i class="fas fa-lock"></i>
                                    <span>256-bit Encryption</span>
                                </div>
                            </div>
                            <div class="accepted-cards">
                                <span>We Accept:</span>
                                <div class="card-icons">
                                    <i class="fab fa-cc-visa"></i>
                                    <i class="fab fa-cc-mastercard"></i>
                                    <i class="fab fa-cc-amex"></i>
                                    <i class="fab fa-cc-discover"></i>
                                    <i class="fab fa-cc-paypal"></i>
                                </div>
                            </div>
                        </div>

                        <div class="guarantee-badges">
                            <div class="guarantee-badge">
                                <i class="fas fa-truck"></i>
                                <div class="badge-text">
                                    <span class="badge-title">Free Shipping</span>
                                    <span class="badge-desc">On orders over $35</span>
                                </div>
                            </div>
                            <div class="guarantee-badge">
                                <i class="fas fa-undo"></i>
                                <div class="badge-text">
                                    <span class="badge-title">30-Day Returns</span>
                                    <span class="badge-desc">Hassle-free returns</span>
                                </div>
                            </div>
                            <div class="guarantee-badge">
                                <i class="fas fa-award"></i>
                                <div class="badge-text">
                                    <span class="badge-title">Quality Guarantee</span>
                                    <span class="badge-desc">100% authentic products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Confirmation Modal -->
    <div id="orderConfirmationModal" class="modal">
        <div class="modal-content confirmation-modal">
            <div class="confirmation-header">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h2>Order Confirmed!</h2>
                <p>Thank you for your purchase, Sarah!</p>
            </div>
            
            <div class="order-confirmation-details">
                <div class="confirmation-info">
                    <div class="info-item">
                        <span class="label">Order Number:</span>
                        <span class="value">#GB-2024-001234</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Order Total:</span>
                        <span class="value">$170.64</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Estimated Delivery:</span>
                        <span class="value">March 15-17, 2024</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Tracking Email:</span>
                        <span class="value">sarah@example.com</span>
                    </div>
                </div>
                
                <div class="next-steps">
                    <h4>What's Next?</h4>
                    <ul>
                        <li><i class="fas fa-envelope"></i> Order confirmation sent to your email</li>
                        <li><i class="fas fa-box"></i> Your order will be processed within 24 hours</li>
                        <li><i class="fas fa-truck"></i> Tracking information will be provided once shipped</li>
                    </ul>
                </div>
            </div>
            
            <div class="confirmation-actions">
                <button type="button" class="btn-primary" onclick="window.location.href='index.html'">
                    Continue Shopping
                </button>
                <button type="button" class="btn-secondary" onclick="window.location.href='dashboard.html'">
                    Track Your Order
                </button>
            </div>
        </div>
    </div>
@endsection
