<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    protected $fillable = ['client', 'department', 'artefact',  'phase'];


    public function Artefact()
    {
        return $this->hasMany(Artefact::class);
    }

    public function Client()
    {
        return $this->belongsTo(Client::class,'idClient');
    }

    public function Phase()
    {
        return $this->hasMany(Phase::class);
    }

    public function Component()
    {
        return $this->hasMany(Component::class);
    }
}
