<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Reply extends Model
{
    use HasFactory;
    protected $table = 'replys';
    protected  $guarded = ['id'];

    public function comment(){
        return $this->belongsTo(Comment::class);
    }
}
