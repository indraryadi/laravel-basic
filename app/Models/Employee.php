<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=['first_name','last_name','companie_id','phone','email'];

    public function companie(){
        return $this->belongsTo(Companie::class,'companie_id','id');
    }
}
