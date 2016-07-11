@extends('templates.master')
@section('title', trans('nav.common-question'))
@section('css')
<link rel="stylesheet" type="text/css" href="/css/single-page.css">
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
            @include('include.facebook')
        </div>

    </div>
    <div class='bottomContent'></div>
</div>
@stop