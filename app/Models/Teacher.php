<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function schools()
    {
        return $this->belongsToMany(School::class);
    }

    public function clasroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
