<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Post;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function Index(){
        return view('admin.index');
    }
    public function listpage()
    {

        $grid = \DataGrid::source(Article::find(1));

        $grid->add('id','ID', true)->style("width:100px");
        $grid->add('title','Title');
        $grid->add('content','Body');
        $grid->add('lang','Languages');
//        $grid->add('{{ $author->fullname }}','Author', 'author_id');
//        $grid->add('{{ implode(", ", $categories->lists("name")->all()) }}','Categories');

        $grid->edit('/admin/page/edit', 'Edit','modify');
//        $grid->link('/rapyd-demo/edit',"New Article", "TR");
        $grid->orderBy('id','desc');
        $grid->paginate(10);

        $grid->row(function ($row) {
           if ($row->cell('id')->value == 20) {
               $row->style("background-color:#CCFF66");
           } elseif ($row->cell('id')->value > 15) {
               $row->cell('title')->style("font-weight:bold");
               $row->style("color:#f00");
           }
        });

        return  view('admin.list_page', compact('grid'));
    }
    
    public function edit()
    {
        if (\Input::get('do_delete')==1) return  "not the first";

        $edit = \DataEdit::source(new Article());
        $edit->add('title','Title', 'text')->rule('required|min:5');

        $edit->add('content','Content', 'textarea');
        $edit->add('lang','Language', 'text');

        return $edit->view('admin.edit', compact('edit'));

    }
    
    public function listpost()
    {
        $filter = \DataFilter::source(Post::with('categories'));
        $filter->add('title','Title', 'text');
        $filter->add('category.name','Categories','tags');
        $filter->add('datetime','publication date','daterange')->format('m/d/Y', 'en');
        $filter->submit('search');
        $filter->reset('reset');
        $filter->build();

        $grid = \DataGrid::source($filter);
        $grid->link('/admin/post/new',"New Article", "TR");
        $grid->attributes(array("class"=>"table table-striped"));
        $grid->add('id','ID', true)->style("width:70px");
        $grid->add('title','Title', true);
        $grid->add('{{ implode(", ", $categories->lists("name")->all()) }}','Category');    
        $grid->add('datetime|strtotime|date[m/d/Y]','Date', true);
        $grid->add('content|strip_tags|substr[0,20]','Body');
        $grid->edit('/admin/post/edit', 'Edit','modify|delete');
        $grid->paginate(10);

        return  view('admin.list_post', compact('filter', 'grid'));
    }
    
    public function createpost(){
        if (\Input::get('do_delete')==1) return  "not the first";

        $edit = \DataEdit::source(new Post());
        $edit->label('New post');
        $edit->add('title','Title', 'text')->rule('required|min:5');
        $edit->add('content','Body', 'textarea');
        $edit->add('datetime','Date','date');
        $edit->add('categories.name','Categories','tags');

        return $edit->view('admin.edit', compact('edit'));
    }
}
