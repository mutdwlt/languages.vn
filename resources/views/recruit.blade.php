@extends('templates.master')
@section('title', trans('nav.recruitment'))
@section('css')
<link rel="stylesheet" type="text/css" href="/css/single-page.css">
<style>
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
            <?php
            echo $page->content;
            ?>
        </div>
        <div class="sidebar fl">
            <div class='courseMenu'>
                <ul class='right_nav tab_navigation'>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'recruit') }}">
                            {{trans('nav.recruit-gioi-thieu')}}
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'recruit/teaching-assistant') }}">
                            {{trans('nav.giao-vien')}}
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'recruit/internship') }}">
                            {{trans('nav.tro-giang')}}
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'recruit/admin-officer')}}">
                            {{trans('nav.nhan-vien-van-phong')}}
                        </a>
                    </li>
                </ul>
            </div>
            @include('include.facebook_small')
        </div>
        <div class='bottomContent'></div>
    </div>
    @stop