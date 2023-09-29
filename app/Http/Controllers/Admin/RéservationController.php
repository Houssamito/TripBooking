<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class RéservationController extends Controller
{
    public function index()
    {
        $data['route'] = 'Réservations';
        $data['order']= order::select('id', 'fullname', 'phoneNumber', 'Email', 'Adresse', 'status_message', 'payment_mode', 'payment_id', 'activity_id', 'Date', 'Heure', 'price', 'created_at', 'updated_at')->get();
        return view('admin.Réservation.index', $data);
    }
}
