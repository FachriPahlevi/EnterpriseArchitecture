<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portofolio;
use App\Models\Artefact;
use App\Models\Component;  

class Component extends Model
{
    use HasFactory;
    protected $fillable = ['portofolio_id', 'phase', 'type', 'name', 'artefact'];

    protected $table = 'components'; // Nama tabel dalam database

    public function Portofolio()
    {
        return $this->hasOne(Portofolio::class);
    }

    public function Artefact()
    {
        return $this->belongsTo(Artefact::class);
        return $this->belongsToMany(Artefact::class, 'component_artefact', 'component_id', 'artefact_id');
        
    }
    public function Phase()
    {
        return $this->belongsTo(Phase::class);
        
    }

   
}

