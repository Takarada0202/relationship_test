<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $guarded = [];


    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class, 'company_id');
    }
}
