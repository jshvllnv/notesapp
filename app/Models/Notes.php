<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    public $table = "notes";

    public $fillable = [
        'title',
        'description'
    ];
}
