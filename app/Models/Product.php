<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function accountingUnit(): BelongsTo
    {
        return $this->belongsTo(AccountingUnit::class, 'accounting_unit_id');
    }
}
