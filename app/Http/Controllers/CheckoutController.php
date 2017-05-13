<?php

namespace App\Http\Controllers;

use App\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\address;
use App\orders;
use Illuminate\Support\Facades\DB;
use App\Products;

class CheckoutController extends Controller {

    public function index() {
        // check for user login
        if (Auth::check()) {
            $cartItems = Cart::content();
            foreach ($cartItems as $i) {
                $i->associate(new Products());
                Cart::setTax($i->rowId, 10); // set tax = 10%
            }
            return view('pages.checkout', compact('cartItems'));
        } else {
            return redirect('login');
        }
    }

    public function formvalidate(Request $request) {
        $this->validate($request, [
            'fullname' => 'required|min:2|max:35',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'city' => 'required|min:2|max:25',
            'state' => 'required|min:2|max:25',
            'massage' => 'max:250',
            'address' => 'required|min:3|max:60']);

        $userid = Auth::user()->id;
        $order = new Orders();

        $order->UserID = $userid;
        $order->Name = $request->fullname;
        $order->Phone = $request->phone;
        $order->Address = '"'.$request->address.', '.$request->state.', '.$request->city.'"';
        $order->Price = intval(str_replace(",", "", Cart::total()));
        $order->Note = $request->massage;
        $order->save();

        foreach (Cart::content() as $item) {
            $orderDetail = new Orderdetail();
            $orderDetail->ID = $order->id;
            $orderDetail->ProductID = $item->id;
            $orderDetail->Quantity = $item->qty;
            $orderDetail->Price = $item->price;
            $orderDetail->Sum = $item->total;
            $orderDetail->save();
        }

        Cart::destroy();
        return redirect('thankyou');
    }

}
