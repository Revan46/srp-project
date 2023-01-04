<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'judul',
        'nama_dospem',
        'abstrak',
        'tanggal',
        'file',
        'tipe_dokumen'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function repositori()
    {
        return $this->belongsTo(Repositori::class);
    }
}
