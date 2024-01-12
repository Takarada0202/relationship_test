<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogData extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $guarded = [];


    public function diagnosis(): BelongsTo
    {
        return $this->belongsTo(Diagnosis::class);

    }
    public function jig(): HasMany
    {
        return $this->hasMany(Jig::class, 'company_id');
    }

}
