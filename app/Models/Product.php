<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['id','NAMA','HARGA_JUAL', 'HARGA_BELI','STOK'];
    protected $primaryKey = 'id';

    public function sale()
    {
        return $this->hasMany(Sale::class);
    }    
}

