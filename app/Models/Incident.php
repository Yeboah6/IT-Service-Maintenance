<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $table = 'incidents';
    protected $fillable = [
        'issue',
        'issue_type',
        'description',
        'reporter',
        'urgency',
        'statusCheck',
        'from',
        'assign_to'
    ];

    public function incident() {
        return $this -> belongsTo(Technicians::class, 'service_number', 'service_number');
    }
}
