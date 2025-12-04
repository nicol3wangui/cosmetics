@extends('layouts.frontend')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <nav>
                <a href="index.html">Home</a> > <span>Products</span>
            </nav>
        </div>
    </div>

    <!-- Products Header -->
    <section class="products-header">
        <div class="container">
            <h1>Our Products</h1>
            <p>Discover our complete collection of premium beauty products</p>
        </div>
    </section>

    <!-- Filters & Search 
    <section class="products-filters">
        <div class="container">
            <div class="filters-wrapper">
                <div class="filter-group">
                    <h4>Categories</h4>
                    <div class="filter-options">
                        <label><input type="checkbox" name="category" value="all" checked> All Products</label>
                        <label><input type="checkbox" name="category" value="skincare"> Skincare</label>
                        <label><input type="checkbox" name="category" value="makeup"> Makeup</label>
                        <label><input type="checkbox" name="category" value="haircare"> Hair Care</label>
                        <label><input type="checkbox" name="category" value="fragrance"> Fragrance</label>
                        <label><input type="checkbox" name="category" value="bodycare"> Body Care</label>
                    </div>
                </div>
                
                <div class="filter-group">
                    <h4>Price Range</h4>
                    <div class="price-range">
                        <input type="range" id="priceRange" min="0" max="200" value="200">
                        <div class="price-display">$0 - $<span id="priceValue">200</span></div>
                    </div>
                </div>
                
                <div class="filter-group">
                    <h4>Brand</h4>
                    <div class="filter-options">
                        <label><input type="checkbox" name="brand" value="fenty"> Fenty Beauty</label>
                        <label><input type="checkbox" name="brand" value="loreal"> L'Oréal</label>
                        <label><input type="checkbox" name="brand" value="neutrogena"> Neutrogena</label>
                        <label><input type="checkbox" name="brand" value="cerave"> CeraVe</label>
                        <label><input type="checkbox" name="brand" value="ordinary"> The Ordinary</label>
                    </div>
                </div>
                
                <div class="filter-group">
                    <h4>Skin Type</h4>
                    <div class="filter-options">
                        <label><input type="checkbox" name="skintype" value="all"> All Skin Types</label>
                        <label><input type="checkbox" name="skintype" value="dry"> Dry</label>
                        <label><input type="checkbox" name="skintype" value="oily"> Oily</label>
                        <label><input type="checkbox" name="skintype" value="combination"> Combination</label>
                        <label><input type="checkbox" name="skintype" value="sensitive"> Sensitive</label>
                    </div>
                </div>
                
                <div class="filter-actions">
                    <button class="filter-btn apply" id="applyFilters">Apply Filters</button>
                    <button class="filter-btn clear" id="clearFilters">Clear All</button>
                </div>
            </div>
            
            <div class="products-controls">
                <div class="results-info">
                    <span id="resultsCount">Showing all products</span>
                </div>
                <div class="sort-options">
                    <label for="sortBy">Sort by:</label>
                    <select id="sortBy">
                        <option value="featured">Featured</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="rating">Customer Rating</option>
                        <option value="newest">Newest First</option>
                        <option value="bestseller">Best Sellers</option>
                    </select>
                </div>
                <div class="view-toggle">
                    <button class="view-btn active" data-view="grid"><i class="fas fa-th"></i></button>
                    <button class="view-btn" data-view="list"><i class="fas fa-list"></i></button>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Products Grid -->
    <section class="products-section">
        <div class="container">
            <div class="products-grid" id="productsGrid">
                <!-- Product Cards -->
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
                            <span class="current-price">Ksh {{$product->product_price ?? 'NA'}}</span>
                        </div>
                       <a href="{{route('productDetails',['id'=>$product->id])}}" class="cta-btn primary "> 
                            <i class="fas fa-shopping-cart"></i> 
                            Add to cart
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
            
            <!-- Load More Button 
            <div class="load-more-section">
                <button class="load-more-btn" id="loadMoreBtn">Load More Products</button>
            </div>-->
        </div>
    </section>

    <!-- Recently Viewed -->
    <section class="recently-viewed" id="recentlyViewed" style="display: none;">
        <div class="container">
            <h2 class="section-title">Recently Viewed</h2>
            <div class="products-slider" id="recentlyViewedSlider">
                <!-- Recently viewed products will be loaded here -->
            </div>
        </div>
    </section>
@endsection
    