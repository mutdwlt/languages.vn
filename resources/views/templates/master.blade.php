<html>
    <head>
        <title>Languages.vn - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Facilitating Global Citizenship!">
        <meta name="author" content="Ngô Văn Thịnh - mutdwlt">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        @yield('css')
        <link rel="shortcut icon" type="image/png" href="/image/favicon-32x32.png"/>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="top-header">
                    <div class="container">
                        <div class="fl">
                            <ul>
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL(null,'/contact') }}">
                                        {{trans('nav.contact')}}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL(null,'/recruit') }}">
                                        {{trans('nav.recruitment')}}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL(null,'/common-question') }}">
                                        {{trans('nav.common-question')}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="fr">
                            <a class="facebook_icon fl" href="https://www.facebook.com/languages.vn1" target="blank" data-toggle="tooltip" title="{{trans('nav.facebook')}}">
                                <img src="/image/fb-art.jpg">
                            </a>
                            @if(LaravelLocalization::getCurrentLocale() == 'vi' )
                            <a class="lang-switcher fl" rel="alternate" hreflang="en" href="{{LaravelLocalization::getLocalizedURL('en') }}" data-toggle="tooltip" title="{{trans('nav.switch-lang')}}">
                                <img src="/image/eng.png">
                            </a>
                            @else
                            <a class="lang-switcher fl" rel="alternate" hreflang="en" href="{{LaravelLocalization::getLocalizedURL('vi') }}" data-toggle="tooltip" title="{{trans('nav.switch-lang')}}">
                                <img src="/image/vie.png">
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div id="logo-header">
                    <div class="container">
                        <a class="logo" href="{{ LaravelLocalization::getLocalizedURL(null,'/') }}">
                            <img src="/image/languages.vn.png">
                        </a>
                        <h2 class="slogan">Facilitating Global Citizenship</h2>
                    </div>
                </div>
                <div id="mainNav">
                    <div class="container">
                        <ul id="menu">
                            <li id="gioi-thieu-chung">
                                <a class="parent-li">
                                    {{trans('nav.about')}}
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a>
                                            Chúng tôi là ai
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Động lực thúc đẩy hoạt động
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Đội ngũ giáo viên
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Hệ thống Languages.vn
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li id="tin-tuc">
                                <a>
                                    {{trans('nav.new-event')}}
                                </a>
                            </li>
                            <li id="khoa-hoc">
                                <a class="parent-li">
                                    {{trans('nav.courses')}}
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a>
                                            Tiếng Anh Mẫu Giáo
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Tiếng Anh Thiếu Nhi
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Tiếng Anh Thiếu Niên
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Tiếng Anh Giao Tiếp
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Các khóa học chuyên đề
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="content">
                @yield('content')
            </div>
            <div id="footer">
                <div class="blockFooter">
                    <div class="container">
                        <div class="block fl">
                            <h3>
                                Giới thiệu
                            </h3>
                            <ul>
                                <li>
                                    <a>
                                        Chúng tôi là ai
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Động lực thúc đẩy hoạt động
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Đội ngũ giáo viên
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block fl">
                            <h3>
                                Khóa học Tiếng Anh
                            </h3>
                            <ul>
                                <li>
                                    <a>
                                        Tiếng Anh Mẫu Giáo
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Tiếng Anh Thiếu Nhi
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Tiếng Anh Thiếu Niên
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Tiếng Anh Giao Tiếp
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Các khóa học chuyên đề
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block fl">
                            <h3>
                                Tuyển dụng
                            </h3>
                            <ul>
                                <li>
                                    <a>
                                        Vị trí giáo viên
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Các vị trí khác
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block fl" style="padding-top: 49px">
                            <ul>
                                <li>
                                    <a>
                                        Bản đồ Languages.vn tại Hà Nội
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Chính sách bảo mật
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Sơ đồ trang
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
$('#gioi-thieu-chung').hover(function () {
    $('#gioi-thieu-chung ul.sub-menu').toggle();
});
$('#gioi-thieu-chung ul.sub-menu').hover(function () {
    $('li#gioi-thieu-chung').css("background-color", "#1b1b1b");
    $('li#gioi-thieu-chung .parent-li').css("color", "white");
}, function () {
    $('li#gioi-thieu-chung').css("background-color", "transparent");
    $('li#gioi-thieu-chung .parent-li').css("color", "#1b1b1b");
});
$('#khoa-hoc ul.sub-menu').hover(function () {
    $('li#khoa-hoc').css("background-color", "#1b1b1b");
    $('li#khoa-hoc .parent-li').css("color", "white");
}, function () {
    $('li#khoa-hoc').css("background-color", "transparent");
    $('li#khoa-hoc .parent-li').css("color", "#1b1b1b");
});
$('#khoa-hoc').hover(function () {
    $('#khoa-hoc ul.sub-menu').toggle();
});

$(function () {
    $('#carousel-example-generic').carousel();
});
        </script>
    </body>
</html>

