<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;

class Bhyt extends Model
{
    use HasFactory, Filterable;

    protected $guarded = []; // YOLO
}
