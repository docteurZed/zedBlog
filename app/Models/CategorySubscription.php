<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorySubscription extends Model
{
    protected $fillable = ['category_id', 'user_id'];
}
