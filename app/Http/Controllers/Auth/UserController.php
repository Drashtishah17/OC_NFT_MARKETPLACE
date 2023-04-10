<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role','=','User')->get();
        return view('layouts.users.index',compact('users'));
        return response()->json(['users'=>$users],200);
    }

    public function delete(Request $request, $user_id)
    {
        $users = User::where(['user_id'=>$user_id])->first();
        // $users->delete();
        $users = User::where(['user_id'=>$user_id])->delete();
        return redirect('/admin/users')->with('status','Your Data is Deleted');
    }

    public function viewusers($user_id)
    {
        $users = User::where(['user_id'=>$user_id])->first();
        // dd($users);
        // exit;
        return view('layouts.users.view',compact('users'));
    }
}
