<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
    public function index()
    {
        
        if (Auth::id()) {
            $role = Auth()->user()->role;
            if ($role == 'Customer') {
                return view('Customer');
            }
            else if ($role == 'Admin') {
                $users = user::all();
                return view('admin',compact('users'));
            }
            else{
                return view('welcome');
            }
        }

    }
}
