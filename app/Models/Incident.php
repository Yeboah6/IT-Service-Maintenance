<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $table = 'Incident';
    protected $fillable = [
        'task_type',
        'issue_type',
        'request_type',
        'summary',
        'reporter',
        'urgency',
        'assginee',
    ];
}
