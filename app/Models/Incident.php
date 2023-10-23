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
        'status',
        'from',
        'assigne_to'
    ];

    protected $attributes = [
        'status' => 'Submitted',
    ];
}
