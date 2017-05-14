<?php
/**
 * Created by PhpStorm.
 * User: HAVIETTRANG
 * Date: 09-May-17
 * Time: 4:12 PM
 */

namespace App\Http\Controllers;


use App\Wishlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller {

    public function index() {
        $products = DB::table('products as p')
            ->select('p.ID', 'p.Name', 'p.Describe', 'p.Price', 'p.Picture')
            ->join('wishlists as w', 'w.ProductId', '=', 'p.ID')
            ->where('w.UserID', '=', Auth::user()->id)
            ->paginate(12);
        $data = ['features_items' => $products];
        return view('pages.wishlist')->with($data);
    }

    public function addItem(Request $request) {
        if(!DB::table('wishlists')
            ->where([['UserId', '=', Auth::user()->id], ['ProductId', '=', $request->id]])
            ->exists()) {
            $wishlist = new Wishlists();
            $wishlist->UserId = Auth::user()->id;
            $wishlist->ProductId = $request->id;
            $wishlist->save();
        }

        return redirect('/wishlist');
    }
    public function removeItem(Request $request) {
        DB::table('wishlist')->where([['UserId', '=', Auth::user()->id], ['ProductId', '=', $request->id]])->delete();

        return redirect('/wishlist');
    }
}