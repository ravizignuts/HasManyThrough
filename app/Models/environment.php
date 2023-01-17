<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deployment;


class environment extends Model
{
    use HasFactory;
    public function deployment()
    {
        return $this->hasMany(Deployment::class,'environment_id');
    }
}
