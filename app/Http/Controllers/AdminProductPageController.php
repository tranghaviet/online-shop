<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request as Request;
use DB;
use Storage;
use Input;

class AdminProductPageController extends Controller
{
    public function checkPP(Request $request)
    {
        if ($request->session()->get('username')!=null) {
            // $products = DB::select('select * from products, categories
            //     WHERE products.categoryid=categories.ID
            //     ORDER by products.ID');
            $products = DB::table('products')
            ->join('categories', 'products.categoryid', '=', 'categories.ID')->orderBy('products.ID')->select('products.ID','products.Name as ProductName','Describe','categories.Name as Name','Price','Picture','UpdateDay','Ceasefire')->paginate(5);
            //
            
            return view('admin/productPage', ['products' => $products]);

        } else {
            return view('admin/login');
        }
    }

    

    public function checkSPE(Request $request)//submit customer edit
    {
        $id = $request->input('id');
        $description = $request->input('description');
        $name = $request->input('name');
        $price = $request->input('price');
        $category = $request->input('category');
        $date = $request->input('date');
        $available = $request->input('available');
        

        echo $id;
        echo $description;
        echo $name;
        echo $price;
        echo $category;
        echo $date;
        echo $available;


        if ($request->session()->get('username') !=null) {

           DB::update("update products set
            Name= '{$name}',
            categoryid='{$category}',
            Price='{$price}',
            UpdateDay='{$date}',
            Ceasefire='{$available}'
            WHERE products.ID='{$id}'
            ");


           DB::table('products')
           ->where('id',$id)
           ->update(['Describe' => $description] );




           $products = DB::table('products')
           ->join('categories', 'products.categoryid', '=', 'categories.ID')->orderBy('products.ID')->select('products.ID','products.Name as ProductName','Describe','Price','Picture','categories.Name','UpdateDay','Ceasefire')->paginate(5);

           return view('admin/productPage', ['products' => $products]);


       } else {
        return view('admin/login');
    }
}


    public function checkPE(Request $request)//vao trang sua san pham
    {
        $id = $request->input('id');

        if ($request->session()->get('username') !=null) {
            $products = DB::select("select *,Name as ProductName from products WHERE ID={$id}");
            $categories = DB::select("select ID,Name from categories");
            foreach ($products as $product) {
               return view('admin/ProductEdit', ['product' => $product], ['categories' => $categories]);
           }
       } else {
        return view('admin/login');
    }
}


    public function checkPD(Request $request){//Product Delete
        if ($request->session()->get('username') !=null) {
            DB::table('products')->where('ID','=',$request->input('id'))->delete();
            $products = DB::table('products')
            ->join('categories', 'products.categoryid', '=', 'categories.ID')->orderBy('products.ID')->select('products.ID','products.Name as ProductName','Describe','Price','Picture','categories.Name','UpdateDay','Ceasefire')->paginate(5);
            
            return view('admin/productPage', ['products' => $products]);
        } else {
            return view('admin/login');
        }
    }


    public function checkPA(Request $request){
        $categories=DB::select('select * from categories');
        if ($request->session()->get('username') !=null) {
            return view('admin/productAdd',['categories'=>$categories]);
        } else {
            return view('admin/login');
        }
    }

    public function checkSPA(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $description = $request->input('description');        
        $price = $request->input('price');
        $category = $request->input('category');
        $date = $request->input('date');
        $available = $request->input('available');
        $category = $request->input('category');
        $file = $request->file('photo');

        echo url('/images/products');
        
        





        if ($request->session()->get('username') !=null) {
            DB::table('products')->insert(
                [
                'Name' => $name,
                'Describe' => $description,
                'UpdateDay' => $date,
                'Price' => $price,
                'categoryid' => $category,
                'Picture' => $file->getClientOriginalName(),
                'Ceasefire' => $available,
                ]);

            if($file!=null){

                $destinationPath =  public_path().'/images/products'; 

                $file->move($destinationPath,$file->getClientOriginalName());
                $photo = $file->getClientOriginalName();
                DB::table('products')->where('Name',$name)->
                update(['Picture' => $file->getClientOriginalName()]);
            }


            return view('admin/directToPP');
          
            
        } else {
            return view('admin/login');
        }
    }



}