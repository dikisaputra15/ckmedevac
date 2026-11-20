<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    use HasFactory;

    public const CATEGORIES = [
        'National Police HQ',
        'Police Station',
        'Police Post',
        'Specialized Unit',
    ];

    protected $guarded = [];
}
