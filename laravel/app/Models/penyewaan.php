<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewaan extends Model
{
    use HasFactory;

    protected $table = 'penyewaan';
    protected $primaryKey = 'id_sewa';

    public $timestamps = false;
}
