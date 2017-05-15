<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Http\Request as Request;
use DB;
use Storage;
use Input;

class AdminOrderPageController extends Controller
{


    public function checkOP(Request $request)
    {
        if ($request->session()->get('username')!=null) {
            $orders = DB::select('select * from orders');
            return view('admin/orderPage', ['orders' => $orders]);
        } else {
            return view('admin/login');
        }
    }


    public function checkOD(Request $request)
    {
        if ($request->session()->get('username') !=null) {

            $id=$request->input('id');

            $orders = DB::select("select products.Name as ProductName, orderdetail.*
               from orderdetail,products where orderdetail.ID={$id} and orderdetail.ProductID=products.ID");
            if(count($orders)==0){
                DB::table('orders')->where('ID', '=', $id)->delete();
                $orders = DB::select('select * from orders');
                return view('admin/orderPage', ['orders' => $orders]);
                 // <td>{{$order->ProductID}}</td>
            //             <td>{{$order->ProductName}}</td>
            //             <td>{{$order->Quantity}}</td>
            //             <td>{{$order->Price}}</td>
            //             <td>{{$order->Sum}}</td>
                
            } else{
                return view('admin/orderDetailPage',['orders' => $orders,'orderID'=>$id]);
            }

            
        } else {
            return view('admin/login');
        }
    }



    public function checkODD(Request $request){
        $id=$request->input('id');
        $idOrder=$request->input('idOrder');
        echo $idOrder;
        echo $id;

        if ($request->session()->get('username') !=null) {
            DB::table('orderdetail')->where('ID','=',$idOrder)->where('ProductID','=',$id) ->delete();
            $orders = DB::select("select * from orders");
            if(DB::table('orderdetail')->where('ID','=',$idOrder)->where('ProductID','=',$id)->count()==0){
               DB::table('orders')->where('ID', '=', $idOrder)->delete();
               return view('admin/orderPage', ['orders' => $orders]);
           } else {
            return view('admin/orderDetailPage', ['orders' => $orders]);
        }    

    } else {
        return view('admin/login');
    }
}


public function checkODA(Request $request){
    $products=DB::select('select *,name as ProductName from products');
    $idOrder=$request->input('idOrder');
    echo $idOrder;
    if ($request->session()->get('username') !=null) {

        return view('admin/orderDetailAdd',['idOrder'=>$idOrder,'products'=>$products]);

    } else {
        return view('admin/login');
    }
}

public function checkOA(Request $request){
    $categories=DB::select('select * from categories');
    if ($request->session()->get('username') !=null) {
        return view('admin/productAdd',['categories'=>$categories]);
    } else {
        return view('admin/login');
    }
}



public function checkODDl(Request $request)
{
    echo "fdfdfd";
    if ($request->session()->get('username') !=null) {
        echo 'fdfdfd';
        $id=$request->input('id');
        $idOrder=$request->input('idOrder');
        echo $id;
        echo $idOrder;

        DB::delete(" delete from orderdetail where ID = {$idOrder} and ProductID={$id}");

        $orders = DB::select("select * from orderdetail where ID={$idOrder} ");
        if(count($orders)==0){
            DB::table('orders')->where('ID', '=', $idOrder)->delete();
            $orders = DB::select('select * from orders');
            return view('admin/orderPage', ['orders' => $orders]);
        } else{

            $orders = DB::select("select *,products.Name as ProductName from orderdetail,products where orderdetail.ID={$idOrder} and orderdetail.ProductID=products.ID");

            return view('admin/orderDetailPage',['orders' => $orders,'orderID'=>$idOrder]);
        }


    } else {
        return view('admin/login');
    }
}

public function checkSODA(Request $request){

    $id = $request->input('id');
    $orderID = $request->input('idOrder');
    echo $id."<br>";
    echo $orderID;
    $number = $request->input('number');
    $price = DB::table('products')->where('ID','=' ,$request->input('id'))->first()->Price; 
    $sum = $price * $number;

    DB::table('orderdetail')->insert(
        ['ID' => $orderID, 
        'ProductID' => $id,
        'Quantity' => $number,
        'Price' => $price,
        'Sum'=>$sum
        ]
        );
    $orders = DB::select("select *,products.name as ProductName from orderdetail,products where orderdetail.ID={$orderID} and orderdetail.ProductID=products.ID");

    return view('admin/orderDetailPage',['orders' => $orders,'orderID'=>$orderID]);


}

public function checkODl(Request $request)
{
    if ($request->session()->get('username') !=null) {

        $id=$request->input('id');
        DB::table('orders')->where('ID', '=', $id)->delete();
        $orders = DB::select('select * from orders');
        return view('admin/orderPage', ['orders' => $orders]);      
    } else {
        return view('admin/login');
    }
}


}





