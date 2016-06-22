<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function Contact(){
        $users = DB::select('select * from users where id = ?', [1]);

        return view('contact', ['users' => $users]);
    }
    public function Recruit(){
        return view('recruit');
    }
    public function CommonQuestion(){
        return view('common_question');
    }
}
