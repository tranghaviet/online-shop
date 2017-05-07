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
                            <a href=""><img src="{{asset("/images/home/product2.JPG")}}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$row->name}}</a></h4>
                            <p>Web ID: {{$row->id}}</p>
                        </td>
                        <td class="cart_price">
                            <p>{{$row->price}}Đ</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>

                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$row->qty}}" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{$row->total}}Đ</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
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
