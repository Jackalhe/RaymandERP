<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiscalyearModel extends Model
{
    protected $table = 'Fiscalyear';
    protected $fillable = [
        'Fiscalyear',
        'StartDate',
        'EndDate',
        'TaxPercent',
        'TollPercent',
        'TollPercent2'
    ];
}
