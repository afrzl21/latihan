<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewa extends Model
{
    use HasFactory;

    protected $table = 'penyewa';
    protected $primaryKey = 'id';

    public $timestamps = false;
}
