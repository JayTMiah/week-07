<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Treatment;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'dob', 'weight', 'height', 'biteyness', 'owner_id'];

    public function owner()
    {
      // a comment belongs to an article
      return $this->belongsTo(Owner::class);
    }

    public function dangerous()
    {
        return $this->biteyness >= 3;
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }

    public function setTreatments(array $array) : Animal
    {
        $treatments = Treatment::fromStrings($array);

        $this->treatments()->sync($treatments->pluck("id"));
        
        return $this;
    }

    // create a public function
    

}
