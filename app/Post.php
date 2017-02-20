<?php

namespace App;

use App\Model;
use Carbon\Carbon;


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

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    /**
     * @param $query
     * @param $filters
     */
    public function scopeFilter($query, $filters)
    {
        if ($month = array_get($filters, 'month')) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = array_get($filters, 'year')) {
            $query->whereYear('created_at', $year);
        }
    }

}
