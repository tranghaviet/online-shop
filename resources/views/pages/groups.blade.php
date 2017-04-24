@extends('layouts.master')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('includes.left_sidebar')
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">{{$group[0]->group_name}}</h2>
                        @foreach($group as $g)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="{{url('/product_details/'.$g->ID)}}">
                                                {{--                            <img src="{{asset("/images/products/$g->Picture")}}" alt="{{$g->Describe}}">--}}
                                                <img src="{{asset("/images/home/product2.JPG")}}"
                                                     alt="{{$g->Describe}}">
                                            </a>
                                            <a href="{{url('/product_details/'.$g->ID)}}">
                                                <h2>{{$g->Price}} Đ</h2>
                                            </a>
                                            <a href="{{url('/product_details/'.$g->ID)}}">
                                                <p>{{$g->Name}}</p>
                                            </a>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to
                                                    wishlist</a></li>
                                            {{--<li><a href="#"><i class="fa fa-plus-square"></i>Add to--}}
                                            {{--compare</a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div><!--features_items-->
                    <div class="text-center"> {{ $group->links() }} </div>
                </div>
            </div>
        </div>
    </section>
@endsection
