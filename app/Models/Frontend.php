<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
    protected $table = 'datawarga';
    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
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
