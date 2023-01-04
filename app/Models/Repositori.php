<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repositori extends Model
{
    use HasFactory;

    protected $fillable = [
        'dokumen_id',
        'tanggal',
        'persentase_plagiarisme'
    ];

    public function dokumens()
    {
        return $this->hasMany(Dokumen::class);
    }
}
