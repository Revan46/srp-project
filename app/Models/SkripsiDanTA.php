<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkripsiDanTA extends Model
{
    use HasFactory;

    protected $table = 'skripsi_dan_tas';

    protected $fillable = [
        'user_id',
        'judul',
        'nama_pembimbing',
        'status_validasi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
