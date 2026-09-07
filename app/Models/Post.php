<?php

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'content'];

    // পোস্ট কোন ইউজারের তা জানার সম্পর্ক
    public function user()
    {
        return $table = $this->belongsTo(User::class);
    }
}