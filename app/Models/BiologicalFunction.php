<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiologicalFunction extends Model
{
    protected $table = 'biological_functions';

    protected $fillable = [
        'apetite',
        'apetite_quality',
        'thirst',
        'thirst_quality',
        'sleep',
        'sleep_quality',
        'weight_change',
        'gastric_problems',
    ];

    public function clinicalHistory()
    {
        return $this->belongsTo(ClinicalHistory::class);
    }
}
