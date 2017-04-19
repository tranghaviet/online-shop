{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: HAVIETTRANG--}}
{{--* Date: 19-Apr-17--}}
{{--* Time: 2:15 PM--}}
{{--*/--}}
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Features Items</h2>
    @foreach($features_items as $fi)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="/product_details/{{$fi->Nickname}}">
                            <img src="{{asset("theme/images/products/$fi->Picture)}}"
                                 alt="{{$fi->Describe}}"/>
                        </a>
                        <a href="/product_details/{{$fi->Nickname}}">
                        <h2>{{$fi->Price}} Đ</h2>
                        </a>
                        <a href="/product_details/{{$fi->Nickname}}">
                        <p>{{$fi->ProductName}}</p>
                        </a>
                        <a href="#" class="btn btn-default add-to-cart"><i
                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to
                                wishlist</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to
                                compare</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div><!--features_items-->