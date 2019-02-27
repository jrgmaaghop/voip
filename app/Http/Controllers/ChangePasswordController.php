<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\User;
use Auth;


class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id){
      $data['page_title'] = 'Change Password';
      return view('users.changepassword')->with('data',$data);
    }

    public function update(Request $request){
      $data['page_title'] = 'Change Password';

      $this->validate($request, [
          'id' => 'required',
          'oldpassword' => 'required',
          'password' => 'same:confirm-password'
      ]);

      $input = $request->all();

      $userinfo = User::find($input['id']);

      //$oldpass = Hash::make($input['oldpassword']);

      // var_dump($input['oldpassword']);
      // var_dump((!Hash::check($input['oldpassword'], Auth::user()->password)));
      // exit();

      if(!Hash::check($input['oldpassword'], Auth::user()->password)){
        $data['error'] = "error";
        return view('users.changepassword')->with('data',$data);
      }

      $newpass = Hash::make($input['password']);
      $userinfo->password = $newpass;
      $userinfo->save();

      $data['success'] = "success";

      return view('users.changepassword')->with('data',$data);
      // var_dump($userinfo['password']);

    }
}
