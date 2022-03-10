<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genere extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    protected $hidden = [
        'id',    
    ];
    public function movies(){
        return $this->belongsTo(Movie::class);
    }
}


