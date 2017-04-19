<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Home extends Controller
{
    public function index() {
        $users = DB::table('users')->get();
//        $users = DB::select('select * from users');
        echo "dfasd".'<br>';
        echo sizeof($users);
        echo $users;

        foreach ($users as $user) {
            echo "asdfasd";
            echo $user->name;
            echo $user->Name;
            echo $user->ID;
            echo $user->id;
        }
    }
}
