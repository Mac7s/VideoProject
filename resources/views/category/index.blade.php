@extends('layout')
@section('content')
<div class="site-output">
    <div id="all-output" class="col-md-12">
        <h1 class="new-video-title"><i class="fa fa-bolt"></i> {{$categoryName}}</h1>
        <div class="row">
            @foreach ($videos as $video)
                <x-video-card :video="$video" />
            @endforeach
        </div>
        
    </div>
    <!-- // row -->
</div>


@endsection