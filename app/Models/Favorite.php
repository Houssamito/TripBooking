<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'activity_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public static function rules()
    {
        return [
            'activity_id' => 'unique:user_id', // Assure l'unicité de la combinaison user_id et activity_id
        ];
    }
}
