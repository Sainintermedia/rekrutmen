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
        'jeniskelamin',
        'kampung',
        'rt',
        'rw',
        'pelamar',
        'telepon',
        'pendidikan',
        'paklaring',
        'keterangan'];
    use HasFactory;
}
