<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $data['route'] = 'Utilisateurs';
        $data['User']= User::select('id', 'name', 'email', 'created_at')->get();
        return view('admin.Utilisateurs.index', $data);
    }
}
