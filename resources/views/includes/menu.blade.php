<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo pull-left">
                    <a href="{{url('/')}}"><img src="{{url('../')}}/theme/images/home/logo.png"
                                                alt=""/></a>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/')}}" class="active">Home</a></li>
                        <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="{{url('/product')}}">Products</a></li>
                                <li><a href="{{url('/product-details')}}">Product Details</a></li>
                                <li><a href="{{url('/newArrival')}}">New Arrival</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="{{url('/blog')}}">Blog List</a></li>
                                {{--<li><a href="blog-single.html">Blog Single</a></li>--}}
                            </ul>
                        </li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="shop-menu right">
                    <ul class="nav navbar-nav">
                        @if(Auth::check())
                            <li><a href="{{url('/profile')}}"><i
                                            class="fa fa-user"></i> {{--{{ucwords(Auth::user()->name)}}--}}
                                    Account</a></li>
                        @endif
                        <li><a href="{{url('/wishlist')}}"><i class="fa fa-star"></i> Wishlist
                                <span style="color: green; font-weight: bold">({{App\WishList::count()}}
                                    )</span></a>
                        </li>
                        <li><a href="{{url('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a>
                        </li>
                        <li><a href="{{url('/cart}}"><i class="fa fa-shopping-cart"></i> Cart
                                <spam style="color:green; font-weight: bold;">
                                    ({{Cart::count()}}</spam>
                                <br>
                                <p align="center" style="color: green; font-weight: bold">
                                    ({{Cart::subtotal()}})</p></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="badge">{{Cart::count()}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <p align="center" class="pull-left"
                                   style="font-weight:bold; margin:5px">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="badge">{{Cart::count()}}</span>
                                </p>
                                <p align="center" class="pull-right"
                                   style="font-weight:bold; margin:5px">Total:
                                    <span style="color:green">{{Cart::subtotal()}}</span>
                                </p>
                                @php($cartData = Cart::content();)
                                @if(count($cartData)!=0)
                                    @foreach($cartData as $cartD)
                                        <div class="col-md-12" style="padding:5px">

                                            <div class="col-sm-5">
                                                <img src="{{$cartD->options->img}}"
                                                     style="width:80%"/>
                                            </div>
                                            <div class="col-sm-7">
                                                <h4 style="margin:0px;">{{$cartD->name}}</h4>
                                                <p>price: {{$cartD->price}}
                                                    qty: {{$cartD->qty}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                    <br> <br>
                                    <div class="row">
                                        <div class="col-md-5 pull-left">
                                            <a href="{{url('/checkout')}}"
                                               style="padding:5px; color:#fff; background-color:orange">Checkout</a>
                                        </div>

                                        <div class="col-md-5 pull-right">
                                            <a href="{{url('/cart')}}"
                                               style="padding:5px; color:#fff; background-color:blueviolet">View
                                                Cart</a>
                                        </div>
                                    </div>
                                @endif
                            </ul>
                        </li>
                        @if(Auth::check())
                            <li><a href="{{url('/logout')}}"><i class="fa fa-lock"></i> Logout</a>
                            </li>
                        @else
                            <li><a href="{{url('/login')}}"><i class="fa fa-lock"></i> Login</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="input-group col-sm-2 pull-right" id="custom-search-input">
                <input type="text" class="  search-query form-control" placeholder="Search">
                <span class="input-group-btn">
					<button class="btn btn-danger" type="button">
						<span class=" glyphicon glyphicon-search"></span>
					</button>
                </span>
            </div>
        </div>
    </div>
</div><!--/header-middle-->