<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('verifyEmail')->except('saveVerify');
        $this->middleware('HistorySession');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
       
        return view('home');
    }

    public function getUser()
    {
      $users =  DB::table('users')->join('role_user', 'role_user.user_id', '=', 'users.id')
      ->select('name','last_name','email','phone')
      ->where('role_user.role_id', '=', 1)
      ->orWhere('role_user.role_id', '=', 2)
      ->get();
        
        return view('getUser', compact('users'));
    }

    public function getPermission()
    {
      $permissions =  DB::table('permissions')->join('permission_roles', 'permission_roles.permission_id', '=', 'permissions.id')
      ->select('permission')
      ->where('permission_roles.role_id', '=', 1)
      ->get();
        
        return view('getPermission', compact('permissions'));
    }

    public function getUserRol()
    {
      $permissions =  DB::table('permissions')
      ->leftjoin('permission_roles', 'permission_roles.permission_id', '=', 'permissions.id')
      ->rightjoin('roles', 'permission_roles.role_id', '=', 'roles.id')
      ->leftjoin('role_user', 'roles.id', '=', 'role_user.role_id')
      ->rightjoin('users', 'role_user.user_id', '=', 'users.id')
      ->select('roles.name as role', 'users.name')
      ->where('permission_roles.permission_id', '=', 2)
      ->get();
       // dd($permissions);
        return view('getUserRol', compact('permissions'));
    }

    public function saveVerify(Request $request)
    {
        $user = $request->user();
       $user->email_verified_at = Carbon::now();
       $user->save();

       return redirect( route('home'));
    }

}
