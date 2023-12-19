<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "email", "phone", "address", "type_dni", "dni"
    ];

    public function certificates() {
        return $this->hasMany(Certificate::class);
    }

    
}
