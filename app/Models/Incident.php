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
        'assign_to',
        'ticket_no',
        'service_number',
        'number',
        'reporter_name',
        'technician_id'
    ];

    // public function technician() {
    //     return $this -> belongsTo(Technicians::class, 'assign_to');
    // }
}
