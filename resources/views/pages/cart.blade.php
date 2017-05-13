@extends('layouts.master')

@section('content')
    <section id="cart_items">
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
                            <a href="{{url('/product_details/'.$row->id)}}">
                                <img src="{{asset("/images/products/".$row->model->Picture)}}"
                                     alt="{{$row->model->Description}}" style="width: 110px; height: 110px;"></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="{{url('/product_details/'.$row->id)}}">{{$row->name}}</a></h4>
                            <p>Web ID: {{$row->id}}</p>
                            <form action="{{ url('/cart/remove') }}" method="POST">
                                {!! csrf_field() !!}
                                <input type="hidden" name="rowId" value="{{ $row->rowId }}">
                                <input type="submit" class="btn btn-danger" value=" Remove ">
                            </form>
                        </td>
                        <td class="cart_price">
                            <p>{{$row->price}} Đ</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{ url('/cart/update') }}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="rowId" value="{{ $row->rowId }}">
                                    <input type="hidden" name="qty" value="{{ $row->qty + 1 }}">
                                    <input type="submit" class="btn btn-success" value=" + ">
                                </form>
                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$row->qty}}" autocomplete="off" size="2">
                                <form action="{{ url('/cart/update') }}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="rowId" value="{{ $row->rowId }}">
                                    <input type="hidden" name="qty" value="{{ $row->qty - 1}}">
                                    <input type="submit" class="btn btn-info" value=" - ">
                                </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{$row->total}} Đ</p>
                        </td>
                        <td class="cart_delete">
                            <form class="cart_quantity_delete" action="{{ url('/cart/remove') }}" method="POST">
                                {!! csrf_field() !!}
                                <input type="hidden" name="rowId" value="{{ $row->rowId }}">
                                <input type="submit" class="btn btn-warning" value=" X ">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Cart Sub Total</td>
                                    <td>{{Cart::subtotal()}} Đ</td>
                                </tr>
                                <tr>
                                    <td> Tax</td>
                                    <td>{{Cart::tax()}} Đ</td>
                                </tr>
                                <tr class="shipping-cost">
                                    <td>Shipping Cost</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td><span>{{Cart::total()}} Đ</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <div style="float:right">
                    <form action="{{ url('/emptyCart') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
                    </form>
                </div>
                <div style="float: right; margin-right: 20px;">
                    <button href="{{url('/checkout')}}" class="btn btn-success btn-lg">Check out</button>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection
