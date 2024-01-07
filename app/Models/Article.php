<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Article extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'articles';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['title', 'content', 'validated', 'category', 'author_id', 'validated_by', 'validated_date'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'verified' => 'boolean',
    ];

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function validator() {
        return $this->hasOne(User::class, 'validated_by');
    }

    public function category() {
        return $this->hasOne(Category::class, 'category');
    }
}
