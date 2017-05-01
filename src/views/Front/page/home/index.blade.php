@extends('manage::front.masterpage')

@section('title')
	Home
@stop

@section('icon')
    <link rel="icon" type="image/png" href="source/manage/home-icon.png" />
@stop

@section('style')
@stop

@section('script')
@stop

@section('content')
<div class="type-20">
    <div id="container" >
        <div id="content" role="main" class="container">
            <!-- .learnpress-content -->
            <div class="learnpress-content">
            	@include('manage::front.page.home.partial.title_content')
            	@include('manage::front.page.home.partial.home_content')
            </div>
        </div>
    </div>
</div>
@stop