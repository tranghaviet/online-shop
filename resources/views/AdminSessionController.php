<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Http\Request as Request;
use DB;
use Storage;
use Input;

class AdminSessionController extends Controller
{
    public $username;
    public function accessSessionData(Request $request)
    {
        if ($request->session()->has('username')) {
            echo $request->session()->get('username');

        } else {
            echo 'No data session';
        }
    }

    public function storeSessionData(Request $request)
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $pass=md5($password);
        $user = DB::table('admin')->where('username', $username)->first();   
        if ($user!=null&&$pass==$user->password) {
            $request->session()->put('username', $_POST['username']);
            return view('admin/page');
        } else {
            echo "Tài khoản hoặc mật khẩu không đúng";
            return redirect()->back();
            
        }
        echo "fdfdfd";
    }

    public function deleteSessionData(Request $request)
    {
        if ($request->session()->has('username')) {
            $request->session()->forget('username');
            return view('admin/login');
        }

        return view('admin/dashboard');
    }

    public function checkMP(Request $request)
    {

        if ($request->session()->get('username')!=null) {

            $customers = DB::select('select * from users');

            return view('admin/memberPage', ['customers' => $customers]);

        } else {
            return view('admin/login');
        }
    }

    public function checkPP(Request $request)
    {
        if ($request->session()->get('username')!=null) {
            // $products = DB::select('select * from products, categories
            //     WHERE products.categoryid=categories.ID
            //     ORDER by products.ID');
            $products = DB::table('products')
            ->join('categories', 'products.categoryid', '=', 'categories.ID')->orderBy('products.ID')->select('products.ID','ProductName','Describe','Price','Picture','Name','UpdateDay','Ceasefire')->paginate(5);
            
            return view('admin/productPage', ['products' => $products]);

        } else {
            return view('admin/login');
        }
    }

    public function checkOP(Request $request)
    {
        if ($request->session()->get('username')!=null) {
            $orders = DB::select('select * from orders');
            return view('admin/orderPage', ['orders' => $orders]);
        } else {
            return view('admin/login');
        }
    }

    public function checkAP(Request $request)
    {
        if ($request->session()->get('username') !=null) {

            return view('admin/articlePage');
        } else {
            return view('admin/login');
        }
    }

    public function checkOD(Request $request)
    {
        if ($request->session()->get('username') !=null) {

            $id=$request->input('id');

            $orders = DB::select("select * from orderdetail,products where orderdetail.ID={$id} and orderdetail.ProductID=products.ID");
            if(count($orders)==0){
                DB::table('orders')->where('ID', '=', $id)->delete();
                $orders = DB::select('select * from orders');
                return view('admin/orderPage', ['orders' => $orders]);
                
            } else{
                return view('admin/orderDetailPage',['orders' => $orders]);
            }

            
        } else {
            return view('admin/login');
        }
    }



    public function checkCE(Request $request)//customer edit
    {
        $id = $request->input('id');
        if ($request->session()->get('username') !=null) {
            $customers = DB::select("select * from users WHERE ID={$id}");
            foreach ($customers as $customer) {
                return view('admin/CustomerEdit', ['customer' => $customer]);
            }


        } else {
            return view('admin/login');
        }
    }

    public function checkSCE(Request $request)//submit customer edit
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $gender = $request->input('sex');
        $birthday = $request->input('birthday');
        $email = $request->input('email');
        $note = $request->input('note');


        if ($request->session()->get('username') !=null) {
            if ($gender == "Nam") {
                DB::update("update users set
                    Name= '{$name}',
                    Address='{$address}',
                    Phone='{$phone}',
                    Email='{$email}',
                    Gender=1,
                    Birthday='{$birthday}',
                    Note='{$note}'
                    WHERE ID={$id}
                    ");
            } else {
                DB::update("update users set
                    Name= '{$name}',
                    Address='{$address}',
                    Phone='{$phone}',
                    Email='{$email}',
                    Gender=2,
                    Birthday='{$birthday}',
                    Note='{$note}'
                    WHERE ID={$id}
                    ");
            }

            $customers = DB::select('select * from users');

            return view('admin/memberPage', ['customers' => $customers]);


        } else {
            return view('admin/login');
        }
    }

    public function checkSCA(Request $request)//submit customer edit
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $gender = $request->input('sex');
        $birthday = $request->input('birthday');
        $email = $request->input('email');
        $note = $request->input('note');
        $username = $request->input('username');
        $password = md5($request->input('password'));

        if($name==null||$phone==null||$email==null||$birthday==null){
            return view('admin/customerAdd');
        }

        $user = DB::table('users')->where('Username', $username)->first();
        if($user==null){
            if ($request->session()->get('username') !=null) {
                if ($gender == "Nam") {
                    DB::table('users')->insert(
                        ['Name' => $name, 
                        'Address' => $address,
                        'Phone' => $phone,
                        'Email' => $email,
                        'Note'=>$note,
                        'Gender'=>1,
                        'Birthday' => $birthday,
                        'Username'=>$username,
                        'Password'=>$password
                        ]
                        );
                } else {
                    DB::table('users')->insert(
                        ['Name' => $name, 
                        'Address' => $address,
                        'Phone' => $phone,
                        'Email' => $email,
                        'Note'=>$note,
                        'Gender'=>2,
                        'Birthday' => $birthday,
                        'Username'=>$username,
                        'Password'=>$password
                        ]
                        );
                }

                $customers = DB::select('select * from users');

                return view('admin/memberPage', ['customers' => $customers]);


            } else {
                return view('admin/login');
            }
        } else {
            echo "Tên trùng";
            return view('admin/customerAdd');
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
            ProductName= '{$name}',
            categoryid='{$category}',
            Price='{$price}',
            UpdateDay='{$date}',
            Ceasefire='{$available}'
            WHERE products.ID={$id}
            ");


           DB::table('products')
           ->where('id',$id)
           ->update(['Describe' => $description] );
         // Describe='{$description}',



           $products = DB::table('products')
           ->join('categories', 'products.categoryid', '=', 'categories.ID')->orderBy('products.ID')->select('products.ID','ProductName','Describe','Price','Picture','Name','UpdateDay','Ceasefire')->paginate(5);

           return view('admin/productPage', ['products' => $products]);


       } else {
        return view('admin/login');
    }
}

public function checkLogin(Request $request)
{
    if ($request->session()->has('username')) {
        return view('admin.page');
    } else {
        return view('admin/login');
    }
}

public function memberBackPage(Request $request)
{
    if ($request) {
        if ($request->session()->has('username') && $request->session()->get('username') !=null) {
            $request->session()->flash('status', 'Task was successful!');
            return view('admin/page');
        } else {
            $request->session()->flash('status', 'Task was successful!');
            return redirect()->route('dashboard');


        }
    }

}

public function adminPage(Request $request)
{
    if ($request) {
        if ($request->session()->has('username') && $request->session()->get('username') !=null) {
            $request->session()->flash('status', 'Task was successful!');
            return view('admin/page');
        } else {
            $request->session()->flash('status', 'Task was successful!');
            return redirect()->route('dashboard')->with('status', 'fdfdfdf');


        }
    }
}

    public function checkPE(Request $request)//vao trang sua san pham
    {
        $id = $request->input('id');

        if ($request->session()->get('username') !=null) {
            $products = DB::select("select * from products WHERE ID={$id}");
            $categories = DB::select("select ID,Name from categories");
            echo 'fdfdfdf';
            foreach ($products as $product) {
                echo "fdfdfdffffffffff";
                return view('admin/ProductEdit', ['product' => $product], ['categories' => $categories]);
            }
        } else {
            return view('admin/login');
        }
    }

    public function checkCA(Request $request){
        if ($request->session()->get('username') !=null) {
            return view('admin/customerAdd');
        } else {
            return view('admin/login');
        }
    }
    public function checkCD(Request $request){//CustomerDelete
        if ($request->session()->get('username') !=null) {
            DB::table('users')->where('ID','=',$request->input('id'))->delete();
            $customers = DB::select('select * from users');

            return view('admin/memberPage', ['customers' => $customers]);
        } else {
            return view('admin/login');
        }
    }
    public function checkPD(Request $request){//Product Delete
        if ($request->session()->get('username') !=null) {
            DB::table('products')->where('ID','=',$request->input('id'))->delete();
            //     ORDER by products.ID');
            $products = DB::table('products')
            ->join('categories', 'products.categoryid', '=', 'categories.ID')->orderBy('products.ID')->select('products.ID','ProductName','Describe','Price','Picture','Name','UpdateDay','Ceasefire')->paginate(5);
            
            return view('admin/productPage', ['products' => $products]);
        } else {
            return view('admin/login');
        }
    }

    public function checkODD(Request $request){//Product Delete
        $id=$request->input('id');
        if ($request->session()->get('username') !=null) {
            DB::table('dathangct')->where('ID','=',$request->input('id'))->delete();
            $orders = DB::select("select * from dathangct,products where DatHangID={$id} and dathangct.ID=products.ID");
            if(DB::select("select * from dathangct,products where DatHangID={$id} and dathangct.ID=products.ID")->count()==0){
                DB::table('dathangid')->where('DatHangID', '=', $id)->delete();
            } else {
                return view('admin/orderDetailPage', ['orders' => $orders]);
            }    
            
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

    public function checkODA(Request $request){
        $products=DB::select('select * from products');
        $idOrder=$request->input('idOrder');
        echo $idOrder;
        if ($request->session()->get('username') !=null) {

            return view('admin/orderDetailAdd',['idOrder'=>$idOrder,'products'=>$products]);

        } else {
            return view('admin/login');
        }
    }

    public function checkOA(Request $request){
        $categories=DB::select('select * from categoryid');
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

        $destinationPath = 'C:\xampp\htdocs\laradmin\resources\images';
        $file->move($destinationPath,$file->getClientOriginalName());
        $photo = $file->getClientOriginalName();





        if ($request->session()->get('username') !=null) {
            DB::table('products')->insert(
                [
                'ProductName' => $name,
                'Describe' => $description,
                'UpdateDay' => $date,
                'Price' => $price,
                'categoryid' => $category,
                'Picture' => $file->getClientOriginalName(),
                'Ceasefire' => $available,
                ]);
            $products = DB::table('products')
            ->join('categories', 'products.categoryid', '=', 'categories.ID')->paginate(5);
            return view('admin/productPage', ['products' => $products]);
            
        } else {
            return view('admin/login');
        }
    }

    



}
