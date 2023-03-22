<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Haircut extends Model
{
    use HasFactory,SoftDeletes ;
    protected $fillable = ['haircut_name', 'haircut_price'];
    public function admins(){
        return $this->belongsTo(Admin::class);
    }
}

