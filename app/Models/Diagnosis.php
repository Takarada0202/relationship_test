<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \App\Models\Company;

class Diagnosis extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function productModel(){
        return $this->hasOne(ProductModel::class);
    }

    public function logData() {
        return $this->hasOne(LogData::class);
    }

}
