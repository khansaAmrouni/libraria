        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="{{route('index')}}">
                                                <img src="{{url('images/libraria-logo-v1.png')}}" alt="LIBRARIA" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                                <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                                <span>/</span>
                                                <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="topbar-links">
                                            @auth
                                            <a href="{{route('dashboard')}}"><i class="fa fa-lock"></i>{{Auth::user()->name}}</a>
                                            <a href="{{route('disconnect')}}" class="deconnect">D??connecter</a>


@endauth

@guest
<a href="{{route('login')}}"><i class="fa fa-lock"></i>Login/</a>
                                                <a href="{{route('register')}}">Register</a>
                                                
                                                @endguest

                                                <span>|</span>
                                                <div class="header-cart dropdown">
                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <small>0</small>
                                                    </a>
                                                    <div class="dropdown-menu cart-dropdown">
                                                        <ul>
                                                            <li class="clearfix">
                                                                <img src="{{url('images/header-cart-image-01.jpg')}}" alt="cart item" />
                                                                <div class="item-info">
                                                                    <div class="name">
                                                                        <a href="#">The Great Gatsby</a>
                                                                    </div>
                                                                    <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                                    <div class="price">1 X $10.00</div>
                                                                </div>
                                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                            </li>
                                                            <li class="clearfix">
                                                                <img src="{{url('images/header-cart-image-02.jpg')}}" alt="cart item" />
                                                                <div class="item-info">
                                                                    <div class="name">
                                                                        <a href="#">The Great Gatsby</a>
                                                                    </div>
                                                                    <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                                    <div class="price">1 X $10.00</div>
                                                                </div>
                                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                            </li>
                                                            <li class="clearfix">
                                                                <img src="{{url('images/header-cart-image-03.jpg')}}" alt="cart item" />
                                                                <div class="item-info">
                                                                    <div class="name">
                                                                        <a href="#">The Great Gatsby</a>
                                                                    </div>
                                                                    <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                                    <div class="price">1 X $10.00</div>
                                                                </div>
                                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="cart-total">
                                                            <div class="title">SubTotal</div>
                                                            <div class="price">$30.00</div>
                                                        </div>
                                                        <div class="cart-buttons">
                                                            <a href="{{route('cart')}}" class="btn btn-dark-gray">View Cart</a>
                                                            <a href="{{route('checkout')}}" class="btn btn-primary">Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown active">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('index')}}">Home</a>
                                 
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('books-media-list-view')}}">Books &amp; Media</a>
                         
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('news-events-list-view')}}">News &amp; Events</a>
                             
                                        </li>
                               
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('blog')}}">Blog</a>
                                   
                                        </li>
                                        <li><a href="{{route('services')}}">Services</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                               
                                    <li>
                                        <a href="{{route('books-media-list-view')}}">Books &amp; Media</a>
                                
                                    </li>
                                    <li>
                                        <a href="{{route('news-events-list-view')}}">News &amp; Events</a>
                                  
                                    </li>
                               
                                    <li>
                                        <a href="{{route('blog')}}">Blog</a>
                                        <ul>
                            
                                        </ul>
                                    </li>
                                    <li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->