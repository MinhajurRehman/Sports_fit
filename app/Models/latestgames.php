<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latestgames extends Model
{
    use HasFactory;
    protected $table = 'latest_games';
    protected $primarykey = 'id';
}
