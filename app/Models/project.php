<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\environment;

class project extends Model
{
    use HasFactory;
    public function environment()
    {
        return $this->hasMany(environment::class);
    }
}
