<?php

namespace App\Models;

use App\Models\Companie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['first_name','last_name','companie_id','phone','email'];

    public function companie(){
        return $this->belongsTo(Companie::class,'company_id','id');
    }
}
