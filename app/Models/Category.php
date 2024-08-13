<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['information'];

    public function Artefact()
    {
        return $this->hasMany(Artefact::class, 'id');
    }

    
}
