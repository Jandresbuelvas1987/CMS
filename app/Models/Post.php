<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category() : BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function user() : BelongsTo{
        return $this->belongsTo(user::class);
    }
    public function comments() : HasMany{
        return $this->hasMany(Comment::class);
    }
}
//BelongsTo en Laravel se utiliza para definir una relación inversa donde un modelo pertenece a otro.
