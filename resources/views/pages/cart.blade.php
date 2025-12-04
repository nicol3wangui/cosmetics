
@extends('layouts.customer')
@section('content')
<style>
    table,thead,tbody,tr,th,td{
        border:1px solid #f472b6;
    }
</style>
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <nav>
                <a href="{{route('home')}}">Home</a> <span>Shopping Cart</span>
            </nav>
        </div>
    </div>

    <!-- Cart Section -->
    <section class="cart-section">
        <div class="container">
            <h1 class="page-title">Shopping Cart</h1>
            
            <div class="cart-wrapper">
                <!-- Cart Items -->
                <div class="cart-items">
                    <div class="cart-header">
                        <h2>Your Items ({{$total_items ?? 'O'}})</h2>
                        <form method="POST" action="{{route('customerdeletecartitems')}}">
                            @csrf
                             <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden="true">
                             @if($total_items !=0)
                             <button class="clear-cart-btn" id="clearCartBtn">Clear Cart</button>
                             @else
                             @endif
                        </form>
                    </div>

                    <div class="cart-list" id="cartList">
                        <!-- Cart items will be dynamically loaded here -->
                        <div class="empty-cart" id="emptyCart">

                           

                            @if($total_items !=0)

                             <table class="table">
                                <thead>
                                    <tr>
                                         <th>No</th>
                                         <th>Image</th>
                                         <th>Name</th>
                                         <th>Unit Price</th>
                                         <th>Qty</th>
                                         <th>Total (Ksh)</th>
                                         <th>Action</th>
                                    </tr>
                                </thead>
                                 @foreach($carts as $key=>$cart)
                                  <tr>
                                       <td>{{$key+1}}</td>
                                       <td>
                                           <img src="{{asset('backend/images/products/'.$cart->product->product_image)}}" width="70" height="50" style="border-radius:30px">
                                       </td>
                                       <td>{{$cart->product->product_name}}</td>
                                        <td>{{$cart->product->product_price}}</td>
                                       <td>{{$cart->qty}}</td>
                                       <td>{{$cart->qty*$cart->product->product_price}}</td>

                                       <td>
                                        <form method="POST" action="{{route('customerdeletecartitem')}}">
                                            @csrf
                                            <input type="text" name="id" value="{{$cart->id}}" hidden="true">
                                           <button type="submit" class="clear-cart-btn">Remove</button>
                                        </form>
                                       </td>
                                  </tr>
                                 @endforeach
                            </table>

                            @else
                            <i class="fas fa-shopping-bag"></i>
                            <h3>Your cart is empty</h3>
                            <p>Add some beautiful products to get started</p>
                            @endif
                            <br>
                            <a href="{{route('products')}}" class="continue-shopping-btn">Continue Shopping</a>

                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="order-summary">
                    <h3>Order Summary</h3>
                    <div class="summary-details">
                        <div class="summary-row">
                            <span>Subtotal:</span>
                            <span id="subtotal">Ksh: {{$total_price ?? 0}}</span>
                        </div>
                        <div class="summary-row">
                            <span>Shipping:</span>
                            <span id="shipping">Free</span>
                        </div>
                        <div class="summary-row">
                            <span>Tax:</span>
                            <span id="tax">Ksh : 0.00</span>
                        </div>
                        <div class="summary-row discount" id="discountRow" style="display: none;">
                            <span>Discount:</span>
                            <span id="discount">-$0.00</span>
                        </div>
                        <hr>
                        <div class="summary-row total">
                            <span>Total:</span>
                            <span id="total">Ksh: {{$total_price ?? 0}}</span>
                        </div>
                    </div>

                    <!--<div class="promo-code">
                        <input type="text" placeholder="Enter promo code" id="promoInput">
                        <button class="apply-promo-btn" id="applyPromoBtn">Apply</button>
                    </div>-->

                    <div class="checkout-actions">
                        <a href="#" class="checkout-btn" id="checkoutBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Proceed to Checkout</a>
                        <!--<a href="products.html" class="continue-shopping">Continue Shopping</a>-->
                    </div>

                    <!--<div class="payment-methods">
                        <h4>We Accept</h4>
                        <div class="payment-icons">
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-cc-amex"></i>
                            <i class="fab fa-cc-paypal"></i>
                            <i class="fab fa-apple-pay"></i>
                            <i class="fab fa-google-pay"></i>
                        </div>
                    </div>-->

                </div>
            </div>
        </div>
    </section>

 


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-xl" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
    




        <!-- Checkout Section -->
        <section class="checkout-page" >
           
                <div class="checkout-container" style="margin-top:-40px">
                    <!-- Checkout Form -->
                    <div class="checkout-form-section">
                        <!-- Step 1: Shipping Information -->
                        <div class="checkout-step active" id="checkoutStep1">
                            <!--<div class="step-header">
                                <h2><i class="fas fa-shipping-fast"></i> Shipping Information</h2>
                                <p>Please provide your delivery details</p>
                            </div>-->

                            <form class="checkout-form" id="shippingForm" method="POST" action="{{route('payForProduct')}}">
                                @csrf
                                <div class="form-section">
                                    <h3>Contact Information</h3>
                                    <div class="form-row">
                                        <input type="text" name="user_id" value="{{Auth::user()->id ?? 1}}" hidden="true">
                                        <div class="form-group">
                                            <label for="email">Email Address *</label>
                                            <input type="email" id="email" name="email" value="{{Auth::user()->email ?? ''}}" required>
                                            <small>We'll send your order confirmation here</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone Number *</label>
                                            <input type="tel" id="phone" name="phone" value="{{Auth::user()->phonenumber ?? ''}}" required>
                                            <small>For delivery updates</small>
                                        </div>
                                    </div>

                                     <div class="form-row">
                                        <div class="form-group">
                                            <label for="firstName">Full Name *</label>
                                            <input type="text" id="firstName" name="name" value="{{Auth::user()->name ?? ''}}" required>
                                        </div>
                                        <div class="form-group">
                                              <label for="address">Address *</label>
                                             <input type="text" id="address" name="address" value="{{Auth::user()->address ?? ''}}" placeholder="123 Main Street" >
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="firstName">Payment Method</label>
                                            <img src="{{asset('backend/images/products/mpesa.png')}}" style="width:200px;height:90px;border-radius:20px;">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Mpesa Number *</label>
                                            <input type="tel" id="phone" name="phone" value="{{Auth::user()->phonenumber ?? ''}}" required>
                                            <small>For transaction</small>
                                        </div>
                                    </div>

                                </div>

                               
                               

                                <div class="step-actions">
                                    <a type="button" class="btn-secondary" href="{{route('cart')}}">
                                        <i class="fas fa-arrow-left"></i> Back to Cart
                                    </a>
                                    <button type="submit" class="btn-primary" id="continueToPayment">
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
                                  @foreach($carts as $key=>$cart)
                                <div class="order-item">
                                    <div class="item-image">
                                        <img src="{{asset('backend/images/products/'.$cart->product->product_image)}}" alt="Fenty Beauty Foundation">
                                    </div>
                                    <div class="item-details">
                                        <h4>{{$cart->product->product_name ?? ''}}</h4>
                                        <p>Shade: {{$cart->product->product_price ?? ''}} • Qty: {{$cart->qty ?? ''}}</p>
                                    </div>
                                    <div class="item-price">{{$cart->product->product_price*$cart->qty}}</div>
                                </div>
                                @endforeach
                                
                              
                            </div>

                           

                            <div class="order-totals">
                                <div class="total-row">
                                    <span>Subtotal:</span>
                                    <span id="subtotalAmount">Ksh: {{$total_price ?? 0}}</span>
                                </div>
                                <div class="total-row">
                                    <span>Shipping:</span>
                                    <span id="shippingAmount">Free</span>
                                </div>
                                <div class="total-row">
                                    <span>Tax:</span>
                                    <span id="taxAmount">0.00</span>
                                </div>
                                <div class="total-row discount-row" id="discountRow" style="display: none;">
                                    <span>Discount:</span>
                                    <span id="discountAmount">0.00</span>
                                </div>
                                <hr>
                                <div class="total-row final-total">
                                    <span>Total:</span>
                                    <span id="finalTotal">Ksh: {{$total_price ?? 0}}</span>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </section>






      </div>
     
    </div>
  </div>
</div>

  @endsection  