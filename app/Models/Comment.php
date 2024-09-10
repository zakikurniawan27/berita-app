<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment',
    ];

    
    public function beritas(): HasMany{
        return $this->hasMany(Berita::class);
    }
}
