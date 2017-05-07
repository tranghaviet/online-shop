<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#men-clothes" data-toggle="tab">Quần áo Nam</a></li>
            <li><a href="#women-clothes" data-toggle="tab">Quần áo Nữ</a></li>
            <li><a href="#fashion_accessories" data-toggle="tab">Phụ kiện</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="men-clothes">
            @foreach($men_clothes as $mc)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{url('/product_details/'.$mc->ID)}}">
                                    <img src="{{asset("/images/home/gallery2.jpg")}}"
                                         alt="{{$mc->Describe}}">
                                </a>
                                <a href="{{url('/product_details/'.$mc->ID)}}">
                                    <h2>{{$mc->Price}} Đ</h2>
                                </a>
                                <a href="{{url('/product_details/'.$mc->ID)}}">
                                    <p>{{$mc->Name}}</p>
                                </a>
                                {{--<a href="#" class="btn btn-default add-to-cart"><i--}}
                                            {{--class="fa fa-shopping-cart"></i>Add to--}}
                                    {{--cart</a>--}}
                                <form action="{{ url('/cart') }}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="id" value="{{ $mc->ID }}">
                                    <input type="hidden" name="name" value="{{ $mc->Name }}">
                                    <input type="hidden" name="price" value="{{ $mc->Price }}">
                                    <input type="submit" class="btn btn-default add-to-cart" value="Add to Cart">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="tab-pane fade" id="women-clothes">
            @foreach($women_clothes as $wc)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{url('/product_details/'.$wc->ID)}}">
                                    <img src="{{asset("/images/home/gallery3.jpg")}}"
                                         alt="{{$wc->Describe}}"/>
                                </a>
                                <a href="{{url('/product_details/'.$wc->ID)}}">
                                    <h2>{{$wc->Price}} Đ</h2>
                                </a>
                                <a href="{{url('/product_details/'.$wc->ID)}}">
                                    <p>{{$wc->Name}}</p>
                                </a>
                                <form action="{{ url('/cart') }}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="id" value="{{ $wc->ID }}">
                                    <input type="hidden" name="name" value="{{ $wc->Name }}">
                                    <input type="hidden" name="price" value="{{ $wc->Price }}">
                                    <input type="submit" class="btn btn-default add-to-cart" value="Add to Cart">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="tab-pane fade" id="fashion_accessories">
            @foreach($fashion_accessories as $fa)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{url('/product_details/'.$fa->ID)}}">
                                    <img src="{{asset("/images/home/gallery4.jpg")}}"
                                         alt="{{$fa->Describe}}"/>
                                </a>
                                <a href="{{url('/product_details/'.$fa->ID)}}">
                                    <h2>{{$fa->Price}} Đ</h2>
                                </a>
                                <a href="{{url('/product_details/'.$fa->ID)}}">
                                    <p>{{$fa->Name}}</p>
                                </a>
                                <form action="{{ url('/cart') }}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="id" value="{{ $fa->ID }}">
                                    <input type="hidden" name="name" value="{{ $fa->Name }}">
                                    <input type="hidden" name="price" value="{{ $fa->Price }}">
                                    <input type="submit" class="btn btn-default add-to-cart" value="Add to Cart">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div><!--/category-tab-->