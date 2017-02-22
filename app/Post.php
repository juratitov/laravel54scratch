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
        $user_id = auth()->id();
        $this->comments()->create(compact('body','user_id'));
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

    /**
     * @return mixed
     */
    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()->toArray();
    }

}
