<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcategory extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'image'
    ];

    public function gallery()
    {
        return $this->hasMany('App\Models\Gallery');
    }
}
