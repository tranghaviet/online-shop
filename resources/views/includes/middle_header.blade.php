<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <?php if (Auth::check()) { ?>
                        <li><a href="{{url('/')}}/profile"><i
                                        class="fa fa-user"></i>{{ucwords(Auth::user()->name)}}
                            </a></li>
                        <?php } ?>
                        <li><a href="{{url('/WishList')}}"><i class="fa fa-star"></i> Wishlist
                                <span style="color:green; font-weight: bold">({{App\wishList::count()}}
                                    )</span> </a></li>
                        <li><a href="{{url('/checkout')}}"><i class="fa fa-crosshairs"></i>
                                Checkout</a></li>

                        <?php
                        /*<li><a href="{{url('/cart')}}"><i class="fa fa-shopping-cart"></i>
                                 Cart <span style="color:green; font-weight: bold">({{Cart::count()}})</span><br>
                                 <p align="center" style="color:green; font-weight:bold">({{Cart::subtotal()}})</p></a>
                         </li>
                         */?>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                               role="button"
                               aria-haspopup="true" aria-expanded="true"><i
                                        class="fa fa-shopping-cart"></i>
                                <span class="badge">{{Cart::count()}}</span></a>
                            <ul class="dropdown-menu">
                                <p align="center" class="pull-left"
                                   style="font-weight:bold; margin:5px">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="badge">{{Cart::count()}}</span></p>


                                <p align="center" class="pull-right"
                                   style="font-weight:bold; margin:5px">Total:
                                    <span style="color:green">{{Cart::subtotal()}}</span></p>

                                <?php $cartData = Cart::content();?>
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
                                @endif
                            </ul>
                        </li>


                        <?php if (Auth::check()) { ?>
                        <li><a href="{{url('/logout')}}"><i class="fa fa-lock"></i> Logout</a>
                        </li>
                        <?php } else { ?>
                        <li><a href="{{url('/login')}}"><i class="fa fa-lock"></i> Login</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->