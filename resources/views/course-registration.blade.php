@extends('templates.master')
@section('title', trans('nav.online-registration'))
@section('css')
<link rel="stylesheet" type="text/css" href="/css/single-page.css">
@stop
@section('content')
<style>
    .form-group p{
        font-size: 12px;
        margin-top: 5px;
    }
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
            <h2 style="margin-bottom: 20px">{{trans('nav.online-registration')}}</h2>
            <p>Cám ơn bạn đã đăng ký khóa học tại Languages.vn. Chúng tôi sẽ liên lạc lại với bạn ngay sau khi nhận được bản đăng ký thông tin.</p>
            <form class="form-horizontal" action="/courses/sendRegistration" method="post" role="form" accept-charset="UTF-8">
                <h3>Thông tin bắt buộc</h3>
                <p>Vui lòng điền đầy đủ và chính xác thông tin của bạn khi đăng ký các khóa học tại Languages.vn</p>
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name*:</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="name" class="form-control" name="name" placeholder="Your name" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="birth">Birth*:</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="date" class="form-control" name="birth" placeholder="" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email*:</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="true">
                        <p>Với đăng ký khóa Tiếng Anh Trẻ em, vui lòng điền địa chỉ thư điện tử của bố hoặc mẹ</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Phone*:</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="phone" class="form-control" name="phone" placeholder="Your phone number" required="true">
                        <p>Với đăng ký khóa Tiếng Anh Trẻ em, vui lòng điền số điện thoại của bố hoặc mẹ</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Course*:</label>
                    <div class="col-sm-10 col-md-6">
                        <select class="form-control" name="course">
                            <option value='0'>select</option>
                            <option value='1'>Tieng Anh Mau Giao</option>
                            <option value='2'>Tieng Anh Thieu Nhi</option>
                            <option value='3'>Tieng Anh Thieu Nien</option>
                            <option value='4'>Tieng Anh Giao Tiep</option>
                        </select>
                    </div>
                </div>
                <h3>Thông tin không bắt buộc</h3>
                <p>Thông tin bổ sung để chúng tôi có thể hiểu được hơn về bạn.</p>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="school">Trường:</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" class="form-control" name="school" placeholder="Your school">
                        <p>Với đăng ký khóa Tiếng Anh Trẻ em, vui lòng điền tên trường con đang theo học</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="address">Địa chỉ:</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" class="form-control" name="address" placeholder="Your address">
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

