<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;


    protected $guarded = ['id','created_at','updated_at'];

    //Relacion de uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);

    }  

    public function centro(){
        return $this->belongsTo(Centro::class);

    }  
}
