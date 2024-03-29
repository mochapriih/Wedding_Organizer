<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WeddingPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug','image', 'description', 'price'
    ];

    protected $hidden = [
        //
    ];

}
