<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class accountingUnit extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $guarded = [];


    public function division() : BelongsTo {
        return $this->belongsTo(Division::class);
    }

    // public function products() : HasMany {
    //     return $this->hasMany(Product::class, 'accounting_unit_id');
    // }
}
