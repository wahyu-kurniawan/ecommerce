<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayes extends Model
{
    use HasFactory;
    protected $fillable = ['document_id', 'topik'];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
