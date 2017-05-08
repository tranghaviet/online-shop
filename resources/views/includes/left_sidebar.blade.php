<div class="left-sidebar">
    <div class="brands_products"><!--brands_products-->
        <h2>Groups Products</h2>
        <div class="brands-name">
            {{--<ul class="nav nav-pills nav-stacked">--}}
                {{--@for ($i = 0; $i < count($groups); $i++)--}}
                    {{--<li><a href="{{url('/groups/'.$groups[$i]->Nickname)}}"><span--}}
                                    {{--class="pull-right">{{$products_in_groups[$i]->quantity}}</span>{{$groups[$i]->Name}}--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--@endfor--}}
            {{--</ul>--}}
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{url('/groups/quan-ao-nu')}}">
{{--                        <span class="pull-right">{{$products_in_groups[0]->quantity}}</span>--}}
                        Quần áo nữ
                    </a>
                </li>
                <li><a href="{{url('/groups/quan-ao-nam')}}">
                        {{--<span class="pull-right">{{$products_in_groups[1]->quantity}}</span>--}}
                        Quần áo nam
                    </a>
                </li>
                <li><a href="{{url('/groups/phu-kien-thoi-trang')}}">
{{--                        <span class="pull-right">{{$products_in_groups[2]->quantity}}</span>--}}
                        Phụ kiện
                    </a>
                </li>
            </ul>
        </div>
    </div><!--/brands_products-->

    <h2>Category</h2>
    {{--<div class="panel-group category-products" id="accordian">--}}
        {{--@foreach($categories as $category)--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">--}}
                    {{--<h4 class="panel-title"><a href="{{url('/products/'.$category->Nickname)}}">--}}
                            {{--{{$category->Name}}</a></h4>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--</div><!--/category-products-->--}}
    <div class="panel-group category-products" id="accordian">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/Ao-so-mi-nu')}}">
                        Áo sơ mi nữ</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/ao-so-mi-nam')}}">
                        Áo sơ mi nam</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/ao-khoac-nu')}}">
                        Áo khoác nữ</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/ao-khoac-nam')}}">
                        Áo khoác nam</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/ao-thun-nam')}}">
                        Áo thun nam</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/ao-thun-nau')}}">
                        Áo thun nữ</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/quan-jean-nu')}}">
                        Quần jean nữ</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/quan-jean-nam')}}">
                        Quần jean nam</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/quan-tay-nam')}}">
                        Quần tây nam</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/quan-tay-nu')}}">
                        Quần tây nữ</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/quan-kaki-nu')}}">
                        Quần kaki nữ</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/vay-dam')}}">
                        Váy - Đầm</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/quan-dui-short-nu')}}">
                        Quần đùi, short nữ</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/quan-dui-short-nam')}}">
                        Quần đùi, short nam</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/quan-kaki-nam')}}">
                        Quần kaki nam</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/Do-ngu-nam')}}">
                        Đồ ngủ nam</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/mat-kinh')}}">
                        Mắt kính</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/kep-toc-bang-do')}}">
                        Kẹp tóc, băng đô</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/non-day-nit')}}">
                        Nón, dây nịt</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/tui-xach')}}">
                        Túi xách</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{url('/products/giay-dep')}}">
                        Giầy dép</a></h4>
            </div>
        </div>
    </div>

    <div class="price-range"><!--price-range-->

        <div class="well">
            <h2>Price Range</h2>
            <div id="slider-range"></div>
            <br>
            <b class="pull-left">$
                <input size="2" type="text" id="amount_start" name="start_price"
                       value="15"
                       style="border:0px; font-weight: bold; color:green"
                       readonly="readonly"/></b>

            <b class="pull-right">$
                <input size="2" type="text" id="amount_end" name="end_price"
                       value="65"
                       style="border:0px; font-weight: bold; color:green"
                       readonly="readonly"/></b>
        </div>

    </div><!--/price-range-->

    <div class="shipping text-center"><!--shipping-->
        <img src="{{asset('/images/home/shipping.jpg')}}" alt=""/>
    </div><!--/shipping-->

</div>