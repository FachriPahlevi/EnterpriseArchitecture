<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phase;
use App\Models\Type;

class Artefact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'queue', 'phase', 'category'];
    //protected $guarded = [];
    public function Phase()
    {
        return $this->belongsTo(Phase::class);
        //return $this->belongsToMany(Phase::class, 'artefact_phase');
    }
    public function portofolios()
    {
        return $this->belongsToMany(Portofolio::class);
    }
    public function Component()
    {
        return $this->hasMany(Component::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Type()
    {
        return $this->hasMany(Type::class);
    }
  
}
