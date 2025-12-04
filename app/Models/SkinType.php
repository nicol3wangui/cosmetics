<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkinType extends Model
{
    use HasFactory;

    protected $table='skin_types';

    protected $fillable=[
        'skintype_name',
        'skintype_status',
    ];

     public function product(){
       return $this->hasMany(Product::class);
    }
}
