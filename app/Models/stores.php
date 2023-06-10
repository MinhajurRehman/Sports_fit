<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stores extends Model
{
    use HasFactory;
    protected $table = 'store_details';
    protected $primarykey = 'id';
}
