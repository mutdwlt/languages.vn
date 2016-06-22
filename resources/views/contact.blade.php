@extends('templates.master')
@section('title', trans('nav.contact'))
@section('css')

@stop
@section('content')
<div class="container">
    <div class="mainContent">
        <div class="contents fl">
            <?php
            foreach ($users as $user) {
                echo $user->name;
            }
            ?>
        </div>
        <div class="sidebar fl">

        </div>
    </div>
</div>
@stop

