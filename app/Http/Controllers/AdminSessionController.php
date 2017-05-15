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

    
    
    
    public function checkLogin(Request $request)
    {
        if ($request->session()->has('username')) {
            return view('admin.page');
        } else {
            return view('admin/login');
        }
    }

    public function checkAdmin(Request $request)
    {
        if ($request->session()->has('username')) {
            return view('admin.page');
        } else {
            return view('admin/login');
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

    
    

    
    public function checkAP(Request $request)
    {
        if ($request->session()->get('username') !=null) {

            return view('admin/articlePage');
        } else {
            return view('admin/login');
        }
    }
    



}
