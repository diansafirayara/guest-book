<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{

    protected $table = 'form_data';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'nama',
        'jumlah_tamu',
        'tanggal_mulai',
        'tanggal_selesai',
        'domisili',
        'tujuan',
        'staff',
        'keterangan',
    ];
}
