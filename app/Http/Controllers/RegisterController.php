<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function create()
    {
        return view('register.create');
    }
    
    public function store()
    {
        $this -> validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $sellers = sellers::create(request(['name', 'email', 'password']));
        auth()->login($sellers);
        return redirect()->to('/login');
    }

   // public function store (request $request) {
   //     $request->validate([
    //        'name' => 'required',
    //        'email' => 'required|email',
    //        'password' => 'required|min:8'
    //        ]);

   //     $logins = new Login();
  //      $logins->email = $request->email;
 //       $logins->password = $request->password;
//        $logins->save();

    //    return $redirect()->route('menu')->with('success', 'Loged successfully');
    //}
    //
}
