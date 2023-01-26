<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit($id){

        $user = User::where('id', $id)->first();
        return view('adminedit', ['user' => $user]);




    }

    public function update(Request $request, $id){
        User::where('id', $id)->update([
            'username' => $request->username,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => $request->role_id,
        ]);

        return redirect(route('admin'));
    }

    public function destroy($id){
        User::destroy($id);

        return redirect(route('admin'));
    }
}
