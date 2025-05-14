<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicalHistory extends Model
{
    protected $table = 'clinical_histories';

    protected $fillable = [
        'patient_id',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function biologicalFunctions()
    {
        return $this->hasOne(BiologicalFunction::class);
    }

    public function familiarRelations()
    {
        return $this->hasOne(FamiliarRelation::class);
    }
}
