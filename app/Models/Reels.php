<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reels extends Model
{
    use HasFactory;
    protected $table = 'Reels';
    protected $fillable = ['titre', 'video'];

}
