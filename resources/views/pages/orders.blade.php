@extends('layouts.master')

@section('content')
    @foreach($orders as $order)
    <section id="cart_items">
        <div class="container">
            <hr>

        <!-- {{--// form start here--}} -->
            <form class="form-horizontal" role="form">
                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                <div class="shopper-informations">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="shopper-info">
                                <p>Shopper Information</p>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Full name:</label>
                                    <div class="col-lg-9">
                                        {{--<input class="form-control" name="fullname" type="text" value="{{$order->Name}}" readonly>--}}
                                        <p>{{$order->Name}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Phone number:</label>
                                    <div class="col-lg-9">
                                        {{--<input class="form-control" name="phone" type="text" value="{{$order->Phone}}" readonly>--}}
                                        <p>{{$order->Phone}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Address:</label>
                                    <div class="col-lg-9">
                                        {{--<input class="form-control" name="address" type="text" value="{{$order->Address}}" readonly>--}}
                                        <p>{{$order->Address}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Order day:</label>
                                    <div class="col-lg-9">
{{--                                        <input class="form-control" name="address" type="text" value="{{$order->OrderDay}}" readonly>--}}
                                        <p>{{$order->OrderDay}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="shopper-info">
                                <p>Shipping Note</p>
                                <textarea name="message" style="height: 180px;" readonly>{{$order->Note}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <!-- {{--// form end here--}} -->

            <div class="review-payment">
                <h2>Product</h2>
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orderdetail as $row)
                        @if($row->ID == $order->ID)
                        <tr>
                            <td class="cart_product">
                                <a href="{{url('/product_details/'.$row->ID)}}">
                                    <img src="{{asset("/images/products/".$row->Picture)}}"
                                         alt="{{$row->Describe}}"
                                         style="width: 110px; height: 110px;"></a>
                            </td>
                            <td class="cart_description">
                                <h4>
                                    <a href="{{url('/product_details/'.$row->ID)}}">{{$row->Name}}</a>
                                </h4>
                                <p>Web ID: {{$row->ID}}</p>
                            </td>
                            <td class="cart_price">
                                <p>{{$row->Price}} Đ</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <input class="cart_quantity_input" type="text" name="quantity"
                                           value="{{$row->Quantity}}" autocomplete="off" size="2" readonly>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{{$row->Sum}} Đ</p>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                @if($order->Delivered == 1)
                                    <tr>
                                        <td> Delivered</td>
                                        <td class="text-success">
                                            <b>Yes</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Delivered Day</td>
                                        <td>{{$order->DeliveryDay}}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td> Delivered</td>
                                        <td class="text-danger">
                                            <b>No</b>
                                        </td>
                                    </tr>
                                @endif
                                <tr>
                                    <td>Total (include tax)</td>
                                    <td><span>{{$order->Price}} Đ</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->
    @endforeach
@endsection
