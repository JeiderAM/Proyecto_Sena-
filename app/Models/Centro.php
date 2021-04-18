<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;
 
     //Relacion uno a muchos
    public function fichas(){
        return $this->hasMany(Fichas::class);

    }
    
}
