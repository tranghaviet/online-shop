<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Groups;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\User;
use App\Products;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller {

    public function __construct() {
        //        $this->middleware('auth');
        return view('pages.home');
    }

    public function index() {
        $latest_products = Products::latest_products();
        $men_clothes = Products::men_clothes();
        $women_clothes = Products::women_clothes();
        $fashion_accessories = Products::fashion_accessories();
        $recommended_items = Products::recommended_items();
        //        $categories = Categories::all();
        //        $groups = Groups::all();
        $products_in_groups = Products::products_in_groups();

        $data = array('features_items' => $latest_products,
            'men_clothes' => $men_clothes,
            'women_clothes' => $women_clothes,
            'fashion_accessories' => $fashion_accessories,
            'recommended_items' => $recommended_items,
            //            'categories' => $categories,
            //            'groups' => $groups,
            'products_in_groups' => $products_in_groups);
        return view('pages.home')->with($data);

        //                return view('errors.test')->with($data);
    }

    public function product_details($id) {

        //view product details
        $product = Products::find($id);
        $products_in_groups = Products::products_in_groups();
        $recommended_items = Products::recommended_items();

        $data = array('product' => $product,
            'recommended_items' => $recommended_items,
            'products_in_groups' => $products_in_groups);
        //        return view('errors.test', compact($data));
        return view('pages.product_details')->with($data);
    }

    public function group_items($nickname) {
        if (empty(Groups::where('Nickname', $nickname)->first())) {
            return view('errors.404');
        }

        $group = DB::table('products as p')
            ->select('p.ID', 'p.Name', 'p.Describe', 'p.Price', 'p.Picture', 'g.Name as group_name')
            ->join('categories as c', 'p.categoryID', '=', 'c.ID')
            ->join('groups as g', 'g.ID', '=', 'c.GroupID')
            ->where('g.Nickname', $nickname)
            ->paginate(12);

        $data = ['features_items' => $group];
        return view('pages.groups')->with($data);
    }

    public function category($nickname) {
        if (empty(Categories::where('Nickname', $nickname)->first())) {
            return view('errors.404');
        }
        $category = DB::table('products as p')
            ->select('p.ID', 'p.Name', 'p.Describe', 'p.Price', 'p.Picture', 'c.Name as group_name')
            ->join('categories as c', 'p.categoryID', '=', 'c.ID')
            ->where('c.Nickname', $nickname)
            ->paginate(12);

        $data = ['features_items' => $category];
        return view('pages.groups')->with($data);
    }



}
