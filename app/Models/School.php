<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = [
            'type',
            'name',
            'region',
            'district',
            'address',
            'headmaster_name',
            'contact',
            'user_id',
    ];

    function user(){
        return $this->belongsTo(User::class);
    }

    
}
