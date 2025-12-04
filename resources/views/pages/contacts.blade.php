@extends('layouts.frontend')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <nav>
                <a href="index.html">Home</a> > <span>Contact Us</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="hero-content">
                <h1>Get in Touch</h1>
                <p>We'd love to hear from you! Whether you have questions about our products, need beauty advice, or want to share feedback, our team is here to help.</p>
            </div>
        </div>
    </section>

    <!-- Contact Methods -->
    <section class="contact-methods">
        <div class="container">
            <div class="methods-grid">
                <div class="method-card">
                    <div class="method-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p>Speak directly with our beauty experts</p>
                    <div class="contact-details">
                        <strong>+1 (555) 123-4567</strong>
                        <span>Mon-Fri: 9AM-6PM EST</span>
                    </div>
                </div>
                <div class="method-card">
                    <div class="method-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p>Send us a detailed message</p>
                    <div class="contact-details">
                        <strong>hello@glowbeauty.com</strong>
                        <span>Response within 24 hours</span>
                    </div>
                </div>
                <div class="method-card">
                    <div class="method-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Live Chat</h3>
                    <p>Instant help from our support team</p>
                    <div class="contact-details">
                        <button class="chat-btn">Start Chat</button>
                        <span>Available 24/7</span>
                    </div>
                </div>
                <div class="method-card">
                    <div class="method-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p>Come see our products in person</p>
                    <div class="contact-details">
                        <strong>123 Beauty Lane</strong>
                        <span>New York, NY 10001</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-wrapper">
                <div class="form-content">
                    <h2>Send Us a Message</h2>
                    <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                    
                    <form class="contact-form" id="contactForm">
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
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="product-inquiry">Product Inquiry</option>
                                <option value="order-support">Order Support</option>
                                <option value="returns">Returns & Exchanges</option>
                                <option value="beauty-advice">Beauty Advice</option>
                                <option value="partnership">Partnership Opportunities</option>
                                <option value="feedback">Feedback & Suggestions</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" placeholder="Tell us how we can help you..." required></textarea>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <span class="checkmark"></span>
                                Subscribe to our newsletter for beauty tips and exclusive offers
                            </label>
                        </div>
                        
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
                
                <div class="form-image">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=500&h=600&fit=crop" alt="Customer service">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-category">
                    <h3>Orders & Shipping</h3>
                    <div class="faq-list">
                        <div class="faq-item">
                            <button class="faq-question">How long does shipping take?</button>
                            <div class="faq-answer">
                                <p>Standard shipping takes 3-5 business days. Express shipping (1-2 days) is available for an additional fee. Free shipping on orders over $50.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">Can I track my order?</button>
                            <div class="faq-answer">
                                <p>Yes! You'll receive a tracking number via email once your order ships. You can also track orders in your account dashboard.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">Do you ship internationally?</button>
                            <div class="faq-answer">
                                <p>Currently, we ship to the US, Canada, and select European countries. International shipping rates apply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="faq-category">
                    <h3>Products & Ingredients</h3>
                    <div class="faq-list">
                        <div class="faq-item">
                            <button class="faq-question">Are your products cruelty-free?</button>
                            <div class="faq-answer">
                                <p>Absolutely! All GlowBeauty products are cruelty-free and never tested on animals. We're certified by Leaping Bunny.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">Do you have products for sensitive skin?</button>
                            <div class="faq-answer">
                                <p>Yes! Many of our products are formulated for sensitive skin. Look for the "Sensitive Skin Approved" badge on product pages.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">What ingredients do you avoid?</button>
                            <div class="faq-answer">
                                <p>We avoid parabens, sulfates, phthalates, synthetic fragrances, and other potentially harmful chemicals. Full ingredient lists are available on each product page.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="faq-category">
                    <h3>Returns & Exchanges</h3>
                    <div class="faq-list">
                        <div class="faq-item">
                            <button class="faq-question">What's your return policy?</button>
                            <div class="faq-answer">
                                <p>We offer a 30-day return policy for unopened products in original packaging. Opened products can be returned within 14 days if you're not satisfied.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">How do I return a product?</button>
                            <div class="faq-answer">
                                <p>Contact our customer service team to initiate a return. We'll provide a prepaid return label and full instructions.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">When will I receive my refund?</button>
                            <div class="faq-answer">
                                <p>Refunds are processed within 3-5 business days after we receive your returned items. The refund will appear on your original payment method.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2 class="section-title">Find Our Store</h2>
            <div class="map-wrapper">
                <div class="map-placeholder">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>GlowBeauty Flagship Store</h3>
                    <p>123 Beauty Lane<br>New York, NY 10001</p>
                    <div class="store-hours">
                        <h4>Store Hours:</h4>
                        <p>Monday - Friday: 10AM - 8PM<br>
                        Saturday: 10AM - 9PM<br>
                        Sunday: 11AM - 6PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
    