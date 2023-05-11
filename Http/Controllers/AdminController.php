<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Admin;


class AdminController extends Controller
{
    public function indexs()
    {
        return view ('admin.indexs');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function checkLogin(Request $request)
    {
      
        $admin = Admin::where('adminID','=',$request->adminID)->first();
       
        if($admin){
            if($admin->adminpassword == $request->adminPass){
                $request->session()->put('adminID',$admin->adminID);
                $request->session()->put('adminname ',$admin->adminname);
                $request->session()->put('adminPhoto',$admin->adminPhoto);
                return redirect('admin/indexs');
            }else{
                return back()->with('fail','Password input invalid');
            }

        }else{
            return back()->with('fail','admin is not existed');
        }
    }

    public function logout(){
        if(Session::has('adminID'))
        Session::pull('adminID');
        if(Session::has('adminname'))
        Session::pull('adminname');
        if(Session::has('adminPhoto'))
        Session::pull('adminPhoto');

        return redirect('admin/login');
    }

    
}
