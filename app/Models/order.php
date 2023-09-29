<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable =['fullname',
    'phoneNumber',
    'Email',
    'Adresse',
    'status_message',
    'payment_mode',
    'payment_id',
    'activity_id',
    'price',
    'Date',
    'Heure'];
}
