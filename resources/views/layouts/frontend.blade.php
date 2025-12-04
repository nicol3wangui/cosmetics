<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowBeauty - Premium Cosmetics & Beauty Products</title>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="{{asset('frontend/js/script.js')}}" defer></script>
    <style>
        /* Import elegant fonts */
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap');

/* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    color: #5a4a4a;
    background-color: #fefefe;
}

.container {
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

/* Breadcrumb */
.breadcrumb {
    background: #fdf2f8;
    padding: 1rem 0;
    border-bottom: 1px solid rgba(244, 114, 182, 0.1);
}

.breadcrumb nav {
    color: #8b7355;
    font-size: 0.9rem;
}

.breadcrumb a {
    color: #f472b6;
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb a:hover {
    color: #d946ef;
}

/* Hero Section */
.hero {
    background: linear-gradient(135deg, #fdf2f8 0%, #f3e8ff 50%, #fce7f3 100%);
    padding: 4rem 0;
    min-height: 500px;
}

.hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.hero-text h2 {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    font-weight: 700;
    background: linear-gradient(135deg, #6b5b73, #f472b6, #d946ef);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1rem;
    line-height: 1.2;
}

.hero-text p {
    font-size: 1.3rem;
    color: #8b7355;
    margin-bottom: 2rem;
    font-weight: 400;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
}

.cta-btn {
    padding: 1.2rem 2.5rem;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 1.1rem;
    display: inline-block;
}

.cta-btn.primary {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    box-shadow: 0 8px 25px rgba(244, 114, 182, 0.3);
}

.cta-btn.primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(244, 114, 182, 0.4);
}

.cta-btn.secondary {
    background: transparent;
    color: #f472b6;
    border: 2px solid #f472b6;
}

.cta-btn.secondary:hover {
    background: #f472b6;
    color: white;
    transform: translateY(-2px);
}

.hero-image img {
    width: 100%;
    border-radius: 25px;
    box-shadow: 0 20px 50px rgba(244, 114, 182, 0.2);
}

/* Section Titles */
.section-title {
    text-align: center;
    font-family: 'Playfair Display', serif;
    font-size: 2.8rem;
    font-weight: 600;
    margin-bottom: 3rem;
    background: linear-gradient(135deg, #6b5b73, #f472b6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Featured Categories */
.featured-categories {
    padding: 4rem 0;
    background: white;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.category-card {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    height: 300px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.category-card:hover {
    transform: translateY(-5px);
}

.category-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.category-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(244, 114, 182, 0.8), rgba(217, 70, 239, 0.8));
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
}

.category-overlay h3 {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

.category-overlay p {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
}

.category-btn {
    background: white;
    color: #f472b6;
    padding: 0.8rem 2rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.category-btn:hover {
    background: rgba(255, 255, 255, 0.9);
    transform: scale(1.05);
}

/* Products Grid */
.featured-products, .products-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
}

.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.product-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(244, 114, 182, 0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(244, 114, 182, 0.1);
    position: relative;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(244, 114, 182, 0.2);
}

.product-image {
    position: relative;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}

.product-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(244, 114, 182, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.product-card:hover .product-overlay {
    opacity: 1;
}

.quick-view {
    background: white;
    color: #f472b6;
    border: none;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.quick-view:hover {
    background: #f472b6;
    color: white;
}

.add-to-wishlist {
    background: white;
    color: #f472b6;
    border: none;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.add-to-wishlist:hover {
    background: #f472b6;
    color: white;
    transform: scale(1.1);
}

.product-info {
    padding: 1.5rem;
}

.product-brand {
    color: #f472b6;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.product-info h3 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #6b5b73;
    margin-bottom: 0.8rem;
    line-height: 1.3;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.stars {
    color: #fbbf24;
    font-size: 0.9rem;
}

.product-rating span {
    color: #8b7355;
    font-size: 0.9rem;
}

.product-price {
    margin-bottom: 1.5rem;
}

.current-price {
    font-size: 1.3rem;
    font-weight: 700;
    color: #f472b6;
}

.original-price {
    text-decoration: line-through;
    color: #a1a1aa;
    margin-left: 0.5rem;
}

.discount-badge {
    background: linear-gradient(135deg, #f97316, #ea580c);
    color: white;
    padding: 0.2rem 0.5rem;
    border-radius: 8px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-left: 0.5rem;
}

.add-to-cart-btn {
    width: 100%;
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border: none;
    padding: 1rem;
    border-radius: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.add-to-cart-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.4);
}

/* Special Offers Section */
.special-offers {
    padding: 4rem 0;
    background: linear-gradient(135deg, #fdf2f8 0%, #f3e8ff 100%);
    position: relative;
    overflow: hidden;
}

.special-offers::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(244, 114, 182, 0.1) 0%, transparent 70%);
    border-radius: 50%;
}

.special-offers::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: -10%;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(217, 70, 239, 0.08) 0%, transparent 70%);
    border-radius: 50%;
}

.offers-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    gap: 2rem;
    margin-bottom: 2rem;
}

.offer-card {
    background: white;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(244, 114, 182, 0.15);
    transition: all 0.4s ease;
    position: relative;
    border: 1px solid rgba(244, 114, 182, 0.1);
}

.offer-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 25px 60px rgba(244, 114, 182, 0.25);
}

.offer-card.featured {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    min-height: 300px;
}

.offer-card.featured::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.offer-content {
    padding: 2.5rem;
    position: relative;
    z-index: 2;
}

.offer-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 1rem;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.offer-card:not(.featured) .offer-badge {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    backdrop-filter: none;
    border: none;
}

.offer-content h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.3;
}

.offer-card:not(.featured) .offer-content h3 {
    color: #6b5b73;
    font-size: 1.4rem;
}

.offer-content p {
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
    opacity: 0.9;
}

.offer-card:not(.featured) .offer-content p {
    color: #8b7355;
    opacity: 1;
}

.offer-price {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}

.original-price {
    text-decoration: line-through;
    color: rgba(255, 255, 255, 0.7);
    font-size: 1rem;
}

.offer-card:not(.featured) .original-price {
    color: #a1a1aa;
}

.sale-price {
    font-size: 2rem;
    font-weight: 700;
    color: white;
}

.offer-card:not(.featured) .sale-price {
    color: #f472b6;
    font-size: 1.6rem;
}

.discount {
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 0.3rem 0.8rem;
    border-radius: 15px;
    font-size: 0.9rem;
    font-weight: 600;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.offer-card:not(.featured) .discount {
    background: linear-gradient(135deg, #10b981, #059669);
    backdrop-filter: none;
    border: none;
}

.offer-btn {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 1rem 2rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.3);
    position: relative;
    overflow: hidden;
}

.offer-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.offer-btn:hover::before {
    left: 100%;
}

.offer-btn:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(255, 255, 255, 0.2);
}

.offer-card:not(.featured) .offer-btn {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    backdrop-filter: none;
    border: none;
}

.offer-card:not(.featured) .offer-btn:hover {
    background: linear-gradient(135deg, #d946ef, #c084fc);
    box-shadow: 0 8px 25px rgba(244, 114, 182, 0.4);
}

.offer-image {
    position: relative;
    overflow: hidden;
    height: 100%;
    min-height: 200px;
}

.offer-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.offer-card:hover .offer-image img {
    transform: scale(1.1);
}

.offer-card:not(.featured) {
    text-align: center;
    min-height: 280px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* Sparkle Animation */
.offer-card.featured::after {
    content: '✨';
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 1.5rem;
    animation: sparkle 2s ease-in-out infinite;
}

@keyframes sparkle {
    0%, 100% { 
        opacity: 0.7; 
        transform: scale(1) rotate(0deg); 
    }
    50% { 
        opacity: 1; 
        transform: scale(1.2) rotate(180deg); 
    }
}

/* Pulse effect for badges */
.offer-badge {
    animation: pulse 3s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { 
        transform: scale(1); 
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4); 
    }
    50% { 
        transform: scale(1.05); 
        box-shadow: 0 0 0 10px rgba(255, 255, 255, 0); 
    }
}

/* Testimonials Section */
.testimonials {
    padding: 5rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 50%, #f3e8ff 100%);
    position: relative;
    overflow: hidden;
}

.testimonials::before {
    content: '';
    position: absolute;
    top: -10%;
    left: -5%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(244, 114, 182, 0.05) 0%, transparent 70%);
    border-radius: 50%;
}

.testimonials::after {
    content: '';
    position: absolute;
    bottom: -15%;
    right: -10%;
    width: 350px;
    height: 350px;
    background: radial-gradient(circle, rgba(217, 70, 239, 0.04) 0%, transparent 70%);
    border-radius: 50%;
}

.testimonials .section-title {
    position: relative;
    z-index: 2;
    margin-bottom: 4rem;
}

.testimonials .section-title::after {
    content: '💬';
    position: absolute;
    top: -10px;
    right: 50%;
    transform: translateX(50%);
    font-size: 2rem;
    opacity: 0.3;
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2.5rem;
    position: relative;
    z-index: 2;
}

.testimonial-card {
    background: white;
    border-radius: 25px;
    padding: 2.5rem;
    box-shadow: 0 15px 40px rgba(244, 114, 182, 0.12);
    transition: all 0.4s ease;
    position: relative;
    border: 1px solid rgba(244, 114, 182, 0.08);
    overflow: hidden;
}

.testimonial-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #f472b6, #d946ef, #c084fc);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
}

.testimonial-card:hover::before {
    transform: scaleX(1);
}

.testimonial-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 25px 60px rgba(244, 114, 182, 0.2);
    border-color: rgba(244, 114, 182, 0.15);
}

.testimonial-card::after {
    content: '"';
    position: absolute;
    top: -10px;
    left: 20px;
    font-size: 8rem;
    font-family: 'Playfair Display', serif;
    color: rgba(244, 114, 182, 0.08);
    line-height: 1;
    pointer-events: none;
}

.testimonial-content {
    position: relative;
    z-index: 2;
    margin-bottom: 2rem;
}

.testimonial-content .stars {
    display: flex;
    gap: 0.3rem;
    margin-bottom: 1.5rem;
    justify-content: center;
}

.testimonial-content .stars i {
    color: #fbbf24;
    font-size: 1.2rem;
    transition: all 0.3s ease;
    filter: drop-shadow(0 2px 4px rgba(251, 191, 36, 0.3));
}

.testimonial-card:hover .stars i {
    transform: scale(1.1);
    color: #f59e0b;
}

.testimonial-content p {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #6b5b73;
    text-align: center;
    font-style: italic;
    position: relative;
    padding: 0 1rem;
}

.testimonial-content p::before,
.testimonial-content p::after {
    content: '"';
    font-size: 1.5rem;
    color: #f472b6;
    font-family: 'Playfair Display', serif;
    position: absolute;
    top: -5px;
}

.testimonial-content p::before {
    left: 0;
}

.testimonial-content p::after {
    right: 0;
    transform: scaleX(-1);
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding-top: 1.5rem;
    border-top: 1px solid rgba(244, 114, 182, 0.1);
    position: relative;
}

.testimonial-author img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid transparent;
    background: linear-gradient(white, white) padding-box,
                linear-gradient(135deg, #f472b6, #d946ef) border-box;
    transition: all 0.3s ease;
}

.testimonial-card:hover .testimonial-author img {
    transform: scale(1.1);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.3);
}

.testimonial-author div h4 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 0.3rem;
    font-size: 1.1rem;
    font-weight: 600;
}

.testimonial-author div span {
    color: #f472b6;
    font-size: 0.9rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Testimonial Animation */
.testimonial-card {
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
    transform: translateY(30px);
}

.testimonial-card:nth-child(1) {
    animation-delay: 0.1s;
}

.testimonial-card:nth-child(2) {
    animation-delay: 0.2s;
}

.testimonial-card:nth-child(3) {
    animation-delay: 0.3s;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Floating elements */
.testimonials .container::before {
    content: '⭐';
    position: absolute;
    top: 10%;
    left: 5%;
    font-size: 1.5rem;
    opacity: 0.3;
    animation: float 3s ease-in-out infinite;
}

.testimonials .container::after {
    content: '💖';
    position: absolute;
    top: 20%;
    right: 8%;
    font-size: 1.2rem;
    opacity: 0.3;
    animation: float 3s ease-in-out infinite reverse;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

/* Newsletter Section - Stay Beautiful */
.newsletter {
    padding: 5rem 0;
    background: linear-gradient(135deg, #f472b6 0%, #d946ef 50%, #c084fc 100%);
    position: relative;
    overflow: hidden;
    color: white;
}

.newsletter::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -20%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}

.newsletter::after {
    content: '';
    position: absolute;
    bottom: -30%;
    right: -15%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite reverse;
}

.newsletter-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.newsletter-content h2 {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    position: relative;
}

.newsletter-content h2::before {
    content: '✨';
    position: absolute;
    top: -10px;
    left: -40px;
    font-size: 2rem;
    animation: sparkle 2s ease-in-out infinite;
}

.newsletter-content h2::after {
    content: '💄';
    position: absolute;
    top: -10px;
    right: -40px;
    font-size: 2rem;
    animation: sparkle 2s ease-in-out infinite reverse;
}

.newsletter-content p {
    font-size: 1.3rem;
    margin-bottom: 3rem;
    opacity: 0.95;
    line-height: 1.6;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.newsletter-form {
    display: flex;
    max-width: 500px;
    margin: 0 auto;
    gap: 0;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50px;
    padding: 0.5rem;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.newsletter-form:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.newsletter-form input {
    flex: 1;
    border: none;
    background: transparent;
    padding: 1.2rem 1.5rem;
    font-size: 1.1rem;
    color: white;
    outline: none;
    border-radius: 50px;
}

.newsletter-form input::placeholder {
    color: rgba(255, 255, 255, 0.8);
    font-weight: 400;
}

.newsletter-form input:focus {
    background: rgba(255, 255, 255, 0.1);
}

.newsletter-form button {
    background: rgba(255, 255, 255, 0.9);
    color: #f472b6;
    border: none;
    padding: 1.2rem 2.5rem;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    position: relative;
    overflow: hidden;
}

.newsletter-form button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(244, 114, 182, 0.3), transparent);
    transition: left 0.5s ease;
}

.newsletter-form button:hover::before {
    left: 100%;
}

.newsletter-form button:hover {
    background: white;
    color: #d946ef;
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(255, 255, 255, 0.3);
}

.newsletter-form button:active {
    transform: scale(0.98);
}

/* Decorative elements */
.newsletter .container::before {
    content: '💌';
    position: absolute;
    top: 15%;
    left: 10%;
    font-size: 2rem;
    opacity: 0.3;
    animation: float 4s ease-in-out infinite;
}

.newsletter .container::after {
    content: '🌸';
    position: absolute;
    bottom: 20%;
    right: 12%;
    font-size: 1.8rem;
    opacity: 0.3;
    animation: float 4s ease-in-out infinite reverse;
}

/* Success message styling */
.newsletter-success {
    display: none;
    background: rgba(16, 185, 129, 0.2);
    color: white;
    padding: 1rem 2rem;
    border-radius: 25px;
    margin-top: 1.5rem;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(16, 185, 129, 0.3);
    animation: fadeInUp 0.5s ease;
}

.newsletter-success.show {
    display: block;
}

.newsletter-success i {
    margin-right: 0.5rem;
    color: #10b981;
}

/* Pulse animation for the form */
.newsletter-form {
    animation: pulse-glow 3s ease-in-out infinite;
}

@keyframes pulse-glow {
    0%, 100% {
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }
    50% {
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1), 0 0 30px rgba(255, 255, 255, 0.2);
    }
}

/* Products Page Styling */
.products-header {
    padding: 4rem 0 3rem;
    background: linear-gradient(135deg, #fdf2f8 0%, #f3e8ff 50%, #fefefe 100%);
    position: relative;
    overflow: hidden;
}

.products-header::before {
    content: '';
    position: absolute;
    top: -20%;
    right: -10%;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(244, 114, 182, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    animation: float 8s ease-in-out infinite;
}

.products-header::after {
    content: '';
    position: absolute;
    bottom: -15%;
    left: -5%;
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(217, 70, 239, 0.06) 0%, transparent 70%);
    border-radius: 50%;
    animation: float 8s ease-in-out infinite reverse;
}

.products-header h1 {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    font-weight: 700;
    color: #6b5b73;
    margin-bottom: 1rem;
    text-align: center;
    position: relative;
    z-index: 2;
}

.products-header h1::before {
    content: '✨';
    position: absolute;
    top: -10px;
    left: -50px;
    font-size: 2.5rem;
    animation: sparkle 3s ease-in-out infinite;
}

.products-header h1::after {
    content: '💄';
    position: absolute;
    top: -10px;
    right: -50px;
    font-size: 2.5rem;
    animation: sparkle 3s ease-in-out infinite reverse;
}

.products-header p {
    font-size: 1.3rem;
    color: #8b7355;
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

/* Products Filters Section */
.products-filters {
    padding: 3rem 0;
    background: white;
    border-bottom: 1px solid rgba(244, 114, 182, 0.1);
    box-shadow: 0 2px 10px rgba(244, 114, 182, 0.05);
}

.filters-wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
    padding: 2rem;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
    border-radius: 20px;
    border: 1px solid rgba(244, 114, 182, 0.08);
}

.filter-group h4 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 1rem;
    font-size: 1.2rem;
    font-weight: 600;
    position: relative;
}

.filter-group h4::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 30px;
    height: 2px;
    background: linear-gradient(90deg, #f472b6, #d946ef);
    border-radius: 1px;
}

.filter-options {
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
}

.filter-options label {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    cursor: pointer;
    font-size: 0.95rem;
    color: #6b5b73;
    transition: all 0.3s ease;
    padding: 0.5rem;
    border-radius: 8px;
}

.filter-options label:hover {
    background: rgba(244, 114, 182, 0.05);
    color: #f472b6;
}

.filter-options input[type="checkbox"] {
    width: 18px;
    height: 18px;
    accent-color: #f472b6;
    cursor: pointer;
}

.price-range {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.price-range input[type="range"] {
    width: 100%;
    height: 6px;
    border-radius: 3px;
    background: linear-gradient(90deg, #f472b6, #d946ef);
    outline: none;
    cursor: pointer;
}

.price-display {
    text-align: center;
    font-weight: 600;
    color: #f472b6;
    font-size: 1.1rem;
}

.filter-actions {
    display: flex;
    gap: 1rem;
    grid-column: 1 / -1;
    justify-content: center;
    margin-top: 1rem;
}

.filter-btn {
    padding: 0.8rem 2rem;
    border: none;
    border-radius: 25px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.9rem;
}

.filter-btn.apply {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    box-shadow: 0 4px 15px rgba(244, 114, 182, 0.3);
}

.filter-btn.apply:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(244, 114, 182, 0.4);
}

.filter-btn.clear {
    background: white;
    color: #f472b6;
    border: 2px solid #f472b6;
}

.filter-btn.clear:hover {
    background: #f472b6;
    color: white;
    transform: translateY(-2px);
}

/* Products Controls */
.products-controls {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
    padding: 1.5rem 2rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(244, 114, 182, 0.08);
    border: 1px solid rgba(244, 114, 182, 0.05);
}

.results-info {
    color: #6b5b73;
    font-weight: 500;
}

.sort-options {
    display: flex;
    align-items: center;
    gap: 0.8rem;
}

.sort-options label {
    color: #6b5b73;
    font-weight: 500;
}

.sort-options select {
    padding: 0.6rem 1rem;
    border: 2px solid rgba(244, 114, 182, 0.2);
    border-radius: 8px;
    background: white;
    color: #6b5b73;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.sort-options select:focus {
    outline: none;
    border-color: #f472b6;
    box-shadow: 0 0 0 3px rgba(244, 114, 182, 0.1);
}

.view-toggle {
    display: flex;
    gap: 0.5rem;
}

.view-btn {
    width: 40px;
    height: 40px;
    border: 2px solid rgba(244, 114, 182, 0.2);
    background: white;
    color: #6b5b73;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.view-btn:hover,
.view-btn.active {
    background: #f472b6;
    color: white;
    border-color: #f472b6;
}

/* Products Section */
.products-section {
    padding: 3rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
}

.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

/* Load More Section */
.load-more-section {
    text-align: center;
    padding: 2rem 0;
}

.load-more-btn {
    padding: 1rem 3rem;
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border: none;
    border-radius: 25px;
    font-weight: 600;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 15px rgba(244, 114, 182, 0.3);
}

.load-more-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(244, 114, 182, 0.4);
}

.load-more-btn:active {
    transform: translateY(-1px);
}

/* Recently Viewed Section */
.recently-viewed {
    padding: 4rem 0;
    background: white;
    border-top: 1px solid rgba(244, 114, 182, 0.1);
}

.recently-viewed .section-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #6b5b73;
    text-align: center;
    margin-bottom: 3rem;
    position: relative;
}

.recently-viewed .section-title::after {
    content: '👁️';
    position: absolute;
    top: -5px;
    right: 50%;
    transform: translateX(50%);
    font-size: 1.8rem;
    opacity: 0.3;
}

.products-slider {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
}

/* Product Card Styling */
.product-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(244, 114, 182, 0.1);
    transition: all 0.4s ease;
    position: relative;
    border: 1px solid rgba(244, 114, 182, 0.05);
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(244, 114, 182, 0.2);
    border-color: rgba(244, 114, 182, 0.15);
}

.product-image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 1;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}

.product-badges {
    position: absolute;
    top: 12px;
    left: 12px;
    z-index: 2;
}

.badge {
    display: inline-block;
    padding: 0.4rem 0.8rem;
    border-radius: 15px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-right: 0.5rem;
    margin-bottom: 0.5rem;
}

.badge.bestseller {
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: white;
}

.badge.new {
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
}

.badge.sale {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
}

.badge.trending {
    background: linear-gradient(135deg, #8b5cf6, #7c3aed);
    color: white;
}

.badge.limited {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
}

.badge.dermatologist {
    background: linear-gradient(135deg, #06b6d4, #0891b2);
    color: white;
    font-size: 0.7rem;
}

.badge.spf {
    background: linear-gradient(135deg, #f97316, #ea580c);
    color: white;
}

.badge.anti-aging {
    background: linear-gradient(135deg, #ec4899, #db2777);
    color: white;
}

.badge.professional {
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    color: white;
}

.badge.luxury {
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    color: white;
}

.product-actions {
    position: absolute;
    top: 12px;
    right: 12px;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    opacity: 0;
    transform: translateX(10px);
    transition: all 0.3s ease;
}

.product-card:hover .product-actions {
    opacity: 1;
    transform: translateX(0);
}

.wishlist-btn,
.quick-view-btn {
    width: 40px;
    height: 40px;
    border: none;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.9);
    color: #6b5b73;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9rem;
    backdrop-filter: blur(10px);
}

.wishlist-btn:hover,
.quick-view-btn:hover {
    background: #f472b6;
    color: white;
    transform: scale(1.1);
}

.product-info {
    padding: 1.5rem;
}

.product-name {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 600;
    color: #6b5b73;
    margin-bottom: 0.8rem;
    line-height: 1.3;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.product-description {
    color: #8b7355;
    font-size: 0.9rem;
    line-height: 1.5;
    margin-bottom: 1rem;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.product-rating .stars {
    display: flex;
    gap: 0.2rem;
}

.product-rating .stars i {
    color: #fbbf24;
    font-size: 0.9rem;
}

.rating-count {
    color: #8b7355;
    font-size: 0.85rem;
}

.product-price {
    margin-bottom: 1.2rem;
    display: flex;
    align-items: center;
    gap: 0.8rem;
}

.current-price {
    font-size: 1.4rem;
    font-weight: 700;
    color: #f472b6;
}

.original-price {
    font-size: 1.1rem;
    color: #8b7355;
    text-decoration: line-through;
}

.add-to-cart-btn {
    width: 100%;
    padding: 0.9rem 1.5rem;
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border: none;
    border-radius: 12px;
    font-weight: 600;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.add-to-cart-btn:hover {
    background: linear-gradient(135deg, #d946ef, #c084fc);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.3);
}

.add-to-cart-btn:active {
    transform: translateY(0);
}

.add-to-cart-btn i {
    font-size: 0.9rem;
}

/* Featured Products Section */
.featured-products {
    padding: 5rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
}

.featured-products .section-title {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    color: #6b5b73;
    text-align: center;
    margin-bottom: 3rem;
    position: relative;
}

.featured-products .section-title::after {
    content: '⭐';
    position: absolute;
    top: -5px;
    right: 50%;
    transform: translateX(50%);
    font-size: 2rem;
    opacity: 0.3;
}

.featured-products .products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.featured-products .cta-btn {
    display: inline-block;
    padding: 1rem 2.5rem;
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(244, 114, 182, 0.3);
}

.featured-products .cta-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(244, 114, 182, 0.4);
}

/* Shopping Cart Styling */
.cart-section {
    padding: 3rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
    min-height: 70vh;
}

.page-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #6b5b73;
    text-align: center;
    margin-bottom: 3rem;
    position: relative;
}

.page-title::after {
    content: '🛒';
    position: absolute;
    top: -5px;
    right: 50%;
    transform: translateX(50%);
    font-size: 2rem;
    opacity: 0.3;
}

.cart-wrapper {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 3rem;
    align-items: start;
}

/* Cart Items Section */
.cart-items {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 8px 30px rgba(244, 114, 182, 0.1);
    border: 1px solid rgba(244, 114, 182, 0.05);
}

.cart-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid rgba(244, 114, 182, 0.1);
}

.cart-header h2 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    font-size: 1.5rem;
    margin: 0;
}

.clear-cart-btn {
    background: transparent;
    color: #f472b6;
    border: 2px solid #f472b6;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
}

.clear-cart-btn:hover {
    background: #f472b6;
    color: white;
}

/* Empty Cart State */
.empty-cart {
    text-align: center;
    padding: 4rem 2rem;
    color: #8b7355;
}

.empty-cart i {
    font-size: 4rem;
    color: #f472b6;
    margin-bottom: 1.5rem;
    opacity: 0.5;
}

.empty-cart h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    margin-bottom: 1rem;
    color: #6b5b73;
}

.empty-cart p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
}

.continue-shopping-btn {
    display: inline-block;
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    padding: 1rem 2rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.continue-shopping-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.3);
}

/* Cart Item Styling */
.cart-item {
    display: grid;
    grid-template-columns: 100px 1fr auto auto auto;
    gap: 1.5rem;
    align-items: center;
    padding: 1.5rem 0;
    border-bottom: 1px solid rgba(244, 114, 182, 0.1);
    transition: all 0.3s ease;
}

.cart-item:hover {
    background: rgba(244, 114, 182, 0.02);
    border-radius: 12px;
    padding: 1.5rem 1rem;
}

.cart-item-image {
    width: 100px;
    height: 100px;
    border-radius: 12px;
    overflow: hidden;
}

.cart-item-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.cart-item-details h4 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
}

.cart-item-details p {
    color: #8b7355;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
}

.cart-item-price {
    font-weight: 700;
    color: #f472b6;
    font-size: 1.2rem;
}

.quantity-controls {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(244, 114, 182, 0.05);
    border-radius: 8px;
    padding: 0.3rem;
}

.quantity-btn {
    width: 32px;
    height: 32px;
    border: none;
    background: white;
    color: #f472b6;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
}

.quantity-btn:hover {
    background: #f472b6;
    color: white;
}

.quantity-input {
    width: 50px;
    text-align: center;
    border: none;
    background: transparent;
    font-weight: 600;
    color: #6b5b73;
}

.remove-item-btn {
    background: none;
    border: none;
    color: #ef4444;
    cursor: pointer;
    padding: 0.5rem;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.remove-item-btn:hover {
    background: rgba(239, 68, 68, 0.1);
    transform: scale(1.1);
}

/* Order Summary */
.order-summary {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 8px 30px rgba(244, 114, 182, 0.1);
    border: 1px solid rgba(244, 114, 182, 0.05);
    position: sticky;
    top: 2rem;
}

.order-summary h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    font-size: 1.5rem;
    margin-bottom: 1.5rem;
    text-align: center;
}

.summary-details {
    margin-bottom: 2rem;
}

.summary-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.8rem 0;
    color: #6b5b73;
}

.summary-row.total {
    font-weight: 700;
    font-size: 1.2rem;
    color: #f472b6;
    border-top: 2px solid rgba(244, 114, 182, 0.1);
    padding-top: 1rem;
    margin-top: 1rem;
}

.summary-row.discount {
    color: #10b981;
}

.summary-details hr {
    border: none;
    height: 1px;
    background: rgba(244, 114, 182, 0.1);
    margin: 1rem 0;
}

/* Promo Code */
.promo-code {
    display: flex;
    gap: 0.5rem;
    margin-bottom: 2rem;
}

.promo-code input {
    flex: 1;
    padding: 0.8rem 1rem;
    border: 2px solid rgba(244, 114, 182, 0.2);
    border-radius: 8px;
    outline: none;
    transition: all 0.3s ease;
}

.promo-code input:focus {
    border-color: #f472b6;
    box-shadow: 0 0 0 3px rgba(244, 114, 182, 0.1);
}

.apply-promo-btn {
    background: #f472b6;
    color: white;
    border: none;
    padding: 0.8rem 1.5rem;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.apply-promo-btn:hover {
    background: #d946ef;
    transform: translateY(-1px);
}

/* Checkout Actions */
.checkout-actions {
    margin-bottom: 2rem;
}

.checkout-btn {
    width: 100%;
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border: none;
    padding: 1.2rem 2rem;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 1rem;
    position: relative;
    overflow: hidden;
}

.checkout-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.checkout-btn:hover::before {
    left: 100%;
}

.checkout-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(244, 114, 182, 0.4);
}

.continue-shopping {
    display: block;
    text-align: center;
    color: #f472b6;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.continue-shopping:hover {
    color: #d946ef;
    transform: translateY(-1px);
}

/* Payment Methods */
.payment-methods {
    text-align: center;
}

.payment-methods h4 {
    color: #6b5b73;
    margin-bottom: 1rem;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.payment-icons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.payment-icons i {
    font-size: 1.8rem;
    color: #8b7355;
    transition: all 0.3s ease;
}

.payment-icons i:hover {
    color: #f472b6;
    transform: scale(1.1);
}

/* Recommended Products */
.recommended-products {
    padding: 4rem 0;
    background: white;
    border-top: 1px solid rgba(244, 114, 182, 0.1);
}

.recommended-products .section-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #6b5b73;
    text-align: center;
    margin-bottom: 3rem;
    position: relative;
}

.recommended-products .section-title::after {
    content: '💡';
    position: absolute;
    top: -5px;
    right: 50%;
    transform: translateX(50%);
    font-size: 2rem;
    opacity: 0.3;
}

/* Text Center Utility */
.text-center {
    text-align: center;
}

/* Checkout Modal Styles */
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

.checkout-modal {
    background: white;
    margin: 2% auto;
    padding: 0;
    border-radius: 20px;
    width: 90%;
    max-width: 800px;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    position: relative;
}

.checkout-modal .close {
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

.checkout-modal .close:hover {
    background: rgba(244, 114, 182, 0.1);
    color: #f472b6;
}

.checkout-modal h2 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    text-align: center;
    padding: 2rem 2rem 1rem;
    margin: 0;
    font-size: 2rem;
}

/* Checkout Steps */
.checkout-steps {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem 2rem 2rem;
    gap: 2rem;
}

.step {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #8b7355;
    transition: all 0.3s ease;
}

.step.active {
    color: #f472b6;
}

.step-number {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #e5e7eb;
    color: #6b7280;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    transition: all 0.3s ease;
}

.step.active .step-number {
    background: #f472b6;
    color: white;
}

.step-title {
    font-weight: 500;
}

/* Checkout Content */
.checkout-content {
    padding: 0 2rem 2rem;
}

.checkout-step {
    display: none;
}

.checkout-step.active {
    display: block;
}

.checkout-step h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 2rem;
    font-size: 1.5rem;
}

/* Checkout Form */
.checkout-form {
    margin-bottom: 2rem;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
    margin-bottom: 1rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    color: #6b5b73;
    font-weight: 500;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 0.8rem 1rem;
    border: 2px solid rgba(244, 114, 182, 0.2);
    border-radius: 8px;
    outline: none;
    transition: all 0.3s ease;
    font-size: 1rem;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #f472b6;
    box-shadow: 0 0 0 3px rgba(244, 114, 182, 0.1);
}

/* Shipping Options */
.shipping-options {
    margin-top: 2rem;
}

.shipping-options h4 {
    color: #6b5b73;
    margin-bottom: 1rem;
    font-weight: 600;
}

.shipping-option {
    display: flex;
    align-items: center;
    padding: 1rem;
    border: 2px solid rgba(244, 114, 182, 0.1);
    border-radius: 8px;
    margin-bottom: 0.5rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.shipping-option:hover {
    border-color: rgba(244, 114, 182, 0.3);
    background: rgba(244, 114, 182, 0.02);
}

.shipping-option input[type="radio"] {
    margin-right: 1rem;
    accent-color: #f472b6;
}

.option-details {
    flex: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.option-name {
    font-weight: 600;
    color: #6b5b73;
}

.option-time {
    color: #8b7355;
    font-size: 0.9rem;
}

.option-price {
    font-weight: 700;
    color: #f472b6;
}

/* Payment Methods Selector */
.payment-methods-selector {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
}

.payment-method {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    padding: 1rem;
    border: 2px solid rgba(244, 114, 182, 0.1);
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.payment-method.active {
    border-color: #f472b6;
    background: rgba(244, 114, 182, 0.05);
}

.payment-method input[type="radio"] {
    display: none;
}

.method-icon {
    font-size: 1.2rem;
    color: #f472b6;
}

/* Step Actions */
.step-actions {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    margin-top: 2rem;
}

.prev-step-btn,
.next-step-btn,
.place-order-btn {
    padding: 0.8rem 2rem;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 1rem;
}

.prev-step-btn {
    background: transparent;
    color: #6b5b73;
    border: 2px solid rgba(107, 91, 115, 0.3);
}

.prev-step-btn:hover {
    background: rgba(107, 91, 115, 0.1);
}

.next-step-btn,
.place-order-btn {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
}

.next-step-btn:hover,
.place-order-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.3);
}

/* Order Review */
.order-review {
    background: rgba(244, 114, 182, 0.02);
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 2rem;
}

.review-section {
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid rgba(244, 114, 182, 0.1);
}

.review-section:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.review-section h4 {
    color: #6b5b73;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

/* Responsive Design for Cart */
@media (max-width: 768px) {
    .cart-wrapper {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .order-summary {
        position: static;
        order: -1;
    }
    
    .cart-item {
        grid-template-columns: 80px 1fr auto;
        gap: 1rem;
    }
    
    .cart-item-image {
        width: 80px;
        height: 80px;
    }
    
    .quantity-controls {
        grid-column: 2 / 4;
        justify-self: start;
        margin-top: 0.5rem;
    }
    
    .remove-item-btn {
        grid-column: 3;
        grid-row: 1;
    }
    
    .page-title {
        font-size: 2rem;
    }
    
    .checkout-steps {
        flex-direction: column;
        gap: 1rem;
    }
    
    .step {
        justify-content: center;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .payment-methods-selector {
        flex-direction: column;
    }
    
    .step-actions {
        flex-direction: column;
    }
    
    .checkout-modal {
        width: 95%;
        margin: 1% auto;
    }
}

@media (max-width: 480px) {
    .cart-section {
        padding: 2rem 0;
    }
    
    .cart-items,
    .order-summary {
        padding: 1.5rem;
        border-radius: 15px;
    }
    
    .page-title {
        font-size: 1.8rem;
        margin-bottom: 2rem;
    }
    
    .cart-header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
    
    .clear-cart-btn {
        width: 100%;
    }
    
    .checkout-btn {
        padding: 1rem;
        font-size: 1rem;
    }
    
    .empty-cart {
        padding: 3rem 1rem;
    }
    
    .empty-cart i {
        font-size: 3rem;
    }
    
    .empty-cart h3 {
        font-size: 1.5rem;
    }
}

/* Checkout Page Styling */
.checkout-page {
    padding: 3rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
    min-height: 80vh;
}

.checkout-header {
    text-align: center;
    margin-bottom: 3rem;
}

.checkout-header .page-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #6b5b73;
    margin-bottom: 1.5rem;
    position: relative;
}

.checkout-header .page-title::after {
    content: '🔒';
    position: absolute;
    top: -5px;
    right: 50%;
    transform: translateX(50%);
    font-size: 2rem;
    opacity: 0.3;
}

.security-badges {
    display: flex;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;
}

.security-badge {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #10b981;
    font-size: 0.9rem;
    font-weight: 500;
}

.security-badge i {
    font-size: 1.2rem;
}

/* Progress Steps */
.checkout-progress {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 4rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.progress-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
    color: #8b7355;
    transition: all 0.3s ease;
}

.progress-step.active {
    color: #f472b6;
}

.step-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #e5e7eb;
    color: #6b7280;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    border: 3px solid transparent;
}

.progress-step.active .step-circle {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border-color: rgba(244, 114, 182, 0.3);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.3);
}

.step-label {
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.progress-line {
    width: 100px;
    height: 3px;
    background: #e5e7eb;
    margin: 0 1rem;
    border-radius: 2px;
}

/* Checkout Container */
.checkout-container {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 3rem;
    align-items: start;
}

/* Checkout Form Section */
.checkout-form-section {
    background: white;
    border-radius: 20px;
    padding: 2.5rem;
    box-shadow: 0 8px 30px rgba(244, 114, 182, 0.1);
    border: 1px solid rgba(244, 114, 182, 0.05);
}

.checkout-step {
    display: none;
}

.checkout-step.active {
    display: block;
}

.step-header {
    margin-bottom: 2.5rem;
    text-align: center;
    padding-bottom: 2rem;
    border-bottom: 2px solid rgba(244, 114, 182, 0.1);
}

.step-header h2 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    font-size: 1.8rem;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.step-header p {
    color: #8b7355;
    font-size: 1rem;
}

/* Form Sections */
.form-section {
    margin-bottom: 2.5rem;
}

.form-section h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    font-size: 1.3rem;
    margin-bottom: 1.5rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid rgba(244, 114, 182, 0.1);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    margin-bottom: 1rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    color: #6b5b73;
    font-weight: 600;
    font-size: 0.95rem;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 1rem 1.2rem;
    border: 2px solid rgba(244, 114, 182, 0.2);
    border-radius: 12px;
    outline: none;
    transition: all 0.3s ease;
    font-size: 1rem;
    background: white;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #f472b6;
    box-shadow: 0 0 0 4px rgba(244, 114, 182, 0.1);
    transform: translateY(-1px);
}

.form-group small {
    display: block;
    margin-top: 0.5rem;
    color: #8b7355;
    font-size: 0.85rem;
}

/* Shipping Options */
.shipping-options {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.shipping-option {
    display: flex;
    align-items: center;
    padding: 1.5rem;
    border: 2px solid rgba(244, 114, 182, 0.1);
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
}

.shipping-option:hover {
    border-color: rgba(244, 114, 182, 0.3);
    background: rgba(244, 114, 182, 0.02);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(244, 114, 182, 0.1);
}

.shipping-option.selected {
    border-color: #f472b6;
    background: rgba(244, 114, 182, 0.05);
    box-shadow: 0 4px 15px rgba(244, 114, 182, 0.2);
}

.shipping-option input[type="radio"] {
    margin-right: 1rem;
    accent-color: #f472b6;
    width: 20px;
    height: 20px;
}

.option-content {
    flex: 1;
}

.option-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 0.5rem;
}

.option-name {
    font-weight: 700;
    color: #6b5b73;
    font-size: 1.1rem;
}

.option-price {
    font-weight: 700;
    color: #f472b6;
    font-size: 1.2rem;
}

.option-details {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.delivery-time {
    color: #8b7355;
    font-weight: 500;
}

.delivery-info {
    color: #10b981;
    font-size: 0.9rem;
    font-style: italic;
}

/* Payment Methods */
.payment-methods {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-bottom: 2rem;
}

.payment-method {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1.5rem;
    border: 2px solid rgba(244, 114, 182, 0.1);
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
}

.payment-method:hover {
    border-color: rgba(244, 114, 182, 0.3);
    background: rgba(244, 114, 182, 0.02);
    transform: translateY(-2px);
}

.payment-method.selected {
    border-color: #f472b6;
    background: rgba(244, 114, 182, 0.05);
    box-shadow: 0 4px 15px rgba(244, 114, 182, 0.2);
}

.payment-method input[type="radio"] {
    display: none;
}

.method-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
}

.method-content i {
    font-size: 1.8rem;
    color: #f472b6;
}

.method-content span {
    font-weight: 600;
    color: #6b5b73;
    font-size: 0.9rem;
}

/* Card Icons */
.card-icons {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    gap: 0.5rem;
}

.card-icons i {
    font-size: 1.5rem;
    color: #8b7355;
    opacity: 0.6;
}

.form-group {
    position: relative;
}

/* Checkbox Options */
.checkbox-option {
    display: flex;
    align-items: center;
    gap: 1rem;
    cursor: pointer;
    padding: 1rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.checkbox-option:hover {
    background: rgba(244, 114, 182, 0.02);
}

.checkbox-option input[type="checkbox"] {
    display: none;
}

.checkmark {
    width: 20px;
    height: 20px;
    border: 2px solid rgba(244, 114, 182, 0.3);
    border-radius: 4px;
    position: relative;
    transition: all 0.3s ease;
}

.checkbox-option input[type="checkbox"]:checked + .checkmark {
    background: #f472b6;
    border-color: #f472b6;
}

.checkbox-option input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-weight: bold;
    font-size: 0.8rem;
}

.checkbox-text {
    color: #6b5b73;
    font-weight: 500;
}

/* Step Actions */
.step-actions {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 2px solid rgba(244, 114, 182, 0.1);
}

.btn-primary,
.btn-secondary {
    padding: 1rem 2rem;
    border: none;
    border-radius: 12px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
    text-align: center;
    justify-content: center;
}

.btn-primary {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    flex: 1;
    max-width: 250px;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(244, 114, 182, 0.4);
}

.btn-secondary {
    background: transparent;
    color: #6b5b73;
    border: 2px solid rgba(107, 91, 115, 0.3);
}

.btn-secondary:hover {
    background: rgba(107, 91, 115, 0.1);
    transform: translateY(-2px);
}

.btn-place-order {
    background: linear-gradient(135deg, #10b981, #059669);
    font-size: 1.1rem;
    padding: 1.2rem 2rem;
}

.btn-place-order:hover {
    box-shadow: 0 10px 25px rgba(16, 185, 129, 0.4);
}

/* Order Review */
.order-review-section {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.review-card {
    background: rgba(244, 114, 182, 0.02);
    border: 1px solid rgba(244, 114, 182, 0.1);
    border-radius: 12px;
    padding: 1.5rem;
    position: relative;
}

.review-card h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.review-content {
    color: #8b7355;
    line-height: 1.6;
}

.edit-btn {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: #f472b6;
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 6px;
    cursor: pointer;
    font-size: 0.85rem;
    font-weight: 600;
    transition: all 0.3s ease;
}

.edit-btn:hover {
    background: #d946ef;
    transform: translateY(-1px);
}

/* Order Summary Section */
.order-summary-section {
    position: sticky;
    top: 2rem;
}

.summary-card {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 8px 30px rgba(244, 114, 182, 0.1);
    border: 1px solid rgba(244, 114, 182, 0.05);
}

.summary-card h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    font-size: 1.5rem;
    margin-bottom: 2rem;
    text-align: center;
    padding-bottom: 1rem;
    border-bottom: 2px solid rgba(244, 114, 182, 0.1);
}

/* Order Items */
.order-items {
    margin-bottom: 2rem;
}

.order-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem 0;
    border-bottom: 1px solid rgba(244, 114, 182, 0.1);
}

.order-item:last-child {
    border-bottom: none;
}

.item-image {
    width: 60px;
    height: 60px;
    border-radius: 8px;
    overflow: hidden;
    flex-shrink: 0;
}

.item-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.item-details {
    flex: 1;
}

.item-details h4 {
    font-weight: 600;
    color: #6b5b73;
    margin-bottom: 0.3rem;
    font-size: 0.95rem;
}

.item-details p {
    color: #8b7355;
    font-size: 0.85rem;
}

.item-price {
    font-weight: 700;
    color: #f472b6;
    font-size: 1.1rem;
}

/* Promo Section */
.promo-section {
    margin-bottom: 2rem;
}

.promo-input {
    display: flex;
    gap: 0.5rem;
}

.promo-input input {
    flex: 1;
    padding: 0.8rem 1rem;
    border: 2px solid rgba(244, 114, 182, 0.2);
    border-radius: 8px;
    outline: none;
    transition: all 0.3s ease;
}

.promo-input input:focus {
    border-color: #f472b6;
    box-shadow: 0 0 0 3px rgba(244, 114, 182, 0.1);
}

.apply-btn {
    background: #f472b6;
    color: white;
    border: none;
    padding: 0.8rem 1.5rem;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.apply-btn:hover {
    background: #d946ef;
    transform: translateY(-1px);
}

/* Order Totals */
.order-totals {
    margin-bottom: 2rem;
}

.total-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.8rem 0;
    color: #6b5b73;
}

.total-row.final-total {
    font-weight: 700;
    font-size: 1.3rem;
    color: #f472b6;
    border-top: 2px solid rgba(244, 114, 182, 0.1);
    padding-top: 1rem;
    margin-top: 1rem;
}

.discount-row {
    color: #10b981;
}

.order-totals hr {
    border: none;
    height: 1px;
    background: rgba(244, 114, 182, 0.1);
    margin: 1rem 0;
}

/* Trust Badges */
.trust-badges {
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
}

.trust-badge {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    color: #10b981;
    font-size: 0.9rem;
    font-weight: 500;
}

.trust-badge i {
    font-size: 1.1rem;
    width: 20px;
    text-align: center;
}

/* Success Modal */
.success-modal {
    text-align: center;
    max-width: 500px;
    padding: 3rem 2rem;
}

.success-icon {
    margin-bottom: 2rem;
}

.success-icon i {
    font-size: 4rem;
    color: #10b981;
}

.success-modal h2 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    font-size: 2rem;
    margin-bottom: 1rem;
}

.success-modal p {
    color: #8b7355;
    font-size: 1.1rem;
    margin-bottom: 2rem;
    line-height: 1.6;
}

.order-details {
    background: rgba(244, 114, 182, 0.05);
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 2rem;
}

.order-details p {
    margin-bottom: 0.5rem;
    color: #6b5b73;
}

.success-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .checkout-container {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .order-summary-section {
        position: static;
        order: -1;
    }
    
    .checkout-progress {
        flex-direction: column;
        gap: 1rem;
    }
    
    .progress-line {
        width: 3px;
        height: 50px;
        margin: 0.5rem 0;
    }
    
    .step-circle {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }
    
    .security-badges {
        flex-direction: column;
        gap: 1rem;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .payment-methods {
        grid-template-columns: 1fr;
    }
    
    .step-actions {
        flex-direction: column;
    }
    
    .checkout-form-section {
        padding: 2rem;
    }
    
    .summary-card {
        padding: 1.5rem;
    }
    
    .success-actions {
        flex-direction: column;
    }
}

@media (max-width: 480px) {
    .checkout-page {
        padding: 2rem 0;
    }
    
    .checkout-header .page-title {
        font-size: 2rem;
    }
    
    .checkout-form-section {
        padding: 1.5rem;
        border-radius: 15px;
    }
    
    .summary-card {
        padding: 1.5rem;
        border-radius: 15px;
    }
    
    .step-header h2 {
        font-size: 1.5rem;
    }
    
    .shipping-option,
    .payment-method {
        padding: 1rem;
    }
    
    .btn-primary,
    .btn-secondary {
        padding: 0.8rem 1.5rem;
        font-size: 0.95rem;
    }
}

.close {
    position: absolute;
    right: 1.5rem;
    top: 1.5rem;
    font-size: 1.5rem;
    cursor: pointer;
    color: #8b7355;
}

.close:hover {
    color: #f472b6;
}

/* Auth Modal */
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

.auth-form {
    display: none;
}

.auth-form.active {
    display: block;
}

.auth-form h2 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 2rem;
    text-align: center;
}

.form-group {
    position: relative;
    margin-bottom: 1.5rem;
}

.form-group input {
    width: 100%;
    padding: 1rem 1rem 1rem 3rem;
    border: 2px solid #f1f5f9;
    border-radius: 15px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-group input:focus {
    outline: none;
    border-color: #f472b6;
}

.form-group i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #8b7355;
}

.auth-btn {
    width: 100%;
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border: none;
    padding: 1rem;
    border-radius: 15px;
    font-weight: 600;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-bottom: 1rem;
}

.auth-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.4);
}

.auth-link {
    text-align: center;
    color: #8b7355;
}

.auth-link a {
    color: #f472b6;
    text-decoration: none;
    cursor: pointer;
}

.auth-link a:hover {
    text-decoration: underline;
}

/* Footer */
.footer {
    background: linear-gradient(135deg, #6b5b73 0%, #5a4a4a 100%);
    color: white;
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
    color: #f472b6;
}

.footer-section h4 {
    font-weight: 600;
    margin-bottom: 1rem;
    color: #f472b6;
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
    color: #f472b6;
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
    color: #f472b6;
    transform: translateY(-2px);
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 1rem;
    text-align: center;
    color: rgba(255, 255, 255, 0.6);
}

/* Dashboard Styles */
.dashboard-section {
    padding: 2rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
    min-height: calc(100vh - 200px);
}

.dashboard-wrapper {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 2rem;
    align-items: start;
}

.dashboard-sidebar {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(244, 114, 182, 0.1);
    position: sticky;
    top: 120px;
}

.user-profile {
    text-align: center;
    margin-bottom: 2rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid rgba(244, 114, 182, 0.1);
}

.profile-avatar {
    width: 80px;
    height: 80px;
    margin: 0 auto 1rem;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid #f472b6;
}

.profile-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-info h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 0.5rem;
}

.profile-info p {
    color: #8b7355;
    font-size: 0.9rem;
}

.dashboard-nav ul {
    list-style: none;
}

.dashboard-nav .nav-link {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    padding: 1rem;
    color: #8b7355;
    text-decoration: none;
    border-radius: 15px;
    transition: all 0.3s ease;
    margin-bottom: 0.5rem;
}

.dashboard-nav .nav-link:hover,
.dashboard-nav .nav-link.active {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    transform: translateX(5px);
}

.dashboard-nav .nav-link.logout:hover {
    background: #ef4444;
    transform: translateX(5px);
}

.dashboard-content {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(244, 114, 182, 0.1);
}

.content-section {
    display: none;
}

.content-section.active {
    display: block;
}

.section-header {
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid rgba(244, 114, 182, 0.1);
}

.section-header h2 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 0.5rem;
}

.section-header p {
    color: #8b7355;
}

.add-address-btn {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border: none;
    padding: 0.8rem 1.5rem;
    border-radius: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.add-address-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.4);
}

/* Overview Stats */
.overview-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.stat-card {
    background: linear-gradient(135deg, #fdf2f8, #f3e8ff);
    padding: 2rem;
    border-radius: 20px;
    display: flex;
    align-items: center;
    gap: 1rem;
    border: 1px solid rgba(244, 114, 182, 0.1);
}

.stat-icon {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.stat-info h3 {
    font-size: 2rem;
    font-weight: 700;
    color: #6b5b73;
    margin-bottom: 0.2rem;
}

.stat-info p {
    color: #8b7355;
    font-size: 0.9rem;
}

/* Recent Activity */
.recent-activity h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 1.5rem;
}

.activity-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.activity-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: #fdf2f8;
    border-radius: 15px;
    border-left: 4px solid #f472b6;
}

.activity-icon {
    background: white;
    color: #f472b6;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.activity-details h4 {
    color: #6b5b73;
    margin-bottom: 0.3rem;
}

.activity-details p {
    color: #8b7355;
    font-size: 0.9rem;
    margin-bottom: 0.3rem;
}

.activity-time {
    color: #a1a1aa;
    font-size: 0.8rem;
}

/* Orders Filter */
.orders-filter {
    margin-bottom: 2rem;
}

.orders-filter select {
    padding: 0.8rem 1rem;
    border: 2px solid #f1f5f9;
    border-radius: 15px;
    font-size: 1rem;
    color: #6b5b73;
    background: white;
}

/* Profile Form */
.profile-form {
    max-width: 800px;
}

.form-section {
    margin-bottom: 3rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid rgba(244, 114, 182, 0.1);
}

.form-section:last-of-type {
    border-bottom: none;
}

.form-section h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 1.5rem;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    color: #6b5b73;
    font-weight: 500;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 1rem;
    border: 2px solid #f1f5f9;
    border-radius: 15px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #f472b6;
}

.checkbox-group {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 0.5rem;
}

.checkbox-group label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: normal;
    margin-bottom: 0;
}

.form-actions {
    display: flex;
    gap: 1rem;
    justify-content: flex-end;
}

.save-btn {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.save-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.4);
}

.cancel-btn {
    background: transparent;
    color: #8b7355;
    border: 2px solid #e2e8f0;
    padding: 1rem 2rem;
    border-radius: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.cancel-btn:hover {
    background: #f1f5f9;
}

/* Rewards Section */
.rewards-overview {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    margin-bottom: 3rem;
}

.points-balance {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    padding: 2rem;
    border-radius: 20px;
    text-align: center;
}

.points-display {
    margin: 1rem 0;
}

.points-number {
    font-size: 3rem;
    font-weight: 700;
    display: block;
}

.points-label {
    font-size: 1.2rem;
    opacity: 0.9;
}

.tier-status {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    border: 2px solid #f472b6;
    text-align: center;
}

.tier-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    font-weight: 600;
    margin: 1rem 0;
}

.tier-badge.gold {
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    color: white;
}

.tier-progress {
    margin-top: 1rem;
}

.progress-bar {
    background: #f1f5f9;
    height: 8px;
    border-radius: 4px;
    overflow: hidden;
    margin-bottom: 0.5rem;
}

.progress-fill {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    height: 100%;
    transition: width 0.3s ease;
}

.rewards-history h3,
.available-rewards h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 1.5rem;
}

.points-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.points-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: #fdf2f8;
    border-radius: 15px;
}

.points-item.earned {
    border-left: 4px solid #10b981;
}

.points-item.redeemed {
    border-left: 4px solid #f59e0b;
}

.points-icon {
    background: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.points-item.earned .points-icon {
    color: #10b981;
}

.points-item.redeemed .points-icon {
    color: #f59e0b;
}

.points-details {
    flex: 1;
}

.points-details h4 {
    color: #6b5b73;
    margin-bottom: 0.3rem;
}

.points-details p {
    color: #8b7355;
    font-size: 0.9rem;
    margin-bottom: 0.3rem;
}

.points-date {
    color: #a1a1aa;
    font-size: 0.8rem;
}

.points-amount {
    font-weight: 700;
    font-size: 1.1rem;
}

.points-item.earned .points-amount {
    color: #10b981;
}

.points-item.redeemed .points-amount {
    color: #f59e0b;
}

.rewards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
}

.reward-card {
    background: white;
    padding: 1.5rem;
    border-radius: 15px;
    border: 2px solid #f1f5f9;
    text-align: center;
    transition: all 0.3s ease;
}

.reward-card:hover {
    border-color: #f472b6;
    transform: translateY(-5px);
}

.reward-card h4 {
    color: #6b5b73;
    margin-bottom: 0.5rem;
}

.reward-card p {
    color: #8b7355;
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.reward-cost {
    color: #f472b6;
    font-weight: 600;
    margin-bottom: 1rem;
}

.redeem-btn {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border: none;
    padding: 0.8rem 1.5rem;
    border-radius: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 100%;
}

.redeem-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.4);
}

/* Support Section */
.support-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.support-card {
    background: #fdf2f8;
    padding: 2rem;
    border-radius: 20px;
    text-align: center;
    border: 2px solid rgba(244, 114, 182, 0.1);
    transition: all 0.3s ease;
}

.support-card:hover {
    border-color: #f472b6;
    transform: translateY(-5px);
}

.support-icon {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin: 0 auto 1rem;
}

.support-card h3 {
    color: #6b5b73;
    margin-bottom: 0.5rem;
}

.support-card p {
    color: #8b7355;
    margin-bottom: 1.5rem;
}

.support-btn {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.support-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.4);
}

/* FAQ Section */
.faq-section h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 1.5rem;
}

.faq-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.faq-item {
    border: 2px solid #f1f5f9;
    border-radius: 15px;
    overflow: hidden;
}

.faq-question {
    width: 100%;
    background: white;
    border: none;
    padding: 1.5rem;
    text-align: left;
    font-weight: 600;
    color: #6b5b73;
    cursor: pointer;
    transition: all 0.3s ease;
}

.faq-question:hover {
    background: #fdf2f8;
}

.faq-answer {
    padding: 0 1.5rem 1.5rem;
    color: #8b7355;
    line-height: 1.6;
}

/* About Page Styles */
.about-hero {
    background: linear-gradient(135deg, #fdf2f8 0%, #f3e8ff 50%, #fce7f3 100%);
    padding: 4rem 0;
}

.about-hero .hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.about-hero .hero-text h1 {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    font-weight: 700;
    background: linear-gradient(135deg, #6b5b73, #f472b6, #d946ef);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.about-hero .hero-text p {
    font-size: 1.2rem;
    color: #8b7355;
    line-height: 1.6;
}

.about-hero .hero-image img {
    width: 100%;
    border-radius: 25px;
    box-shadow: 0 20px 50px rgba(244, 114, 182, 0.2);
}

.our-story {
    padding: 4rem 0;
    background: white;
}

.story-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.story-image img {
    width: 100%;
    border-radius: 25px;
    box-shadow: 0 15px 40px rgba(244, 114, 182, 0.15);
}

.story-text h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #6b5b73;
    margin-bottom: 1.5rem;
}

.story-text p {
    color: #8b7355;
    line-height: 1.7;
    margin-bottom: 1.5rem;
    font-size: 1.1rem;
}

.values-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.value-card {
    background: white;
    padding: 2.5rem;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(244, 114, 182, 0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(244, 114, 182, 0.1);
}

.value-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(244, 114, 182, 0.2);
}

.value-icon {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin: 0 auto 1.5rem;
}

.value-card h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 1rem;
    font-size: 1.5rem;
}

.value-card p {
    color: #8b7355;
    line-height: 1.6;
}

.certifications {
    padding: 4rem 0;
    background: white;
}

.cert-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
}

.cert-item {
    text-align: center;
    padding: 2rem;
    background: #fdf2f8;
    border-radius: 20px;
    transition: all 0.3s ease;
}

.cert-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(244, 114, 182, 0.15);
}

.cert-item img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-bottom: 1rem;
    object-fit: cover;
}

.cert-item h4 {
    color: #6b5b73;
    font-weight: 600;
}

.team-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.team-member {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(244, 114, 182, 0.1);
    transition: all 0.3s ease;
}

.team-member:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(244, 114, 182, 0.2);
}

.team-member img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin-bottom: 1.5rem;
    object-fit: cover;
    border: 4px solid #f472b6;
}

.team-member h4 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 0.5rem;
    font-size: 1.3rem;
}

.team-member p {
    color: #f472b6;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.team-member span {
    color: #8b7355;
    font-size: 0.9rem;
}

.awards-section {
    padding: 4rem 0;
    background: white;
}

.awards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.award-item {
    background: linear-gradient(135deg, #fdf2f8, #f3e8ff);
    padding: 2.5rem;
    border-radius: 20px;
    text-align: center;
    border: 1px solid rgba(244, 114, 182, 0.1);
}

.award-icon {
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    color: white;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    margin: 0 auto 1.5rem;
}

.award-item h4 {
    color: #6b5b73;
    margin-bottom: 0.5rem;
    font-size: 1.2rem;
}

.award-item p {
    color: #8b7355;
    font-size: 0.9rem;
}

.cta-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    text-align: center;
}

.cta-content h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.8rem;
    margin-bottom: 1rem;
}

.cta-content p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
}

.cta-section .cta-btn.primary {
    background: white;
    color: #f472b6;
}

.cta-section .cta-btn.secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
}

/* Contact Page Styles */
.contact-hero {
    background: linear-gradient(135deg, #fdf2f8 0%, #f3e8ff 50%, #fce7f3 100%);
    padding: 4rem 0;
    text-align: center;
}

.contact-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    font-weight: 700;
    background: linear-gradient(135deg, #6b5b73, #f472b6, #d946ef);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1.5rem;
}

.contact-hero p {
    font-size: 1.2rem;
    color: #8b7355;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.contact-methods {
    padding: 4rem 0;
    background: white;
}

.methods-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.method-card {
    background: #fdf2f8;
    padding: 2.5rem;
    border-radius: 20px;
    text-align: center;
    border: 2px solid rgba(244, 114, 182, 0.1);
    transition: all 0.3s ease;
}

.method-card:hover {
    border-color: #f472b6;
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(244, 114, 182, 0.15);
}

.method-icon {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin: 0 auto 1.5rem;
}

.method-card h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 1rem;
    font-size: 1.5rem;
}

.method-card p {
    color: #8b7355;
    margin-bottom: 1.5rem;
}

.contact-details strong {
    display: block;
    color: #f472b6;
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
}

.contact-details span {
    color: #8b7355;
    font-size: 0.9rem;
}

.chat-btn {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border: none;
    padding: 0.8rem 1.5rem;
    border-radius: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-bottom: 0.5rem;
}

.chat-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.4);
}

.contact-form-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
}

.form-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: start;
}

.form-content h2 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 1rem;
    font-size: 2.5rem;
}

.form-content p {
    color: #8b7355;
    margin-bottom: 2rem;
    font-size: 1.1rem;
}

.contact-form .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.contact-form .form-group {
    margin-bottom: 1.5rem;
}

.contact-form label {
    display: block;
    margin-bottom: 0.5rem;
    color: #6b5b73;
    font-weight: 500;
}

.contact-form input,
.contact-form select,
.contact-form textarea {
    width: 100%;
    padding: 1rem;
    border: 2px solid #f1f5f9;
    border-radius: 15px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
    font-family: 'Poppins', sans-serif;
}

.contact-form input:focus,
.contact-form select:focus,
.contact-form textarea:focus {
    outline: none;
    border-color: #f472b6;
}

.contact-form textarea {
    resize: vertical;
    min-height: 120px;
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: 0.5rem;
    cursor: pointer;
    font-size: 0.9rem;
    line-height: 1.4;
}

.checkbox-label input[type="checkbox"] {
    width: auto;
    margin: 0;
}

.submit-btn {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border: none;
    padding: 1.2rem 2.5rem;
    border-radius: 15px;
    font-weight: 600;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 100%;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.4);
}

.form-image img {
    width: 100%;
    border-radius: 25px;
    box-shadow: 0 20px 50px rgba(244, 114, 182, 0.2);
}

.faq-section {
    padding: 4rem 0;
    background: white;
}

.faq-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 3rem;
}

.faq-category h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 1.5rem;
    font-size: 1.8rem;
}

.faq-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.map-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
}

.map-wrapper {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(244, 114, 182, 0.1);
}

.map-placeholder {
    padding: 4rem;
    text-align: center;
    background: linear-gradient(135deg, #fdf2f8, #f3e8ff);
}

.map-placeholder i {
    font-size: 4rem;
    color: #f472b6;
    margin-bottom: 1.5rem;
}

.map-placeholder h3 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    margin-bottom: 1rem;
    font-size: 2rem;
}

.map-placeholder p {
    color: #8b7355;
    font-size: 1.1rem;
    margin-bottom: 2rem;
}

.store-hours h4 {
    color: #6b5b73;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.store-hours p {
    color: #8b7355;
    line-height: 1.6;
}

/* Responsive Design */
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
    
    .hero-content {
        grid-template-columns: 1fr;
        gap: 2rem;
        text-align: center;
    }
    
    .hero-text h2 {
        font-size: 2.5rem;
    }
    
    .categories-grid {
        grid-template-columns: 1fr;
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }
    
    .hero-buttons {
        justify-content: center;
    }
    
    .dashboard-wrapper {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .dashboard-sidebar {
        position: static;
    }
    
    .overview-stats {
        grid-template-columns: 1fr;
    }
    
    .rewards-overview {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .checkbox-group {
        grid-template-columns: 1fr;
    }
    
    .support-options {
        grid-template-columns: 1fr;
    }
    
    .rewards-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
    
    .about-hero .hero-content {
        grid-template-columns: 1fr;
        gap: 2rem;
        text-align: center;
    }
    
    .about-hero .hero-text h1 {
        font-size: 2.5rem;
    }
    
    .story-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .values-grid {
        grid-template-columns: 1fr;
    }
    
    .cert-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
    
    .team-grid {
        grid-template-columns: 1fr;
    }
    
    .awards-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-content h2 {
        font-size: 2rem;
    }
    
    .contact-hero h1 {
        font-size: 2.5rem;
    }
    
    .methods-grid {
        grid-template-columns: 1fr;
    }
    
    .form-wrapper {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .contact-form .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-content h2 {
        font-size: 2rem;
    }
    
    .faq-grid {
        grid-template-columns: 1fr;
    }
    
    .offers-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .offer-card.featured {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .offer-content {
        padding: 2rem;
    }
    
    .offer-content h3 {
        font-size: 1.5rem;
    }
    
    .offer-card:not(.featured) .offer-content h3 {
        font-size: 1.2rem;
    }
    
    .offer-price {
        justify-content: center;
    }
    
    .sale-price {
        font-size: 1.5rem;
    }
    
    .offer-card:not(.featured) .sale-price {
        font-size: 1.3rem;
    }
    
    .testimonials-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .testimonial-card {
        padding: 2rem;
    }
    
    .testimonial-card::after {
        font-size: 6rem;
        top: -5px;
        left: 15px;
    }
    
    .testimonial-content p {
        font-size: 1rem;
        padding: 0 0.5rem;
    }
    
    .testimonial-author img {
        width: 50px;
        height: 50px;
    }
    
    .testimonials .container::before,
    .testimonials .container::after {
        display: none;
    }
    
    .newsletter-content h2 {
        font-size: 2.5rem;
    }
    
    .newsletter-content h2::before,
    .newsletter-content h2::after {
        display: none;
    }
    
    .newsletter-content p {
        font-size: 1.1rem;
        margin-bottom: 2rem;
    }
    
    .newsletter-form {
        flex-direction: column;
        max-width: 350px;
        gap: 1rem;
        padding: 1rem;
    }
    
    .newsletter-form input {
        padding: 1rem 1.2rem;
        text-align: center;
    }
    
    .newsletter-form button {
        padding: 1rem 2rem;
        width: 100%;
    }
    
    .newsletter .container::before,
    .newsletter .container::after {
        display: none;
    }
    
    /* Products Page Mobile Styles */
    .products-header h1 {
        font-size: 2.5rem;
    }
    
    .products-header h1::before,
    .products-header h1::after {
        display: none;
    }
    
    .products-header p {
        font-size: 1.1rem;
        padding: 0 1rem;
    }
    
    .filters-wrapper {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        padding: 1.5rem;
    }
    
    .filter-actions {
        flex-direction: column;
        gap: 1rem;
    }
    
    .filter-btn {
        width: 100%;
        padding: 1rem 2rem;
    }
    
    .products-controls {
        flex-direction: column;
        align-items: stretch;
        gap: 1.5rem;
        padding: 1.5rem;
    }
    
    .sort-options {
        justify-content: space-between;
    }
    
    .sort-options select {
        flex: 1;
        margin-left: 1rem;
    }
    
    .view-toggle {
        justify-content: center;
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }
    
    .load-more-btn {
        padding: 1rem 2rem;
        font-size: 1rem;
    }
    
    /* Featured Products Mobile Styles */
    .featured-products .section-title {
        font-size: 2.5rem;
    }
    
    .featured-products .section-title::after {
        display: none;
    }
    
    .featured-products .products-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }
    
    .product-card {
        margin: 0 0.5rem;
    }
    
    .product-info {
        padding: 1.2rem;
    }
    
    .product-name {
        font-size: 1.1rem;
    }
    
    .product-description {
        font-size: 0.85rem;
    }
    
    .current-price {
        font-size: 1.2rem;
    }
    
    .add-to-cart-btn {
        padding: 0.8rem 1.2rem;
        font-size: 0.9rem;
    }
    
    .product-actions {
        opacity: 1;
        transform: translateX(0);
    }
    
    .wishlist-btn,
    .quick-view-btn {
        width: 35px;
        height: 35px;
        font-size: 0.8rem;
    }
}

/* Billing Page Styling */
.billing-page {
    padding: 3rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
    min-height: 80vh;
}

.billing-header {
    text-align: center;
    margin-bottom: 3rem;
}

.billing-header .page-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #6b5b73;
    margin-bottom: 2rem;
    position: relative;
}

.billing-header .page-title::after {
    content: '💳';
    position: absolute;
    top: -5px;
    right: 50%;
    transform: translateX(50%);
    font-size: 2rem;
    opacity: 0.3;
}

/* Billing Progress Indicator */
.billing-progress {
    margin-bottom: 2rem;
}

.progress-indicator {
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 800px;
    margin: 0 auto;
    gap: 1rem;
}

.progress-indicator .progress-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
    color: #8b7355;
    transition: all 0.3s ease;
}

.progress-indicator .progress-step.completed {
    color: #10b981;
}

.progress-indicator .progress-step.active {
    color: #f472b6;
}

.progress-indicator .progress-step i {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #e5e7eb;
    color: #6b7280;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    transition: all 0.3s ease;
    border: 3px solid transparent;
}

.progress-indicator .progress-step.completed i {
    background: #10b981;
    color: white;
    border-color: rgba(16, 185, 129, 0.3);
}

.progress-indicator .progress-step.active i {
    background: linear-gradient(135deg, #f472b6, #d946ef);
    color: white;
    border-color: rgba(244, 114, 182, 0.3);
    box-shadow: 0 8px 20px rgba(244, 114, 182, 0.3);
}

.progress-indicator .progress-step span {
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.progress-indicator .progress-line {
    width: 80px;
    height: 3px;
    background: #e5e7eb;
    border-radius: 2px;
    transition: all 0.3s ease;
}

.progress-indicator .progress-line.completed {
    background: #10b981;
}

.security-notice {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    color: #10b981;
    font-weight: 500;
    margin-top: 1rem;
}

.security-notice i {
    font-size: 1.2rem;
}

/* Billing Container */
.billing-container {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 3rem;
    align-items: start;
}

/* Billing Form Section */
.billing-form-section {
    background: white;
    border-radius: 20px;
    padding: 2.5rem;
    box-shadow: 0 8px 30px rgba(244, 114, 182, 0.1);
    border: 1px solid rgba(244, 114, 182, 0.05);
}

.billing-form .form-section {
    margin-bottom: 3rem;
    padding-bottom: 2rem;
    border-bottom: 2px solid rgba(244, 114, 182, 0.1);
}

.billing-form .form-section:last-of-type {
    border-bottom: none;
    margin-bottom: 0;
}

.billing-form .form-section h2 {
    font-family: 'Playfair Display', serif;
    color: #6b5b73;
    font-size: 1.5rem;
    margin-bottom: 2rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

/* Payment Methods Grid */
.payment-methods-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

.payment-method-card {
    display: flex;
    align-items: center;
    padding: 1.5rem;
    border: 2px solid rgba(244, 114, 182, 0.1);
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
    position: relative;
}

.payment-method-card:hover {
    border-color: rgba(244, 114, 182, 0.3);
    background: rgba(244, 114, 182, 0.02);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(244, 114, 182, 0.1);
}

.payment-method-card.selected {
    border-color: #f472b6;
    background: rgba(244, 114, 182, 0.05);
    box-shadow: 0 4px 15px rgba(244, 114, 182, 0.2);
}

.payment-method-card input[type="radio"] {
    display: none;
}

.payment-method-card .method-icon {
    margin-right: 1rem;
    font-size: 1.8rem;
    color: #f472b6;
    width: 40px;
    text-align: center;
}

.payment-method-card .method-info h3 {
    font-weight: 700;
    color: #6b5b73;
    margin-bottom: 0.3rem;
    font-size: 1rem;
}

.payment-method-card .method-info p {
    color: #8b7355;
    font-size: 0.85rem;
    margin: 0;
}

.payment-method-card .card-logos {
    position: absolute;
    top: 0.5rem;
    right: 0.5rem;
    display: flex;
    gap: 0.2rem;
}

.payment-method-card .card-logos i {
    font-size: 1.2rem;
    color: #8b7355;
    opacity: 0.6;
}

/* Card Form */
.card-form {
    background: rgba(244, 114, 182, 0.02);
    border-radius: 12px;
    padding: 2rem;
    border: 1px solid rgba(244, 114, 182, 0.1);
}

.card-input-wrapper {
    position: relative;
}

.card-input-wrapper input {
    padding-right: 3rem;
}

.card-type-icon {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.5rem;
    color: #8b7355;
    opacity: 0.6;
}

.cvv-input-wrapper {
    position: relative;
}

.cvv-info {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    cursor: help;
}

.cvv-info i {
    color: #8b7355;
    font-size: 1rem;
}

.cvv-tooltip {
    position: absolute;
    bottom: 100%;
    right: 0;
    background: #333;
    color: white;
    padding: 0.8rem;
    border-radius: 8px;
    font-size: 0.8rem;
    width: 200px;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 10;
}

.cvv-info:hover .cvv-tooltip {
    opacity: 1;
    visibility: visible;
}

.cvv-tooltip::after {
    content: '';
    position: absolute;
    top: 100%;
    right: 1rem;
    border: 5px solid transparent;
    border-top-color: #333;
}

/* Billing Address Options */
.billing-address-options {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-bottom: 2rem;
}

.address-option {
    display: flex;
    align-items: center;
    padding: 1.2rem;
    border: 2px solid rgba(244, 114, 182, 0.1);
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
}

.address-option:hover {
    border-color: rgba(244, 114, 182, 0.3);
    background: rgba(244, 114, 182, 0.02);
}

.address-option.selected {
    border-color: #f472b6;
    background: rgba(244, 114, 182, 0.05);
}

.address-option input[type="radio"] {
    display: none;
}

.address-option .option-content {
    display: flex;
    align-items: center;
    gap: 0.8rem;
}

.address-option .option-content i {
    color: #f472b6;
    font-size: 1.2rem;
}

.address-option .option-content span {
    font-weight: 600;
    color: #6b5b73;
}

.different-address-form {
    background: rgba(244, 114, 182, 0.02);
    border-radius: 12px;
    padding: 2rem;
    border: 1px solid rgba(244, 114, 182, 0.1);
    margin-top: 1rem;
}

/* Additional Options */
.additional-options {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.billing-form .checkbox-option {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    cursor: pointer;
    padding: 1rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.billing-form .checkbox-option:hover {
    background: rgba(244, 114, 182, 0.02);
}

.billing-form .checkbox-option input[type="checkbox"] {
    display: none;
}

.billing-form .checkbox-option .checkmark {
    width: 20px;
    height: 20px;
    border: 2px solid rgba(244, 114, 182, 0.3);
    border-radius: 4px;
    position: relative;
    transition: all 0.3s ease;
    flex-shrink: 0;
    margin-top: 0.2rem;
}

.billing-form .checkbox-option input[type="checkbox"]:checked + .checkmark {
    background: #f472b6;
    border-color: #f472b6;
}

.billing-form .checkbox-option input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-weight: bold;
    font-size: 0.8rem;
}

.option-text {
    flex: 1;
}

.option-title {
    display: block;
    font-weight: 600;
    color: #6b5b73;
    margin-bottom: 0.3rem;
}

.option-title a {
    color: #f472b6;
    text-decoration: none;
}

.option-title a:hover {
    text-decoration: underline;
}

.option-description {
    display: block;
    color: #8b7355;
    font-size: 0.9rem;
    line-height: 1.4;
}

/* Billing Actions */
.billing-actions {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 2px solid rgba(244, 114, 182, 0.1);
}

.btn-complete-order {
    background: linear-gradient(135deg, #10b981, #059669);
    font-size: 1.1rem;
    padding: 1.2rem 2rem;
    flex: 1;
    max-width: 250px;
}

.btn-complete-order:hover {
    box-shadow: 0 10px 25px rgba(16, 185, 129, 0.4);
}

/* Order Summary Enhancements */
.summary-card .applied-promo {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(16, 185, 129, 0.1);
    border: 1px solid rgba(16, 185, 129, 0.2);
    border-radius: 8px;
    padding: 0.8rem 1rem;
    margin-bottom: 1rem;
}

.applied-promo .promo-info {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #10b981;
    font-weight: 600;
}

.applied-promo .remove-promo {
    background: none;
    border: none;
    color: #ef4444;
    cursor: pointer;
    font-size: 0.85rem;
    text-decoration: underline;
}

.payment-security {
    margin-bottom: 2rem;
    padding: 1.5rem;
    background: rgba(244, 114, 182, 0.02);
    border-radius: 12px;
    border: 1px solid rgba(244, 114, 182, 0.1);
}

.payment-security .security-badges {
    display: flex;
    justify-content: center;
    gap: 2rem;
    margin-bottom: 1rem;
}

.payment-security .security-badge {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #10b981;
    font-size: 0.85rem;
    font-weight: 500;
}

.payment-security .accepted-cards {
    text-align: center;
}

.payment-security .accepted-cards span {
    display: block;
    color: #6b5b73;
    font-weight: 600;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
}

.payment-security .card-icons {
    display: flex;
    justify-content: center;
    gap: 0.8rem;
}

.payment-security .card-icons i {
    font-size: 1.5rem;
    color: #8b7355;
    opacity: 0.7;
    transition: all 0.3s ease;
}

.payment-security .card-icons i:hover {
    opacity: 1;
    transform: scale(1.1);
}

/* Guarantee Badges */
.guarantee-badges {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.guarantee-badge {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: rgba(16, 185, 129, 0.05);
    border-radius: 8px;
    border: 1px solid rgba(16, 185, 129, 0.1);
}

.guarantee-badge i {
    font-size: 1.5rem;
    color: #10b981;
    width: 30px;
    text-align: center;
}

.badge-text {
    flex: 1;
}

.badge-title {
    display: block;
    font-weight: 700;
    color: #6b5b73;
    margin-bottom: 0.2rem;
    font-size: 0.9rem;
}

.badge-desc {
    display: block;
    color: #8b7355;
    font-size: 0.8rem;
}

/* Order Confirmation Modal */
.confirmation-modal {
    max-width: 600px;
    padding: 0;
    border-radius: 20px;
    overflow: hidden;
}

.confirmation-header {
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    text-align: center;
    padding: 3rem 2rem 2rem;
}

.confirmation-header .success-icon i {
    font-size: 4rem;
    margin-bottom: 1rem;
}

.confirmation-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    margin-bottom: 0.5rem;
}

.confirmation-header p {
    font-size: 1.1rem;
    opacity: 0.9;
}

.order-confirmation-details {
    padding: 2rem;
}

.confirmation-info {
    background: rgba(244, 114, 182, 0.05);
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 2rem;
}

.info-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem 0;
    border-bottom: 1px solid rgba(244, 114, 182, 0.1);
}

.info-item:last-child {
    border-bottom: none;
}

.info-item .label {
    color: #8b7355;
    font-weight: 500;
}

.info-item .value {
    color: #6b5b73;
    font-weight: 700;
}

.next-steps h4 {
    color: #6b5b73;
    margin-bottom: 1rem;
    font-family: 'Playfair Display', serif;
}

.next-steps ul {
    list-style: none;
    padding: 0;
}

.next-steps li {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    padding: 0.5rem 0;
    color: #8b7355;
}

.next-steps li i {
    color: #10b981;
    width: 20px;
}

.confirmation-actions {
    display: flex;
    gap: 1rem;
    padding: 2rem;
    border-top: 1px solid rgba(244, 114, 182, 0.1);
}

/* Responsive Design for Billing */
@media (max-width: 768px) {
    .billing-container {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .order-summary-section {
        position: static;
        order: -1;
    }
    
    .progress-indicator {
        flex-direction: column;
        gap: 1rem;
    }
    
    .progress-indicator .progress-line {
        width: 3px;
        height: 30px;
        margin: 0;
    }
    
    .payment-methods-grid {
        grid-template-columns: 1fr;
    }
    
    .billing-actions {
        flex-direction: column;
    }
    
    .payment-security .security-badges {
        flex-direction: column;
        gap: 1rem;
    }
    
    .confirmation-actions {
        flex-direction: column;
    }
}

@media (max-width: 480px) {
    .billing-page {
        padding: 2rem 0;
    }
    
    .billing-header .page-title {
        font-size: 2rem;
    }
    
    .billing-form-section {
        padding: 1.5rem;
        border-radius: 15px;
    }
    
    .summary-card {
        padding: 1.5rem;
        border-radius: 15px;
    }
    
    .payment-method-card {
        padding: 1rem;
    }
    
    .card-form,
    .different-address-form {
        padding: 1.5rem;
    }
    
    .confirmation-header {
        padding: 2rem 1.5rem 1.5rem;
    }
    
    .confirmation-header h2 {
        font-size: 1.8rem;
    }
}







/* ===========================
   Product Detail Page Styling
   =========================== */
   .product-detail {
    padding: 4rem 0;
    background: linear-gradient(135deg, #fefefe 0%, #fdf2f8 100%);
}

.product-detail-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: flex-start;
}

.product-images {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.product-images .main-image {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(244, 114, 182, 0.2);
}

.product-images .main-image img {
    width: 100%;
    border-radius: 20px;
    transition: transform 0.3s ease;
}

.product-images .main-image img:hover {
    transform: scale(1.05);
}

.thumbnail-images {
    display: flex;
    gap: 1rem;
}

.thumbnail-images img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.thumbnail-images img.active,
.thumbnail-images img:hover {
    border-color: #f472b6;
    transform: scale(1.05);
}

.product-info h1 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
    color: #6b5b73;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.product-description {
    margin: 1.5rem 0;
    font-size: 1.05rem;
    color: #6b5b73;
    line-height: 1.7;
}

.shade-selector {
    display: flex;
    gap: 0.5rem;
    margin: 0.5rem 0;
}

.shade-option {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    cursor: pointer;
    border: 2px solid transparent;
    transition: all 0.3s ease;
}

.shade-option.active,
.shade-option:hover {
    border-color: #f472b6;
    transform: scale(1.1);
}

.quantity-selector {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 0.5rem;
}

.qty-btn {
    background: #f472b6;
    border: none;
    color: white;
    font-weight: 700;
    width: 32px;
    height: 32px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.qty-btn:hover {
    background: #d946ef;
}

.product-actions {
    display: flex;
    gap: 1rem;
    margin: 2rem 0;
}

.wishlist-btn,
.buy-now-btn {
    flex: 1;
    padding: 1rem;
    border-radius: 15px;
    font-weight: 600;
    cursor: pointer;
    border: none;
    transition: all 0.3s ease;
}

.wishlist-btn {
    background: white;
    border: 2px solid #f472b6;
    color: #f472b6;
}

.wishlist-btn:hover {
    background: #f472b6;
    color: white;
}

.buy-now-btn {
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
}

.buy-now-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
}

.product-features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
    margin-top: 2rem;
}

.product-features .feature {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    background: white;
    padding: 0.8rem 1rem;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(244, 114, 182, 0.1);
    color: #6b5b73;
}

/* Tabs */
.product-tabs {
    padding: 3rem 0;
}

.tabs-header {
    display: flex;
    gap: 2rem;
    border-bottom: 2px solid rgba(244, 114, 182, 0.2);
    margin-bottom: 2rem;
}

.tab-btn {
    background: none;
    border: none;
    font-weight: 600;
    color: #6b5b73;
    padding: 1rem 0;
    cursor: pointer;
    position: relative;
    transition: color 0.3s ease;
}

.tab-btn.active,
.tab-btn:hover {
    color: #f472b6;
}

.tab-btn.active::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, #f472b6, #d946ef);
    border-radius: 3px;
}

.tab-panel {
    display: none;
    animation: fadeIn 0.4s ease forwards;
}

.tab-panel.active {
    display: block;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Reviews */
.reviews-summary {
    margin-bottom: 2rem;
    padding: 2rem;
    background: #fdf2f8;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(244, 114, 182, 0.1);
}

.reviews-list .review-item {
    background: white;
    border-radius: 15px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 5px 15px rgba(244, 114, 182, 0.08);
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
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li><a href="{{route('products')}}">Products</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="{{route('contactus')}}">Contact</a></li>
                        
                        @guest
                        <li><a href="{{route('login')}}">Sigin</a></li>
                        <li><a href="{{route('register')}}">Signup</a></li>
                        @else
                        <li>

                         <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{Auth::user()->firstname ?? 'NA'}} (Logout)
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
                        @endguest
                    </ul>
                </nav>
               
                <div class="nav-icons">
                    <a href="#" class="icon-link" id="wishlistBtn"><i class="fas fa-heart"></i><span class="wishlist-count">0</span></a>
                    <a href="cart.html" class="icon-link" id="cartBtn"><i class="fas fa-shopping-bag"></i><span class="cart-count">0</span></a>
                   <!-- <a href="signin.html" class="icon-link" ><i class="fas fa-user"></i></a>-->
                </div>
            </div>
        </div>
    </header>

      @yield('content')

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






// ==========================
// Product Details Interactions
// ==========================
document.addEventListener('DOMContentLoaded', () => {
    // Thumbnail switcher
    const mainImage = document.getElementById('mainProductImage');
    const thumbnails = document.querySelectorAll('.thumbnail');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', () => {
            thumbnails.forEach(t => t.classList.remove('active'));
            thumb.classList.add('active');
            mainImage.src = thumb.src.replace('w=100&h=100', 'w=500&h=500');
        });
    });

    // Shade selector
    const shadeOptions = document.querySelectorAll('.shade-option');
    const selectedShade = document.getElementById('selectedShade');

    shadeOptions.forEach(opt => {
        opt.addEventListener('click', () => {
            shadeOptions.forEach(o => o.classList.remove('active'));
            opt.classList.add('active');
            selectedShade.textContent = opt.dataset.shade.replace('-', ' ');
        });
    });

    // Quantity buttons
    const qtyInput = document.getElementById('quantity');
    document.getElementById('qtyMinus').addEventListener('click', () => {
        let value = parseInt(qtyInput.value) || 1;
        if (value > 1) qtyInput.value = value - 1;
    });
    document.getElementById('qtyPlus').addEventListener('click', () => {
        let value = parseInt(qtyInput.value) || 1;
        if (value < 10) qtyInput.value = value + 1;
    });

    // Tabs switching
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            tabBtns.forEach(b => b.classList.remove('active'));
            tabPanels.forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById(btn.dataset.tab).classList.add('active');
        });
    });
});



    </script>
</body>
</html>
