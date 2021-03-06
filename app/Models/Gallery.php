<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
    'image',
    'gallery_categories'
    ];

    public function gcategory()
    {
        return $this->belongsTo('App\Models\Gcategory');
    }
}
