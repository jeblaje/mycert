<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "hours", "description", "value"
    ];

    public function student() {
        return $this->belongsTo(Course::class);
    }

    public function cetificates() {
        return $this->hasMany(Certificate::class);
    }
}
