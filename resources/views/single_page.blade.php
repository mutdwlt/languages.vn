@extends('templates.master')
@section('title', $page->title)
@section('css')
<link rel="stylesheet" type="text/css" href="/css/single-page.css">
<style>
    #gioi-thieu-chung>a{
        background-color: #1b1b1b;
        color: white!important;
    }
    .right_nav li a{
        background: url("/image/course_tab_icon.png") no-repeat scroll 265px -100px transparent;
        border-bottom: 1px dotted #D9D9D9;
        color: #231F20;
        display: block;
        font-size: 16px;
        font-weight: bold;
        line-height: 18px;
        padding: 15px 45px 15px 0;
        cursor: pointer;
        font-family: Georgia,times new roman,serif;
    }
</style>
@stop
@section('content')
<div class="container">
    <div class='topContent'></div>
    <div class="mainContent">
        <div class="contents fl">
            <h2 style="margin-bottom: 20px">
                <?php
                echo $page->title;
                ?>
            </h2>
            <div class="clearfix"></div>
            <?php
            echo $page->content;
            ?>

        </div>
        <div class="sidebar fl">
            <div class='courseMenu'>
                <ul class='right_nav tab_navigation'>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'about-us/who-we-are') }}">
                            Chúng tôi là ai
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'about-us/learning-enviroment') }}">
                            {{trans('nav.learning_enviroment')}}
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'about-us/our-motivation') }}">
                            Động lực thúc đẩy hoạt động
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'about-us/teacher-info') }}">
                            Đội ngũ giáo viên
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'about-us/our-center') }}">
                            Hệ thống Languages.vn
                        </a>
                    </li>
                </ul>
            </div>
            @include('include.facebook_small')
        </div>

    </div>
    <div class='bottomContent'></div>
</div>
@stop

