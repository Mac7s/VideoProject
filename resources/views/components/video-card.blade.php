<div class="col-lg-2 col-md-4 col-sm-6">
    <div class="video-item">
        <div class="thumb">
            <div class="hover-efect"></div>
            <small class="time">{{$video->lenght}}</small>
            <a href="{{route('videos.show',$video->slug)}}"><img src="{{$video->thumbnail}}" alt=""></a>
        </div>
        <div class="video-info">
            <a href="{{route('videos.show',$video->slug)}}" class="title">{{$video->title}} </a>
            <a class="channel-name" href="#">{{$video->videoOwner()}}<span>
                    <i class="fa fa-check-circle"></i></span></a>
            <span class="views"><i class="fa fa-eye"></i>{{$video->view_count}}بازدید </span>
            <span class="date"><i class="fa fa-clock-o"></i>{{$video->created_at}} </span>
        </div>
    </div>
</div>