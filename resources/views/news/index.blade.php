@extends('templates.master')
@section('title',trans('nav.new-event'))
@section('css')
<link rel="stylesheet" type="text/css" href="/css/single-page.css">
<style>
    .news_page_featured{
        padding: 7px;
        background-color: #cbcbcb;
        height: 324px;
    }
    .ul_for_post{
        width: 315px!important;
        float: right!important;
        padding: 0!important;
        margin: 0!important;
    }
    .inline-block{
        display: inline-block;
    }
    .carousel-inner{
        width: 650px!important;
        float: left;
        background-color: #cbcbcb;
    }
    .news_container{
        padding: 50px 0!important;
    }
    #tin-tuc a{
        background-color: #1b1b1b;
        color: white!important;
    }
    .ul_for_post li{
        padding: 5px 5px 5px 25px!important;
        overflow: hidden!important;
    }
    .li_for_post.active{
        background: url('/image/news-hover.png')!important;
    }
    .ul_for_post li>a{
        display: block;
        float: left;
    }
    .ul_for_post li img{
        padding: 2px;
        background-color: white;
    }
    .li_for_post h4{
        width: 170px;
        height: 40px;
        float: right;
        overflow: hidden;
        margin: 0;
    }
    .li_for_post h4 a{
        font-size: 14px;
        line-height: 20px;
        color: black;
    }
    .li_for_post p{
        width: 170px;
        height: 44px;
        margin: 3px 0 0 0;
        display: block;
        overflow: hidden;
        float: right;
        font-family: Arial;
        font-size: 12px;
        line-height: 15px;
    }
</style>
@stop
@section('content')
<div class="container news_container">
    <div id="myCarousel" class="carousel news_page_featured" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/image/news_0.png">
                <div class="carousel-caption">
                    <h3>Thái Lan điều máy bay tìm ngư dân Việt mất tích sau vụ bắn tàu cá Thái Lan điều máy bay tìm ngư dân Việt mất tích sau vụ bắn tàu cá</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice. The atmosphere in Chania has a touch of Florence and Venice. The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
            </div>

<!--            <div class="item">
                <img src="/image/news_1.jpg">
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
            </div>

            <div class="item">
                <img src="/image/news_1.jpg" alt="Flower">
                <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                </div>
            </div>-->
        </div>
        <!-- Indicators -->
        <ol class="ul_for_post">
            <li data-target="#myCarousel" data-slide-to="0" class="li_for_post active">
                <a>
                    <img src="/image/thumb_featured.png">
                </a>
                <h4>
                    <a>Thái Lan điều máy bay tìm ngư dân Việt mất tích sau vụ bắn tàu cá Thái Lan điều máy bay tìm ngư dân Việt mất tích sau vụ bắn tàu cá</a>
                </h4>
                <p>
                    Hải quân Thái Lan điều một số máy bay và tàu tìm kiếm ngư dân Việt Nam mất tích sau khi nổ súng bắn các tàu cá với cáo buộc xâm phạm trái phép.
                </p>
            </li>
<!--            <li data-target="#myCarousel" data-slide-to="1" class="li_for_post">
                <a>
                    <img src="/image/thumb_featured.png">
                </a>
                <h4>
                    <a>Thái Lan điều máy bay tìm ngư dân Việt mất tích sau vụ bắn tàu cá Thái Lan điều máy bay tìm ngư dân Việt mất tích sau vụ bắn tàu cá</a>
                </h4>
                <p>
                    Hải quân Thái Lan điều một số máy bay và tàu tìm kiếm ngư dân Việt Nam mất tích sau khi nổ súng bắn các tàu cá với cáo buộc xâm phạm trái phép.
                </p>
            </li>
            <li data-target="#myCarousel" data-slide-to="2" class="li_for_post">
                <a>
                    <img src="/image/thumb_featured.png">
                </a>
                <h4>
                    <a>Thái Lan điều máy bay tìm ngư dân Việt mất tích sau vụ bắn tàu cá Thái Lan điều máy bay tìm ngư dân Việt mất tích sau vụ bắn tàu cá</a>
                </h4>
                <p>
                    Hải quân Thái Lan điều một số máy bay và tàu tìm kiếm ngư dân Việt Nam mất tích sau khi nổ súng bắn các tàu cá với cáo buộc xâm phạm trái phép.
                </p>
            </li>-->
        </ol>
    </div>
</div>
@stop