<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        // Mass Assignment
        'name',
        'description',
        'expiring_date',
        'label_tag',
        'price',
        'completed'
    ];
}
