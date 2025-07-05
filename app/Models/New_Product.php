<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class New_Product extends Model
{
    protected $table = 'new_product';

    public function user() {
    return $this->belongsTo('App\Models\User');
    }
}


