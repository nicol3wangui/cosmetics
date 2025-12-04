@extends('layouts.customer')
@section('content')
<?php
use App\Models\Category;
use App\Models\Product;

$categories=Category::all();
$products=Product::all();
?>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h2>Discover Your Perfect Beauty</h2>
                    <p>Premium cosmetics for every skin tone and style. Clean ingredients, cruelty-free, and dermatologist tested.</p>
                    <div class="hero-buttons">
                        <a href="products.html" class="cta-btn primary">Shop Now</a>
                        <a href="#featured" class="cta-btn secondary">Explore Collection</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=600&h=500&fit=crop" alt="Beauty Products">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="featured-categories">
        <div class="container">
            <h2 class="section-title">Shop by Category</h2>
            <div class="categories-grid">
                <!--<div class="category-card" data-category="skincare">
                    <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=300&h=200&fit=crop" alt="Skincare">
                    <div class="category-overlay">
                        <h3>Skincare</h3>
                        <p>Nourish & Protect</p>
                        <a href="products.html?category=skincare" class="category-btn">Shop Now</a>
                    </div>
                </div>-->
                @foreach($categories as $key=>$category)
                <div class="category-card" data-category="makeup">
                    <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?w=300&h=200&fit=crop" alt="Makeup">
                    <div class="category-overlay">
                        <h3>{{$category->category_name ?? 'NA'}}</h3>
                        <!--<p>Enhance Your Glow</p>-->
                        <a href="products.html?category=makeup" class="category-btn">Shop Now</a>
                    </div>
                </div>
                @endforeach
               <!-- <div class="category-card" data-category="haircare">
                    <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?w=300&h=200&fit=crop" alt="Hair Care">
                    <div class="category-overlay">
                        <h3>Hair Care</h3>
                        <p>Healthy & Beautiful</p>
                        <a href="products.html?category=haircare" class="category-btn">Shop Now</a>
                    </div>
                </div>-->
               <!-- <div class="category-card" data-category="fragrance">
                    <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?w=300&h=200&fit=crop" alt="Fragrance">
                    <div class="category-overlay">
                        <h3>Fragrance</h3>
                        <p>Signature Scents</p>
                        <a href="products.html?category=fragrance" class="category-btn">Shop Now</a>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products" id="featured">
        <div class="container">
            <h2 class="section-title">Featured Products</h2>
            <div class="products-grid" id="featuredProductsGrid">
                <!-- Featured Product Cards -->
                @foreach($products as $key=>$product)
                <div class="product-card" data-category="makeup" data-brand="charlotte-tilbury">
                    <div class="product-image">
                        <img src="{{asset('backend/images/products/'.$product->product_image)}}" alt="Charlotte Tilbury Lipstick">
                        <div class="product-badges">
                            <span class="badge limited">Limited Edition</span>
                        </div>
                        <div class="product-actions">
                            <button class="wishlist-btn" title="Add to Wishlist"><i class="fas fa-heart"></i></button>
                            <button class="quick-view-btn" title="Quick View"><i class="fas fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">{{$product->product_name ?? 'NA'}}</h3>
                        <p class="product-description">{{$product->product_description ?? 'NA'}}</p>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="rating-count">(2,034)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">Ksh:{{$product->product_price}}</span>
                        </div>
                        <a href="{{route('productDetails',['id'=>$product->id])}}" class="cta-btn primary "> 
                            <i class="fas fa-shopping-cart"></i> 
                            Add to cart
                        </a>
                       
                           
                           
                    </div>
                </div>
                @endforeach

            </div>
            <div class="text-center">
                <a href="{{route('products')}}" class="cta-btn primary">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Special Offers -->
    <section class="special-offers">
        <div class="container">
            <h2 class="section-title">Special Offers</h2>
            <div class="offers-grid">
                <div class="offer-card featured">
                    <div class="offer-content">
                        <div class="offer-badge">Limited Time</div>
                        <h3>Summer Glow Collection</h3>
                        <p>Get radiant summer-ready skin with our exclusive collection</p>
                        <div class="offer-price">
                            <span class="original-price">$120</span>
                            <span class="sale-price">$89</span>
                            <span class="discount">25% OFF</span>
                        </div>
                        <a href="products.html?offer=summer" class="offer-btn">Shop Collection</a>
                    </div>
                    <div class="offer-image">
                        <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=400&h=300&fit=crop" alt="Summer Collection">
                    </div>
                </div>
                <div class="offer-card">
                    <div class="offer-content">
                        <div class="offer-badge">New Arrival</div>
                        <h3>Clean Beauty Essentials</h3>
                        <div class="offer-price">
                            <span class="sale-price">$65</span>
                            <span class="discount">Free Shipping</span>
                        </div>
                        <a href="products.html?category=clean" class="offer-btn">Discover</a>
                    </div>
                </div>
                <div class="offer-card">
                    <div class="offer-content">
                        <div class="offer-badge">Best Seller</div>
                        <h3>Vitamin C Serum</h3>
                        <div class="offer-price">
                            <span class="original-price">$45</span>
                            <span class="sale-price">$32</span>
                        </div>
                        <a href="product-detail.html?id=vitamin-c-serum" class="offer-btn">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Customers Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p>"Amazing products! The foundation matches perfectly and lasts all day. Customer service is exceptional."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=80&h=80&fit=crop&crop=face" alt="Sarah M.">
                        <div>
                            <h4>Sarah M.</h4>
                            <span>Verified Customer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p>"Love the clean ingredients! Perfect for my sensitive skin. Fast shipping and beautiful packaging."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&crop=face" alt="Michael R.">
                        <div>
                            <h4>Michael R.</h4>
                            <span>Beauty Enthusiast</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p>"As a dermatologist, I recommend GlowBeauty to my patients. Quality ingredients and effective formulations."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=80&h=80&fit=crop&crop=face" alt="Dr. Aisha K.">
                        <div>
                            <h4>Dr. Aisha K.</h4>
                            <span>Dermatologist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">
                <h2>Stay Beautiful</h2>
                <p>Subscribe to get exclusive offers, beauty tips, and new product updates</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

    @endsection