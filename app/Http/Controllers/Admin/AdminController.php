<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Activity;
use App\Models\User;
use App\Models\order;
use App\Models\Messages;

class AdminController extends Controller
{
    public function index(){
        $data = [
            'route'=>'dashboard',
            'categoryCount' => Category::count(),
            'activityCount' => Activity::count(),
            'userCount' => User::count(),
            'orderCount' => Order::count(),
            'messagesCount' => Messages::count(),
        ];
        return view('admin.dashboard', $data);
    }
}
