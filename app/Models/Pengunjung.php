<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pengunjung';

    protected $fillable = ['gender', 'usia', 'disabilitas', 'pesan', 'status_vaksin'];
}
