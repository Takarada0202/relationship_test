<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogicBuilder extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function productModel() {
        return $this->hasMany(productModel::class);
    }
    public function parsingBuilder():BelongsTo {
        return $this->belongsTo(ParsingBuilder::class);
    }

}
