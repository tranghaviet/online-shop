<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index(){
        if(Auth::check()) {
//            $info = DB::select('SELECT name, email FROM users u WHERE u.id = '.Auth::user()->id);
            $info = DB::table('users')
                ->select('name', 'email', 'Birthday', 'Gender')
                ->where('id', '=',Auth::user()->id)
                ->first();
            if(DB::table('address')
                ->where('UserId', '=', Auth::user()->id)
                ->exists()) {
                $address = DB::table('address')
                    ->select('phone', 'state', 'city', 'address')
                    ->where('userId', '=', Auth::user()->id)
                    ->first();
            } else {
                DB::table('address')
                    ->insert(['UserId' =>Auth::user()->id]);
                $address = DB::table('address')
                    ->select('phone', 'state', 'city', 'address')
                    ->where('userId', '=', Auth::user()->id)
                    ->first();
            }
            $data = ['info' => $info,
            'detail' => $address];
//            dd($data);
            return view('pages.profile')->with($data);

        } else {
            return redirect('/login');
        }
    }

    public function update(Request $request) {
        $this->validate($request, [
            'fullname' => 'min:2|max:35',
            'email' => 'email|max:255',
            'birthday' => '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/',
            'phone' => 'regex:/(0)[0-9]{9}/',
            'city' => 'min:2|max:25',
            'state' => 'min:2|max:25',
            'address' => 'min:2|max:60',
            'password' => 'min:6|confirmed']);

        $userid = Auth::user()->id;
//        dd($request);

        DB::table('users')->where('id', $userid)
            ->update(['name' => $request->fullname,
                    'email' => $request->email,
                    'birthday' => $request->birthday,
                    'gender' => $request->gender]);

        if(DB::table('address')
            ->where('UserId', '=', Auth::user()->id)
            ->exists()) {
            DB::table('address')->where('UserId', $userid)
                ->update(['phone' => $request->phone,
                    'state' => $request->state,
                    'city' => $request->city,
                    'address' => $request->address]);
        } else {
            DB::table('address')
                ->insert(['UserId' =>$userid,
                    'phone' => $request->phone,
                    'state' => $request->state,
                    'city' => $request->city,
                    'address' => $request->address]);
        }
        return redirect('./profile');
    }
}
