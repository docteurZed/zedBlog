<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AuthorSubscription extends Pivot
{
    protected $fillable = ['author_id', 'user_id'];
}
