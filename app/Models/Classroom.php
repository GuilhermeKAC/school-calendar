<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'scheduled_at',
        'duration',
        'max_students',
    ];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
