<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Login;

class LoginController extends Controller
{

    public function store(Request $request)
    {
        $login = new Login();

        $login->email = $request->email;
        $login->password = $request->password;

        $login->save();

        return redirect()->route('/home');
    }

}
