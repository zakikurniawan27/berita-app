<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'berita_id',
        'comment',
    ];

    
    public function beritas(): BelongsTo{
        return $this->belongsTo(Berita::class);
    }
}
