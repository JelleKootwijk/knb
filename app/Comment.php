<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * Get the post associated with the model.
     * 
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    /**
     * author
     *
     * @return \Illuminate\Http\Response
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
