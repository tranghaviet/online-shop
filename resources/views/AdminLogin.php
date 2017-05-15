<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;

class AdminLogin extends Controller
{
    public function postAdmin(Request $request)
    {
        return redirect()->action('SessionController@storeSessionData', $request);
    }

    public function check()
    {
        return true;


    }
}
