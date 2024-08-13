<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artefact;

class Phase extends Model
{
    use HasFactory;
    //protected $fillable = ['name', 'queue'];
    protected $guarded = [];


    public function Artefact()
    {
        return $this->hasMany(Artefact::class, 'phase');
    }


}
