@extends('templates.master')
@section('title', trans('nav.location-page'))
@section('css')
<link rel="stylesheet" type="text/css" href="/css/single-page.css">
<style>
    
    .right_nav li a{
        background: url("/image/course_tab_icon.png") no-repeat scroll 265px -150px transparent;
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
            <h2>{{trans('nav.location-page')}}</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465.1663570457707!2d105.84581163233472!3d21.139227508265673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8f93913ed31ca64f!2sTrung+t%C3%A2m+anh+ng%E1%BB%AF+Languages.vn!5e0!3m2!1svi!2s!4v1468158971773" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="sidebar fl">
            <div class='courseMenu'>
                <ul class='right_nav tab_navigation'>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'contact') }}">
                            {{trans('nav.contact')}}
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL(null,'our-location') }}">
                            {{trans('nav.location-page')}}
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

