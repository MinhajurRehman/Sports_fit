<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class up extends Model
{
    use HasFactory;
    protected $table = 'upcoming_events';
    protected $primarykey = 'id';
}
