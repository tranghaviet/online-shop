@extends('layouts.base')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('includes.left_sidebar')
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{asset("/images/home/product2.JPG")}}"
                                     alt="{{$product->Describe}}" style="width: 300px; height: 300px">
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
                                            <td><h3 class="text-success">{{$product->Price}} Đ</h3>
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
                                    <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to
                                                    wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/product-details-->

                    <div class="recommended_items"><!--recommended_items-->
                    @include('includes.recommends')
                    </div><!--/recommended_items-->
                </div>
            </div>
        </div>
    </section>
@endsection
