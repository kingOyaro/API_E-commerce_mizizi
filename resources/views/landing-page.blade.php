<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mizizi</title>

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
            <div class="logo">Mizizi</div>
            <ul>
                <li><a href="/shop">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li>
                    <a href="{{route('cart.index')}}">Cart<span class="cart-count">
                            @if (Cart::instance('default')->count() > 0)
                                <span>{{Cart::instance('default')->count()}}</span></span>
                        @endif
                    </a>
                </li>
            </ul>
        </div><!-- end top-nav -->
        <div class="hero container">
            <div class="hero-copy">
                <h1>Welcome</h1>
                <p>Your one stop shop for everything tech. The project Includes multiple products, categories, a shopping cart and a checkout system with Stripe as well as Paypal  integration</p>
                <div class="hero-buttons">
                    <a href="#" class="button button-white">Shop now</a>
                    <a href="#" class="button button-white">Blog Post</a>
                </div>
            </div><!-- end hero-copy -->

            <div class="hero-image">
                <img src="https://images-na.ssl-images-amazon.com/images/I/81inkGnge8L._AC_SL1500_.jpg" alt="hero image">
            </div><!--end hero-image -->
        </div><!-- end hero -->
    </header>

    <div class="featured-section">
        <div class="container">
            <h1 class="text-center">Products</h1>

            <p class="section description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <div class="text-center button-container">
                <a href="#" class="button">Featured</a>
                <a href="#" class="button">On Sale</a>
            </div>

            <div class="products text-center">
                @foreach($products as $product)
                    <div class="product">
                        <a href="{{route('shop.show',$product->slug)}}"><img src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="Product Image" ></a>
                        <a href="{{route('shop.show',$product->slug)}}"><div class="product-name">{{$product-> name}}</div></a>
                        <div class = "product-price">{{$product->presentPrice()}}</div>
                    </div>
                @endforeach

            </div><!-- end products -->

            <div class="text-center button-container">
                <a href="{{route('shop.index')}}" class="button">View more products</a>
            </div>

        </div><!-- end container -->
    </div><!-- end featured-section -->

    <div class="blog-section">
        <div class="container">
            <h1 class="text-center">Our Blog</h1>
            <p class="section-description">Eu de sein me ange chez bras puis vies. He houle sacre te tu je mange. Vie dut sais doit rire fort gens soir ifs. Ici les famille cavites tassent ame sur. Rebord tracer petits ifs annees des. Cavaliers sonnaient nid fabriques entourage signalant sur six apprenons. Eue regarde net nos horizon crurent. Le gare pret pont au. Meme noir la afin he ii jeta. </p>

            <div class="blog-posts">
                <div class="blog-post" id="blog">
                    <a href="#"><img src="https://wallpaperaccess.com/full/959295.jpg" alt="Blog Image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                    <div class="blog-description">復讐者」. 第三章 第四章 第九章 第十章 第七章. 第二章 第九章 第四章 第八章. 第十六章 第十一章 第十二章 第十五章 第十三章. 第二章 第九章 第十章.復讐者」 伯母さん . 復讐者」. 復讐者」.伯母さん 復讐者」 . 伯母さん 復讐者」. 復讐者」 . 第十章 第六章 第九章. 第十六章 第十九章 第十五章 第十七章 第十三章 手配書. 復讐者」. 第十三章 第十九章 第十六章 手配書 第十四章 . .伯母さん 復讐者」</div>
                </div>
                <div class="blog-post" id="blog">
                    <a href="#"><img src="https://www.pxwall.com/wp-content/uploads/2018/04/Car-Games-Wallpaper-Awesome-Grid-Autosport-Wallpaper-Game-Wallpapers-Wallpapers-4k.jpg" alt="Blog Image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                    <div class="blog-description">Ou la affreux longues epouses courent apparue souleve pu. Annoncait pouvaient divergent incapable rapportes as qu. Toi marechaux des six militaire capitaine tarderait croissent fut. De qu oh puissions il messieurs attardent uniformes mystiques certitude. Chez la vies saut je. Nul massacrer promenade cauchemar peu. Je un oh petits ni ferree enleve mirent balaye flancs.</div>
                </div>
                <div class="blog-post" id="blog">
                    <a href="#"><img src="https://wallpaper.to/files/preview/1280x960/41591187644i23h3hypnmaz3xyyfvq4xonfbn1lvxbreuxfig1gd5dbiug4g6bef0wvgm54x2dbjfwf9cu6mvknfaljheyf53f6j1hfriz8mif9.jpg" alt="Blog Image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                    <div class="blog-description">May musical arrival beloved luckily adapted him. Shyness mention married son she his started now. Rose if as past near were. To graceful he elegance oh moderate attended entrance pleasure. Vulgar saw fat sudden edward way played either. Thoughts smallest at or peculiar relation breeding produced an. At depart spirit on stairs. She the either are wisdom praise things she before. Be mother itself vanity favour do me of. Begin sex was power joy after had walls miles. </div>
                </div>
            </div>
        </div>
    </div><!-- end blog-section -->
    <footer>
        <div class="footer-content container">
            <div class="made-with">Made with <i class="fa fa-heart"></i> by Vikendi_Noobs</div>
            <ul>
                <li>Follow Us:</li>
                <li><a href="#"><i class="fa fa-globe"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div><!-- end footer-content-->
    </footer>
</body>
</html>
