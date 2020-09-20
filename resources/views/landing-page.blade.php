<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Ecommerce Example</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>
<body>
    <header class="with-background">
        <div class="top-nav container">
            <div class="logo">Laravel Ecommerce</div>
            <ul>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Cart<span class="cart-count"><span>3</span></span></a></li>
            </ul>
        </div><!-- end top-nav -->
        <div class="hero container">
            <div class="hero-copy">
                <h1>laravel Ecommerce Demo</h1>
                <p>Includes multiple products, categories, a shopping cart and a checkout system with Stripe integration</p>
                <div class="hero-buttons">
                    <a href="#" class="button button-white">Blog Post</a>
                    <a href="#" class="button button-white">Github</a>
                </div>
            </div><!-- end hero-copy -->

            <div class="hero-image">
                <img src="img/mac.png" alt="hero image">
            </div><!--end hero-image -->
        </div><!-- end hero -->
    </header>

    <div class="featured-section">
        <div class="container">
            <h1 class="text-center">Laravel Ecommerce</h1>

            <p class="section description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="text-center button-container">
                <a href="#" class="button">Featured</a>
                <a href="#" class="button">On Sale</a>
            </div>

            <div class="products text-center">
                @foreach($products as $product)
                    <div class="product">
                        <a href="#"><img src="/img/mac.png" alt="product"></a>
                        <a href="#"><div class="product-name">{{$product-> name}}</div></a>
                        <div class = "product-price">{{$product->price}}</div>
                    </div>
                @endforeach
                <!--
                <div class="product">
                    <a href="#"><img src="/img/mac.png" alt="product"></a>
                    <a href="#"><div class="product-name">Macbook Pro</div></a>
                    <div class = "product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="/img/mac.png" alt="product"></a>
                    <a href="#"><div class="product-name">Macbook Pro</div></a>
                    <div class = "product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="/img/mac.png" alt="product"></a>
                    <a href="#"><div class="product-name">Macbook Pro</div></a>
                    <div class = "product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="/img/mac.png" alt="product"></a>
                    <a href="#"><div class="product-name">Macbook Pro</div></a>
                    <div class = "product-price">$2499.99</div>
                </div>-->
            </div>


        </div>
    </div>
</body>
</html>
