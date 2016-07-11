@extends('templates.master')
@section('title', 'test')
@section('css')
@stop
@section('content')
<div class="container">
    <div class="mainContent">
        <div class="contents fl">

            <h1>DataForm</h1>
                {!! $form !!}
            <script type="text/javascript">
                var editor = CKEDITOR.replace('content',{
                    language:'vi',
                    filebrowserImageBrowseUrl   :   '/js/plugin/ckfinder/ckfinder.html?Type=Images',
                    filebrowserFlashBrowseUrl   :   '/js/plugin/ckfinder/ckfinder.html?Type=Flash',
                    filebrowserImageUploadUrl   :   '/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl   :   '/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                })
            </script>
        </div>
        <div class="sidebar fl">

        </div>
    </div>
</div>
@stop

