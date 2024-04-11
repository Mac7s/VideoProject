<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','description','thumbnail','url','slug','category_id','user_id','lenght'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function videoOwner(){
        return $this->user->name;
    }

    protected function lenght(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => gmdate("i:s",$value),
        );
    }

    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
