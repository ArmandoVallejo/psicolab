<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamiliarRelation extends Model
{
    protected $table = 'familiar_relations';

    protected $fillable = [
        'mother',
        'father',
        'brothers',
        'couple',
        'children',
        'clinical_history_id',
    ];

    public function clinicalHistory()
    {
        return $this->belongsTo(ClinicalHistory::class);
    }
}
