<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function post() : HasMany{
        return $this->hasMany(Post::class);
    }
}
//HasMany se utiliza para definir una relación de uno a muchos.
