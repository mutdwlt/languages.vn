<?php

namespace Zofe\Rapyd\Demo;

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Article
 */
class Post extends \Eloquent {

    protected $table = 'posts';

//    public function author()
//    {
//        return $this->belongsTo('Zofe\Rapyd\Demo\Author', 'author_id');
//    }
//    public function comments()
//    {
//        return $this->hasMany('Zofe\Rapyd\Demo\Comment', 'article_id');
//    }

    public function categories() {
        return $this->belongsToMany('Zofe\Rapyd\Demo\Category', 'post_category', 'post_id', 'category_id');
    }

//    public function detail() {
//        return $this->hasOne('Zofe\Rapyd\Demo\ArticleDetail', 'article_id');
//    }

    public function scopeFreesearch($query, $value) {
        return $query->where('title', 'like', '%' . $value . '%')
                        ->orWhere('content', 'like', '%' . $value . '%')
                        ->orWhereHas('categories', function ($q) use ($value) {
                            $q->where('name', 'like', '%' . $value . '%');
                        });
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function ($article) {
            $article->detail()->delete();
            if ($article->photo)
                @unlink(public_path() . '/uploads/demo/' . $article->photo);
        });
    }

}
