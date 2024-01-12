<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogicBuilder extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function productModel() {
        return $this->hasMany(productModel::class);
    }
    public function parsingBuilder() {
        return $this->hasOne(ParsingBuilder::class);
    }
}
