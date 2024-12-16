<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;

    protected $table = 'tb_golongan'; // Nama tabel di database
    protected $primaryKey = 'gol_id'; // Primary key tabel

    protected $fillable = [
        'gol_kode',
        'gol_nama',
    ];
}