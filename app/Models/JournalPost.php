<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalPost extends Model
{
    /** @use HasFactory<\Database\Factories\JournalPostFactory> */
    use HasFactory;


    public function journalFolder()
    {
        return $this->belongsTo(JournalFolder::class);
    }
}
