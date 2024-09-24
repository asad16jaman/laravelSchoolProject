<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmTemplate extends Model
{
    use HasFactory;
    protected $fillable = ['school_id','term','option','path'];
}
