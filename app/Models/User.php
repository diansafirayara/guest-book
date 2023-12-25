<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Sesuaikan dengan kebutuhan Anda
    protected $table = 'users';

    // ... definisi atribut lainnya

    public function formData()
    {
        return $this->hasOne(FormData::class);
    }


    protected $fillable = [
        'referral_code',
    ];

    // ...
}
