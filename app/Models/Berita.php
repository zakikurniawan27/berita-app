<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'comment_id',
        'image',
        'content',
    ];

    public function users(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function comments(): BelongsTo{
        return $this->belongsTo(Comment::class);
    }
}
