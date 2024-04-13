<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $table = "blog_tables";

    protected $fillable = [
        'title',
        'body',
    ];
}
