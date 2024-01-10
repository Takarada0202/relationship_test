<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \App\Models\Company;

class division extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $guarded = [];

    //--

    public function company() : BelongsTo {
        return $this->belongsTo(Company::class,);
    }

    public function accountingUnits() : HasMany {
        return $this->hasMany(AccountingUnit::class, 'division_id');
    }
}
