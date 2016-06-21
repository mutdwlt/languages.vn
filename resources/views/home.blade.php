@extends('templates.master')
@section('title', 'Home')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/home.css">
@stop
@section('content')
<div class="container">
    <div class="slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a>
                        <img src="/image/banner3.png" alt="Languages.vn">
                    </a>
                </div>
                <div class="item">
                    <a>
                        <img src="/image/banner1.jpg" alt="Languages.vn">
                    </a>
                </div>
                <div class="item">
                    <a>
                        <img src="/image/banner2.jpg" alt="Languages.vn">
                    </a>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="mainContent">
        <div class="contents fl">
            
        </div>
        <div class="sidebar fl">
            
        </div>
    </div>
</div>
@stop

