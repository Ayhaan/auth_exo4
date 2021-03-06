<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home()
    {
        return view('home');

    }

    public function admin()
    {
        //me trouve les role admin
        $userAdmin = User::all()->where('role_id', 1);
        return view('admin/dashboard', compact('userAdmin'));

    }
}
