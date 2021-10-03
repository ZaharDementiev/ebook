<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HTMLBook extends Model
{
    use HasFactory;

    protected $table = 'html_books';
    protected $guarded = ['id'];
}
