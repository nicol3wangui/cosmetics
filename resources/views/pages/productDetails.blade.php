@extends('layouts.customer')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <nav id="breadcrumbNav">
                <a href="{{route('welcome')}}">Home</a> > <a href="{{route('products')}}">Products</a> > <span id="productCategory">{{$product->category->category_name ?? 'NA'}}</span> > <span id="productName"></span>
            </nav>
        </div>
    </div>

    <!-- Product Detail -->
    <section class="product-detail">
        <div class="container">
            <div class="product-detail-wrapper">
                <!-- Product Images -->
                <div class="product-images">
                    <div class="main-image">
                        <img id="mainProductImage" src="{{asset('backend/images/products/'.$product->product_image)}}" alt="Product">
                        <div class="image-zoom" id="imageZoom"></div>
                    </div>
                    <!--
                    <div class="thumbnail-images">
                        <img class="thumbnail active" src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=100&h=100&fit=crop" alt="Product View 1">
                        <img class="thumbnail" src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?w=100&h=100&fit=crop" alt="Product View 2">
                        <img class="thumbnail" src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=100&h=100&fit=crop" alt="Product View 3">
                        <img class="thumbnail" src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?w=100&h=100&fit=crop" alt="Product View 4">
                    </div>-->
                </div>

                <!-- Product Info -->
                 <form method="POST" action="{{route('addToCart')}}">
                    @csrf
                    <input type="text" name="product_id" value="{{$product->id}}" hidden="true">

                    <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden="true">
                    <div class="product-info">
                        <div class="product-header">
                            <h1 id="productTitle">{{$product->product_name ?? 'NA'}}</h1>
                            <div class="product-rating">
                                <div class="stars" id="productStars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count" id="ratingCount">(2,847 reviews)</span>
                            </div>
                        
                        </div>

                        <div class="product-description">
                            <p id="productDescription">{{$product->product_description ?? 'NA'}}</p>
                        </div>

                        <div class="product-options">
                            
                            <div class="option-group">
                                <label for="quantity">Quantity:</label>
                                <div class="quantity-selector">
                                    <a href="{{route('products')}}" class="continue-shopping-btn">Continue Shopping</a>
                                    <input type="number" id="quantity" name="qty" value="1" min="1" max="10" style="width:80px;height:40px;font-size:30px;border-radius:20px;padding:20px;">
                                    <button type="submit" class="add-to-cart-btn" >
                                         <i class="fas fa-shopping-cart"></i>
                                         Add to Cart
                                    </button>
                                </div>

                                
                            </div>
                            <br>

                           <!--<button type="submit" class="add-to-cart-btn" style="width:150px">
                                <i class="fas fa-shopping-cart"></i>
                                Add to Cart
                            </button>-->

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>


   @endsection