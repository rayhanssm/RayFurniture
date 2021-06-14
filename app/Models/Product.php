<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'crafter_id', 'color', 'material', 'price'];

    public function crafter(){
        return $this->belongsTo(Crafter::class);
    }
}
