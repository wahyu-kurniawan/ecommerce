<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'abstrak', 'tahun_pengabdian', 'lokasi'];

    public function bayes()
    {
        return $this->hasOne(Bayes::class);
    }
}
