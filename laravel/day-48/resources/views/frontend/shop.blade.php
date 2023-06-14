@extends('frontend.front_layout')

@section('title')
    Shop page
@endsection

@section('shop-active')
    active
@endsection

@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                {{-- @foreach ($products as $product)
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            @if (isset($product->image) && file_exists($product->image))
                                <img src="{{asset($product->image)}}" style="height: 250px; padding: 15px; border: 1px solid gray;" alt="">
                            @else
                                <img src="{{asset('assets/no-img.png')}}" style="height: 250px;" alt="">
                            @endif
                        </div>
                        <h2><a href="">{{$product->name}}</a></h2>
                        <div class="product-carousel-price">
                            <ins>Tk. {{$product->price}}</ins> <del>$999.00</del>
                        </div>

                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                                rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach --}}

                @foreach ($products as $product)
                    <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                @if (isset($product->image) && file_exists($product->image))
                                    <img src="{{ asset($product->image) }}" style="height: 220px; padding: 15px;" alt="">
                                @else
                                    <img src="{{ asset('assets/no-img.png') }}" style="height: 220px;" alt="">
                                @endif
                                {{-- <img src="{{ asset('assets/frontend') }}/img/product-1.jpg" alt=""> --}}
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add
                                        to cart</a>
                                    <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i>
                                        See details</a>
                                </div>
                            </div>

                            <h2><a href="single-product.html">{{ $product->name }}</a></h2>

                            <div class="product-carousel-price">
                                <ins>Tk. {{ $product->price }}</ins> <del>$100.00</del>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
