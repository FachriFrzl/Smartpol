<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
       
        return view('admin.User.index',compact('users'));
    }
}
