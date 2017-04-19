@extends('layouts.master')

@section('content')
    <script>
        $(document).ready(function () {
            $('#addToCart').hide();
            $('#addToCart_default').show();
            $('#size').change(function () {
                var size = $('#size').val();
                var proDum = $('#proDum').val();


                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '<?php echo url('/selectSize');?>',
                    data: "size=" + size + "& proDum=" + proDum,
                    success: function (response) {
                        console.log(response);
                        $('#price').html(response);
                        $('#addToCart').hide();
                        $('#addToCart_default').show();

                            <?php for($i = 1;$i < 10;$i++){?>
                        var colorValue<?php echo $i;?> = $('#colorValue<?php echo $i;?>').val();
                        $('#colorClicked<?php echo $i;?>').click(function () {

                            // pass color values to color function in Controller
                            $.ajax({
                                type: 'get',
                                dataType: 'html',
                                url: '<?php echo url('/selectColor');?>',
                                data: "size=" + size + "& proDum=" + proDum + "& color=" + colorValue<?php echo $i;?>,
                                success: function (response) {
                                    console.log(response);
                                    $('#price').html(response);
                                    $('#addToCart').show();
                                    $('#addToCart_default').hide();


                                }
                            });

                        });
                        <?php }?>
                    }
                });


            });

        });
    </script>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian"
                                           href="#sportswear">
                                            <span class="badge pull-right"><i
                                                        class="fa fa-plus"></i></span>
                                            Sportswear
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Nike </a></li>
                                            <li><a href="">Under Armour </a></li>
                                            <li><a href="">Adidas </a></li>
                                            <li><a href="">Puma</a></li>
                                            <li><a href="">ASICS </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian"
                                           href="#mens">
                                            <span class="badge pull-right"><i
                                                        class="fa fa-plus"></i></span>
                                            Mens
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Fendi</a></li>
                                            <li><a href="">Guess</a></li>
                                            <li><a href="">Valentino</a></li>
                                            <li><a href="">Dior</a></li>
                                            <li><a href="">Versace</a></li>
                                            <li><a href="">Armani</a></li>
                                            <li><a href="">Prada</a></li>
                                            <li><a href="">Dolce and Gabbana</a></li>
                                            <li><a href="">Chanel</a></li>
                                            <li><a href="">Gucci</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian"
                                           href="#womens">
                                            <span class="badge pull-right"><i
                                                        class="fa fa-plus"></i></span>
                                            Womens
                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Fendi</a></li>
                                            <li><a href="">Guess</a></li>
                                            <li><a href="">Valentino</a></li>
                                            <li><a href="">Dior</a></li>
                                            <li><a href="">Versace</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Kids</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Fashion</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Households</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Interiors</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Clothing</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Bags</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Shoes</a></h4>
                                </div>
                            </div>
                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href=""> <span class="pull-right">(50)</span>Acne</a>
                                    </li>
                                    <li><a href=""> <span class="pull-right">(56)</span>Grüne
                                            Erde</a></li>
                                    <li><a href=""> <span class="pull-right">(27)</span>Albiro</a>
                                    </li>
                                    <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a>
                                    </li>
                                    <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a>
                                    </li>
                                    <li><a href=""> <span
                                                    class="pull-right">(9)</span>Boudestijn</a></li>
                                    <li><a href=""> <span class="pull-right">(4)</span>Rösch
                                            creative culture</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well">
                                <input type="text" class="span2" value="" data-slider-min="0"
                                       data-slider-max="600" data-slider-step="5"
                                       data-slider-value="[250,450]" id="sl2"><br/>
                                <b>$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt=""/>
                        </div><!--/shipping-->

                    </div>
                </div>
                @foreach($Products as $value)
                    <div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <img src="<?php echo $value->pro_img; ?>" alt=""/>
                                    <h3>ZOOM</h3>
                                </div>
                                <div id="similar-product" class="carousel slide"
                                     data-ride="carousel">

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="<?php echo $value->pro_img; ?>" alt=""/>
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo $value->pro_img; ?>" alt=""/>
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo $value->pro_img; ?>" alt=""/>
                                        </div>

                                    </div>

                                    <!-- Controls -->
                                    <a class="left item-control" href="#similar-product"
                                       data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="right item-control" href="#similar-product"
                                       data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="col-sm-7">

                                <div class="product-information"><!--/product-information-->

                                    @if($value->new_arrival==1)
                                        <img src="{{Config::get('app.url')}}theme/images/product-details/new.jpg"
                                             class="newarrival" alt=""/>
                                    @endif
                                    <h2><?php echo ucwords($value->pro_name); ?></h2>
                                    <p>Web Code: <?php echo $value->pro_code; ?></p>
                                    <form action="{{url('/cart/addItem')}}/<?php echo $value->id; ?>">
                              <span>
                                  <span id="price">
                                    @if($value->spl_price ==0)
                                          ${{$value->pro_price}}
                                          <input type="hidden" value="{{$value->pro_price}}"
                                                 name="newPrice"/>
                                      @else
                                          <b style="text-decoration:line-through; color:#ddd">
                                      ${{$value->pro_price}} </b>
                                          ${{$value->spl_price}}
                                          <input type="hidden" value="{{$value->spl_price}}"
                                                 name="newPrice"/>
                                      @endif

                                  </span>
                                  <label>Quantity:</label>
                                    <input type="number" size="2" value="1" id="qty"
                                           autocomplete="off"
                                           style="text-align:center; max-width:50px;" MIN="1"
                                           MAX="30">
                                     <button class="btn btn-fefault cart" id="addToCart_default">
                                         <i class="fa fa-shopping-cart"></i>
                                         Add to cart
                                     </button>
                                      <button class="btn btn-fefault cart" id="addToCart">
                                          <i class="fa fa-shopping-cart"></i>
                                          Add to cart
                                      </button>
                                    <input type="hidden" value="<?php echo $value->id; ?>"
                                           id="proDum"/>
                              </span>
                                        <p><b>Availability:</b> <?php echo $value->stock; ?> In
                                            Stock</p>

                                        <?php $sizes = DB::table('products_properties')
                                            ->select('size')
                                            ->groupBy('size')
                                            ->where('pro_id', $value->id)->groupBy('size')->get();?>
                                        @if(count($sizes)!=0)
                                            <select name="size" id="size">
                                                <
                                                <option value="">Select Size to see color</option>
                                                @foreach ($sizes as $size)
                                                    <option>{{$size->size}}</option>
                                                @endforeach
                                            </select>
                                        @endif


                                    </form>


                                    <?php
                                    //wishlist Code start
                                    if(Auth::check()){
                                    $wishData = DB::table('wishlist')->leftJoin('products', 'wishlist.pro_id', '=', 'products.id')->where('wishlist.pro_id', '=', $value->id)->get();

                                    //if($wishData==""){ echo 'empty'; } else { echo 'filled';}
                                    $count = App\wishList::where(['pro_id' => $value->id])->count();
                                    ?>
                                    <?php if($count == "0"){?>
                                    <form action="{{url('/addToWishList')}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{$value->id}}" name="pro_id"/>
                                        <input type="submit" value="Add to WishList"
                                               class="btn btn-success"/>
                                    </form>
                                    <?php } else {?>
                                    <h5 style="color:green"> Added to <a
                                                href="{{url('/WishList')}}">wishList</a></h5>
                                    <?php }
                                    }?>


                                </div><!--/product-information-->

                            </div>
                        </div><!--/product-details-->

                        <div class="category-tab shop-details-tab"><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li><a href="#details" data-toggle="tab">Details</a></li>
                                    <li><a href="#companyprofile" data-toggle="tab">Company
                                            Profile</a></li>
                                    <li><a href="#tag" data-toggle="tab">Tag</a></li>
                                    <li class="active"><a href="#reviews" data-toggle="tab">Reviews
                                            (5)</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade" id="details">
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery1.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery2.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery3.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery4.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="companyprofile">
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery1.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery3.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery2.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery4.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tag">
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery1.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery2.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery3.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery4.jpg" alt=""/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button"
                                                            class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add
                                                        to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade active in" id="reviews">
                                    <div class="col-sm-12">
                                        <ul>
                                            <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a>
                                            </li>
                                            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC
                                                    2014</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.Duis aute irure dolor in reprehenderit
                                            in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur.</p>
                                        <p><b>Write Your Review</b></p>

                                        <form action="#">
                                    <span>
                                        <input type="text" placeholder="Your Name"/>
                                        <input type="email" placeholder="Email Address"/>
                                    </span>
                                            <textarea name=""></textarea>
                                            <b>Rating: </b> <img
                                                    src="images/product-details/rating.png" alt=""/>
                                            <button type="button"
                                                    class="btn btn-default pull-right">
                                                Submit
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div><!--/category-tab-->

                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">recommended items</h2>
                            @include('includes.recommends')
                        </div><!--/recommended_items-->

                    </div>

                @endforeach;
            </div>
        </div>
    </section>


@endsection