<?php namespace Zofe\Rapyd\Demo;

/**
 * Category
 */
class Category extends \Eloquent
{

    protected $table = 'category';

    public function articles()
    {
        return $this->belongsToMany('Zofe\Rapyd\Models\Article', 'post_category', 'category_id','post_id');
    }

    public function parent()
    {
        return $this->belongsTo('Category', 'parent_id');
    }

    public function childrens()
    {
        return $this->hasMany('Category', 'parent_id');
    }
}
