<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_id','user_id','description'
    ];

    public function video():BelongsTo{
        return $this->belongsTo(Video::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function replies(){
        return Comment::where('reply_comment_id',$this->id)->get();
    }
}
