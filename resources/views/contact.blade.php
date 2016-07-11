@extends('templates.master')
@section('title', trans('nav.contact'))
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
            <?php
            echo $page->content;
            ?>
            <h2>Liên hệ trực tuyến</h2>
            <form class="form-horizontal" action="/contact/sendmail" method="post" role="form" accept-charset="UTF-8">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="name" class="form-control" name="name" placeholder="Your name" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Phone:</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="phone" class="form-control" name="phone" placeholder="Your phone number" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="content">Content:</label>
                    <div class="col-sm-10 col-md-6">
                        <textarea class="form-control" rows="5" name="content" required="true"></textarea>
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
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

