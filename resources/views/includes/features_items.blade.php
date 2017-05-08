{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: HAVIETTRANG--}}
{{--* Date: 19-Apr-17--}}
{{--* Time: 2:15 PM--}}
{{--*/--}}
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Sản Phẩm</h2>
    @foreach($features_items as $fi)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="{{url('/product_details/'.$fi->ID)}}">
                            <img src="{{asset("/images/products/$fi->Picture")}}" alt="{{$fi->Describe}}" style="width:255px;height:324px">
                        </a>
                        <a href="{{url('/product_details/'.$fi->ID)}}">
                            <h2>{{$fi->Price}} Đ</h2>
                        </a>
                        <a href="{{url('/product_details/'.$fi->ID)}}">
                            <p>{{$fi->Name}}</p>
                        </a>
                        {{--<a href="#" class="btn btn-default add-to-cart"><i--}}
                                    {{--class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        <form action="{{ url('/cart') }}" method="POST" id="add-to-cart-form-{{$fi->ID}}">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{ $fi->ID }}">
                            <input type="hidden" name="name" value="{{ $fi->Name }}">
                            <input type="hidden" name="price" value="{{ $fi->Price }}">
                        </form>
                        <button type="submit" form="add-to-cart-form-{{$fi->ID}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to
                                wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div><!--features_items-->