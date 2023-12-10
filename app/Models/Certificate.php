<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        "path", "student_id", "dni", "title"
    ];

    public function student() {
        return $this->belongsTo(Student::class);
    }
}
