<?php

namespace App\Http\Controllers;

use DB;
use App;
use Mail;
use App\Article;
use App\Author;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    
    public function index()
    {
        return view('home');
    }

    public function Contact() {
        if(App::getLocale()=='vi')
            $page = DB::table('pages')->where('keyword', 'contact')->first();
        else
            $page = DB::table('pages')->where('keyword', 'contact_e')->first();
        return view('contact', ['page' => $page]);
    }
    
    public function location(){
        return view('location_page');
    }
    
    public function Whoweare() {
        $page = DB::table('pages')->where('keyword', 'who_we_are')->first();
        return view('single_page', ['page' => $page]);
    }
    
    public function learningenv() {
        $page = DB::table('pages')->where('keyword', 'enviroment')->first();
        return view('single_page', ['page' => $page]);
    }
    
    public function Motivation() {
        $page = DB::table('pages')->where('keyword', 'motivation')->first();
        return view('single_page', ['page' => $page]);
    }
    
    public function Staffinfo() {
        $page = DB::table('pages')->where('keyword', 'staff')->first();
        return view('single_page', ['page' => $page]);
    }
    
    public function Centerinfo() {
        $page = DB::table('pages')->where('keyword', 'center')->first();
        return view('single_page', ['page' => $page]);
    }
    
    public function sendContact(Request $request) {
        $user =array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content,
        );
        Mail::send('mail.contact', ['user' => $user], function ($m) use ($user) {
            $m->from('contact@languages.vn', 'Languages.vn');

            $m->to('mutdwlt@gmail.com')->subject('FORM LIÊN HỆ');
        });
        return view('success');
    }

    public function success(){
        return view('success');
    }
    public function Recruit() {
        $page = DB::table('pages')->where('keyword', 'recruit')->first();
        return view('recruit', ['page' => $page]);
    }
    public function RecruitTeaching() {
        $page = DB::table('pages')->where('keyword', 'recruit_teaching')->first();
        return view('recruit', ['page' => $page]);
    }
    public function RecruitIntern() {
        $page = DB::table('pages')->where('keyword', 'recruit_intern')->first();
        return view('recruit', ['page' => $page]);
    }
    public function RecruitOfficer() {
        $page = DB::table('pages')->where('keyword', 'recruit_officer')->first();
        return view('recruit', ['page' => $page]);
    }

    public function CommonQuestion() {
        $page = DB::table('pages')->where('keyword', 'question')->first();
        return view('common_question', ['page' => $page]);
    }

    public function CoursesTeen() {
        $course = DB::table('pages')->where('keyword', 'course_teen')->first();
        return view('course', ['course' => $course]);
    }

    public function CoursesKinder() {
        $course = DB::table('pages')->where('keyword', 'course_kinder')->first();
        return view('course', ['course' => $course]);
    }

    public function CoursesChild() {
        $course = DB::table('pages')->where('keyword', 'course_child')->first();
        return view('course', ['course' => $course]);
    }

    public function CoursesCommunication() {
        $course = DB::table('pages')->where('keyword', 'course_communication')->first();
        return view('course', ['course' => $course]);
    }

    public function CoursesChuyende() {
        $course = DB::table('pages')->where('keyword', 'course_chuyen-de')->first();
        return view('course', ['course' => $course]);
    }
    public function CoursesRegistration(){
        return view('course-registration');
    }
    public function sendRegistration(Request $request){
        $user =array(
            'name' => $request->name,
            'birth' => $request->birth,
            'email' => $request->email,
            'phone' => $request->phone,
            'course' => $request->course,
            'school' => $request->school,
            'address' => $request->address
        );
        Mail::send('mail.registration', ['user' => $user], function ($m) use ($user) {
            $m->from('contact@languages.vn', 'Languages.vn');

            $m->to('mutdwlt@gmail.com')->subject('FORM ĐĂNG KÝ');
        });
        return view('success');
    }

    public function test() {
        $form = \DataForm::create();
        $form->text('title', 'Title');
        $form->textarea('body', 'Body')->rule('required');
        $form->submit('Save');

        $form->passed(function() use ($form) {
            dd(\Input::all());
        });

        return view('test', compact('form'));
    }

    public function anyForm() {
        $form = \DataForm::source(Article::find(1));

        $form->add('title', 'Title', 'text')->rule('required|min:5');
        $form->add('content', 'content', 'textarea');

        //belongs to
//        $form->add('author_id','Author','select')->options(Author::lists('firstname', 'id')->all());
        //belongs to many (field name must be the relation name)
//        $form->add('categories','Categories','checkboxgroup')->options(Category::lists('name', 'id')->all());
//        $form->add('photo','Photo', 'image')->move('uploads/demo/')->fit(240, 160)->preview(120,80);
//        $form->add('color','Color','colorpicker');
//        $form->add('public','Public','checkbox');

        $form->submit('Save');

        $form->saved(function () use ($form) {
            $form->message("ok record saved");
            $form->link("/test", "back to the form");
        });

        return view('test', compact('form'));
    }

    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendEmailReminder() {
        $user = array("name" => "Ngo Van Thinh", "email" => "mutdwlt@gmail.com");
        Mail::raw('Laravel with Mailgun is easy!', function($message) {
            $message->to('mutdwlt@gmail.com');
        });
    }
    
    public function news(){
        return view('news.index');
    }

}
