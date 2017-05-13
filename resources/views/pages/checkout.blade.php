@extends('layouts.master')

@section('content')

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{url('./')}}">Home</a></li>
                    <li class="active">Check out</li>
                </ol>
            </div><!--/breadcrums-->

            <div class="step-one">
                <h2 class="heading">Step1</h2>
            </div>


            <!-- {{--// form start here--}} -->
            <form action="{{url('/')}}/formvalidate" method="POST" id="checkout">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="shopper-informations">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="shopper-info">
                                <p>Shopper Information</p>

                                <input type="text" name="fullname" placeholder="Họ tên"
                                       class="form-control" value="{{ old('fullname') }}">

                                <hr>
                                <input type="text" placeholder="Số điện thoại" name="phone"
                                       class="form-control" value="{{ old('phone') }}">

                                <span style="color:red">{{ $errors->first('phone') }}</span>

                                <span style="color:red">{{ $errors->first('fullname') }}</span>
                                <hr>
                                <input type="text"
                                       placeholder="Địa chỉ(số tầng, số nhà, đường, xã/phường) - vui lòng nhập CHÍNH XÁC"
                                       name="address"
                                       class="form-control" value="{{ old('address') }}">

                                <span style="color:red">{{ $errors->first('city') }}</span>
                                <hr>

                                <input type="text" placeholder="Quận/Huyện" name="state"
                                       class="form-control" value="{{ old('state') }}">

                                <span style="color:red">{{ $errors->first('state') }}</span>

                                <hr>
                                <input type="text" placeholder="Thành Phố" name="city"
                                       class="form-control" value="{{ old('city') }}">

                                <span style="color:red">{{ $errors->first('city') }}</span>


                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="order-message">
                                <p>Shipping Order</p>
                                <textarea form="checkout" name="message"
                                          placeholder="Notes about your order, Special Notes for Delivery"
                                          rows="16"></textarea>
                                <span style="color:red">{{ $errors->first('massage') }}</span>
                                {{--<label><input type="checkbox"> Shipping to bill address</label>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </form>

                <!-- {{--// form end here--}} -->

                <div class="review-payment">
                    <h2>Review & Payment</h2>
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
                                         alt="{{$row->model->Description}}"
                                         style="width: 110px; height: 110px;"></a>
                            </td>
                            <td class="cart_description">
                                <h4>
                                    <a href="{{url('/product_details/'.$row->id)}}">{{$row->name}}</a>
                                </h4>
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
                                    <input class="cart_quantity_input" type="text" name="quantity"
                                           value="{{$row->qty}}" autocomplete="off" size="2">
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
                                <form class="cart_quantity_delete"
                                      action="{{ url('/cart/remove') }}" method="POST">
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
            <div class="payment-options">
            <span>
            <button type="submit" form="checkout" class="btn btn-primary">Xác nhận</button>
            </span>
            </div>
        </div>

    </section>

    </section> <!--/#cart_items-->
@endsection
