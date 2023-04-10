<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class ProfileController extends Controller
{
    // public $successStatus = 200;
    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function api(Request $request){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $users = Auth::user();
            $success['token'] =  $users->createToken('MyApp')-> accessToken; 
            return response()->json([
                'Status' => 200,
                'Success message'=> 'Login Successfully',
                'Access' => $success
            ], 200); 
        } 
        else{ 
            return response()->json(['Status'=> 401, 'error'=>'Unauthorised'], 401); 
        } 
    }
    public function index(Request $request)
    {
        $admins = User::where(['user_id'=>auth()->user()->user_id])->get();
        return view('layouts.admin',compact('admins'));
    }

    public function edit($user_id)
    {
        $admins = User::where(['user_id'=>$user_id])->first();
        return view('layouts.edit')->with('users',$admins);
    }

    public function update(Request $request, $user_id)
    {
        $admins = User::where(['user_id'=>$user_id])->first();
        $admins->username = $request->input('username');
        $admins->email = $request->input('email');
        $admins->password = $request->input('password');
        $admins['password'] = bcrypt($admins['password']);
        $admins->role = $request->input('role');
        // $admins->update();
        $admins = User::where('user_id',$user_id)->update(['username'=>$admins->username,'email'=>$admins->email]);
       
        return redirect('/admin/profile')->with('status','Your Data is updated');
    }

}
