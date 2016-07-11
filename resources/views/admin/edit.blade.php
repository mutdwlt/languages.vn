@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edit Page</h1>
    <div class="col-sm-10">
        {!! $edit !!}
    </div>  

    <script type="text/javascript">
        var editor = CKEDITOR.replace('content', {
            language: 'vi',
            filebrowserImageBrowseUrl: '/js/plugin/ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl: '/js/plugin/ckfinder/ckfinder.html?Type=Flash',
            filebrowserImageUploadUrl: '/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: '/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        })
    </script>
</div>

@endsection

