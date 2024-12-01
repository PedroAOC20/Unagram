<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Os atributos que podem ser preenchidos em massa (mass assignable).
     */
    protected $fillable = [
        'user_id',
        'description',
        'likes',
        'image_url',
    ];

    /**
     * Relação: um post pertence a um usuário.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}