<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    protected $table = 'qt64_news';
    protected $guarded = [];
    public function cate()
    {
        return $this->belongsTo('App\Model\Cate');
    }
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
