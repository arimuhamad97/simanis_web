<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
    use HasFactory;

    protected $table = 'slide_show';
    public $incrementing = false;

    protected $fillable = [
        'img',
    ];
}
