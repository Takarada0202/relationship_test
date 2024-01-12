<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jig extends Model
{
    use HasFactory;

    use HasFactory;

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function logData(): BelongsTo
    {
        return $this->belongsTo(LogData::class);

    }
    public function productModel(){
        return $this->hasOne(ProductModel::class);
    }
}
