@extends('manage::front.masterpage')

@section('title')
	Detail
@stop

@section('icon')
    <link rel="icon" type="image/png" href="source/manage/details-icon.png" />
@stop

@section('style')
    {!! HTML::style('source/front/css/content_right_sidebar.css') !!}
    {!! HTML::style('source/front/css/learnpress-content.css') !!}
@stop

@section('script')
@stop

@section('content')
    <div class="content_right_sidebar">
        <div id="content" class="container">
            <!-- LearnPress-content -->
            @include('manage::front.page.detail.partial.title_content')
            <!--Content-->
            <div class="row">
                @include('manage::front.page.detail.partial.project_management')
                @include('manage::front.page.detail.partial.popular_course')
            </div>              
        </div>
    </div>
@stop