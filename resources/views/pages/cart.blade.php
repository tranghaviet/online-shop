@extends('layouts.master')

@section('content')
    <section>
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="./">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(Cart::content() as $row)
                    <tr>
                        <td class="cart_product">
                            <a href="{{url('/product_details/'.$row->id)}}"><img src="{{asset("/images/home/product2.JPG")}}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="{{url('/product_details/'.$row->id)}}">{{$row->name}}</a></h4>
                            <p>Web ID: {{$row->id}}</p>
                            <form action="{{ url('/cart/remove') }}" method="POST">
                                {!! csrf_field() !!}
                                <input type="hidden" name="rowId" value="{{ $row->rowId }}">
                                <input type="submit" class="danger" value=" Remove ">
                            </form>
                        </td>
                        <td class="cart_price">
                            <p>{{$row->price}}Đ</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{ url('/cart/update') }}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="rowId" value="{{ $row->rowId }}">
                                    <input type="hidden" name="qty" value="{{ $row->qty + 1 }}">
                                    <input type="submit" class="cart_quantity_up" value=" + ">
                                </form>
                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$row->qty}}" autocomplete="off" size="2">
                                <form action="{{ url('/cart/update') }}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="rowId" value="{{ $row->rowId }}">
                                    <input type="hidden" name="qty" value="{{ $row->qty - 1}}">
                                    <input type="submit" class="cart_quantity_down" value=" - ">
                                </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{$row->total}}Đ</p>
                        </td>
                        <td class="cart_delete">
                            <form class="cart_quantity_delete" action="{{ url('/cart/remove') }}" method="POST">
                                {!! csrf_field() !!}
                                <input type="hidden" name="rowId" value="{{ $row->rowId }}">
                                <input type="submit" class="danger" value=" X ">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td class="table-image"></td>
                        <td></td>
                        <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
                        <td>${{ Cart::instance('default')->subtotal() }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <div style="float:right">
                    <form action="{{ url('/emptyCart') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
