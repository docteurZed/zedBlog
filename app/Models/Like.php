<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Like extends Pivot
{
    protected $fillable = ['post_id', 'user_id'];
}
