<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\deployment;
class environment extends Model
{
    use HasFactory;
    public function deployment(){
        return $this->hasone(deployment::class);
    }
}
