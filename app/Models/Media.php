<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['user_id' ,'facebook', 'linkedin', 'whatsapp', 'is_general'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
