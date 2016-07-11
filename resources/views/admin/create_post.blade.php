@extends('rapyd::demo.demo')

@section('title','DataEdit')

@section('body')

<h1>DataEdit</h1>
<p>

    {!! $edit !!}


</p><input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime">

<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script>  
@stop