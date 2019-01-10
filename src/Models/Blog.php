<?php

namespace Myblog\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];

    /**
     * Get the user that owns the blog.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucwords($value);
    }
}
