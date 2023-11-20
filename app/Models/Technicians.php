<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technicians extends Model
{
    use HasFactory;

    protected $table = 'technicians';
    protected $fillable = [
        'name',
        'number',
        'email',
        'status',
        'service_number',
        'department'
    ];

    public function technician() {
        return $this -> belongsTo(Incident::class, 'service_number', 'service_number');
    }
}
