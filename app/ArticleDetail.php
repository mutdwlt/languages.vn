<?php namespace Zofe\Rapyd\Demo;
namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * ArticleDetail
 */
class ArticleDetail extends \Eloquent
{

    protected $table = 'demo_article_detail';
    public $timestamps = false;

    public function article()
    {
        return $this->belongsTo('Zofe\Rapyd\Models\Article', 'article_id');
    }

}