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

    public function logData()
    {
        return $this->hasMany(LogData::class);

    }
    public function productModel() :BelongsTo {
        return $this->belongsTo(ProductModel::class);
    }

}
