<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\address;
use App\orders;

class CheckoutController extends Controller {

    public function index() {
        // check for user login
        if (Auth::check()) {
            $cartItems = Cart::content();
            return view('pages.checkout', compact('cartItems'));
        } else {
            return redirect('login');
        }
    }

    public function formvalidate(Request $request) {
        $this->validate($request, [
            'fullname' => 'required|min:2|max:35',
            'phone' => 'required|numeric|min:9|max:11',
            'city' => 'required|min:2|max:25',
            'state' => 'required|min:2|max:25',
            'address' => 'required|min:3|max:60']);

        $userid = Auth::user()->id;

        $address = new address;
        $address->fullname = $request->fullname;
        $address->state = $request->state;
        $address->city = $request->city;
        $address->country = $request->country;

        $address->user_id = $userid;
        $address->phone = $request->phone;
        $address->payment_type = $request->pay;
        $address->save();


        orders::createOrder();

        Cart::destroy();
        return redirect('thankyou');
    }

}
