<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function productModelSuffixes()  {
        return $this->hasMany(ProductModelSuffix::class);
    }

    public function logicBuilder() : BelongsTo {
        return $this->belongsTo(LogicBuilder::class);
    }
    public function product() :BelongsTo {

        return $this->belongsTo(Product::class);
    }

    public function jig(){
        return $this->hasMany(Jig::class);
    }
    public function diagnosis(){
        return $this->hasMany(Diagnosis::class);
    }
}
