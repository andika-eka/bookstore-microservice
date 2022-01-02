<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;
    protected $fillable =['ID_SALES', 'RESELLABLE'];
    protected $primaryKey = 'id';
    public function sale()
    {
        return $this->belongsTo(Sale::class,'ID_SALES', 'id');
    }

}
