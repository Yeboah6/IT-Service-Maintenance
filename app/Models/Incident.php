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
        'summary',
        'reported_by',
        'urgency',
        'statusCheck',
        'from',
        'ticket_no',
        'service_number',
        'number',
        'first_name',
        'last_name',
        'email',
        'technician_id'
    ];
}
