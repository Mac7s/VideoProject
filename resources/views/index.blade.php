@extends('layout')
@section('content')
<div class="site-output">
    <div id="all-output" class="col-md-12">
        <x-index.latest-videos :videos="$latestVideos" /> 
        <x-index.most-viewed-videos :videos="$mostViewedVideos" />
        <x-index.most-liked-videos :videos="$mostPopularVideos"/>
    </div><!-- // row -->



</div>


@endsection