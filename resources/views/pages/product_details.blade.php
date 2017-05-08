@extends('layouts.base')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('includes.left_sidebar')
                </div>
                <div class="col-sm-9 padding-right">
                    @if(empty($product))
                        <div class="text-center">
                            <div class="logo-404">
                                <a href="./"><img src="{{asset('/images/home/logo.png')}}"
                                                 alt="Home"/></a>
                            </div>
                            <div class="content-404">
                                <img src="{{asset('/images/404/404.png')}}" class="img-responsive" style="width: 500px; height: 500px;"
                                     alt="Product not found"/>
                                <h1><b>OPPS!</b> We Couldn’t Find this Product</h1>
                                <p>Uh... So it looks like you brock something. The page you are
                                    looking for has up and Vanished.</p>
                                <h2><a href="../">Bring me back Home</a></h2>
                            </div>
                        </div>
                    @else
                        <div class="product-details"><!--product-details-->
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <img src="{{asset("/images/products/$product->Picture")}}"
                                         alt="{{$product->Describe}}"
                                         style="width: 300px; height: 300px">
                                </div>

                            </div>
                            <div class="col-sm-7"><!--product-information-->
                                <div class="product-information">
                                    <table class="table table-hover table-responsive">
                                        <tr>
                                            <th scope="row">Tên sản phẩm:</th>
                                            <td>{{$product->Name}}</td>
                                        </tr>
                                        @if($product->Promotion == 0)
                                            <tr>
                                                <th scope="row">Giá bán:</th>
                                                <td><h3 class="text-success">{{$product->Price}}
                                                        Đ</h3>
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <th scope="row">Giá bán:</th>
                                                <td><h3 class="text-danger"
                                                        style="text-decoration: line-through;">{{$product->Price}}
                                                        Đ</h3></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Giá khuyến mại:</th>
                                                <td><h3 class="text-success">{{$product->Promotion}}
                                                        Đ</h3></td>
                                            </tr>
                                        @endif
                                    </table>
                                    <div class="col-sm-6">
                                        <form action="{{ url('/cart') }}" method="POST" id="add-to-cart-form-{{$product->ID}}">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="id" value="{{ $product->ID }}">
                                            <input type="hidden" name="name" value="{{ $product->Name }}">
                                            <input type="hidden" name="price" value="{{ $product->Price }}">
                                        </form>
                                        <button type="submit" form="add-to-cart-form-{{$product->ID}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="choose">
                                            <ul class="nav nav-pills nav-justified">
                                                <li><a href="#"><i class="fa fa-plus-square"></i>Add
                                                        to
                                                        wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--/product-details-->
                    @endif

                    <div class="recommended_items"><!--recommended_items-->
                        @include('includes.recommends')
                    </div><!--/recommended_items-->
                </div>
            </div>
        </div>
    </section>
@endsection
