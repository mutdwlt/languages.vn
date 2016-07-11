@extends('templates.master')
@section('title',$course->title)
@section('css')
    <link rel="stylesheet" type="text/css" href="/css/single-page.css">
@stop
@section('content')
<style>
    #khoa-hoc>a{
        background-color: #1b1b1b;
        color: white!important;
    }
    .right_nav li a{
        background: url("/image/course_tab_icon.png") no-repeat scroll 265px -45px transparent;
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
    .right_nav li a.dang-ky-truc-tuyen{
        background: url("/image/sidebar_title.png") no-repeat scroll 0 center transparent!important;
        border-bottom: medium none!important;
        color: #242021!important;
        display: block;
        font-size: 24px!important;
        height: 66px!important;
        line-height: normal!important;
        margin-left: -17px;
        padding: 6px 17px 0 70px!important;
        text-transform: uppercase;
        vertical-align: middle;
    }
</style>
<div class="container">
    <div class='topContent'></div>
    <div class="mainContent">
        <div class="contents fl">
            <?php
                echo $course->content;
            ?>
        </div>
        <div class="sidebar fl">
            <div class='courseMenu'>
                <ul class='right_nav tab_navigation'>
                    <li>
                        <a class='dang-ky-truc-tuyen' href="{{ LaravelLocalization::getLocalizedURL(null,'courses/online-registration') }}">
                            Đăng ký trực tuyến
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'courses/english-for-kinder') }}">
                            Tiếng Anh Mẫu Giáo
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'courses/english-for-child') }}">
                            Tiếng Anh Thiếu Nhi
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'courses/english-for-teens') }}">
                            Tiếng Anh Thiếu Niên
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'courses/communication-english') }}">
                            Tiếng Anh Giao Tiếp
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'courses/chuyen-de') }}">
                            Các khóa học Chuyên Đề
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

