<?php

namespace App;

use App\Model;


/**
 * Class Post
 *
 * @param $title
 * @param $body
 *
 * @package App
 */
class Post extends Model
{

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

}
