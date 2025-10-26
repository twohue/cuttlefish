<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalFolder extends Model
{
    /** @use HasFactory<\Database\Factories\JournalFolderFactory> */
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function journalPosts()
    {
        return $this->hasMany(JournalPost::class);
    }
}
