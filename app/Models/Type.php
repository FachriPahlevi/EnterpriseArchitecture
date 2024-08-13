<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    //protected $fillable = ['name', 'queue', 'artefact_id'];
    protected $guarded = [];

    public function Artefact()
    {
        return $this->belongsTo(Artefact::class);
        
    }


}

