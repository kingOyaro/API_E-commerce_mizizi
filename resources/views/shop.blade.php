@extends('layout')

@section('title','Products')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shop</span>
        </div>
    </div><!-- end breadcrumbs -->

    <div class="product-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Desktops</a></li>
                <li><a href="#">Mobile Phones</a></li>
                <li><a href="#">Tablets</a></li>
                <li><a href="#">TVs</a></li>
                <li><a href="#">Digital Cameras</a></li>
                <li><a href="#">Appliances</a></li>
            </ul>

            <h3>By Price</h3>
            <ul>
                <li><a href="#">$0 - $700</a></li>
                <li><a href="#">$700- $2500</a></li>
                <li><a href="#">$2500*</a></li>
            </ul>
        </div><!-- end sidebar -->
        <div>
            <h1 class="stylish-heading">Laptops</h1>
            <div class="products text-center">


                @foreach($products as $product)
                    <div class="product">
                        <a href="{{route('shop.show',$product->slug)}}"><img src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="Product Image" ></a>
                        <a href="{{route('shop.show',$product->slug)}}"><div class="product-name">{{$product-> name}}</div></a>
                        <div class = "product-price">{{$product->presentPrice()}}</div>
                    </div>
                @endforeach
            </div><!-- end products -->
        </div>
    </div>


@endsection
@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
