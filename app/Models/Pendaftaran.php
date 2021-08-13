<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'datawarga';
    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jk',
        'kampung',
        'rt',
        'rw',
        'pelamar',
        'telepon',
        'pendidikan',
        'paklaring'];
    use HasFactory;
}
