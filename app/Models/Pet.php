<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'kind',
        'photo_path',
        'location',
        'description',
        'available_from',
        'available_to',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
