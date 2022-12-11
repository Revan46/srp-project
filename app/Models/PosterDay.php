<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosterDay extends Model
{
    use HasFactory;

    protected $table = 'poster_days';

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
