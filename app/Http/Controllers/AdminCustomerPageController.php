<?php
namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Http\Request as Request;
use DB;
use Storage;
use Input;

class AdminCustomerPageController extends Controller
{
   public function checkMP(Request $request)
   {

    if ($request->session()->get('username')!=null) {

        $customers = DB::select('select * from users');

        return view('admin/memberPage', ['customers' => $customers]);

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
}