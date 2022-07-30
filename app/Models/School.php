<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'default_max_students',
        'default_duration',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
}
