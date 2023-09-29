<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MessagesController extends Controller
{
    public function index()
    {
        $data['route'] = 'Messages';
        $data['Messages']=Messages::select('id','name', 'email','subject','message')->get();
        return view('admin.Messages',$data);
    }

  

}
