@extends('layout')
@section('content')
<div class="site-output">
    <!-- // col-md-2 -->
    <div id="all-output" class="col-md-12">
        <div class="row">
            <!-- Watch -->
            <div class="col-md-8">
                <div id="watch">

                    <!-- Video Player -->
                    <h1 class="video-title">{{$video->title}}</h1>
                    <div class="video-code">
                        <video controls style="height: 100%; width: 100%;">
                            <source
                                src="{{asset($video->url)}}"
                                type="video/mp4">
                        </video>
                    </div><!-- // video-code -->

                    <div class="video-share">
                        <ul class="like">
                            <li><a class="deslike" href="#">1250 <i class="fa fa-thumbs-down"></i></a></li>
                            <li><a class="like" href="#">1250 <i class="fa fa-thumbs-up"></i></a></li>
                        </ul>
                        <ul class="social_link">
                            <li>
                                <a href="">  
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                                      </svg>
                                </a>
                            </li>
                            </ul><!-- // Social -->
                    </div><!-- // video-share -->
                    <!-- // Video Player -->


                    <!-- Chanels Item -->
                    <div class="chanel-item">
                        <div class="chanel-thumb">
                            <a href="#"><img src="demo_img/ch-1.jpg" alt=""></a>
                        </div>
                        <div class="chanel-info">
                            <a class="title" href="#">{{$video->videoOwner()}}</a>
                        </div>
                    </div>
                    <!-- // Chanels Item -->


                    <!-- Comments -->
                    <div id="comments" class="post-comments">
                        <h3 class="post-box-title"><span>{{$comments->count()}}</span> نظرات</h3>
                        <ul class="comments-list">
                            @foreach ($comments as $comment)
                                <li>
                                    <div class="post_author">
                                        <div class="img_in">
                                            <a href="#"><img src="demo_img/c1.jpg" alt=""></a>
                                        </div>
                                        <a href="#" class="author-name">{{$comment->user->name}}</a>
                                        <time datetime="2017-03-24T18:18">{{$comment->created_at}}</time>
                                    </div>
                                    <p>
                                        {{$comment->description}}
                                    </p>
                                    <a href="#" class="reply">پاسخ</a>
                                    <ul class="children">
                                        @if (!$comment->replies()->isEmpty())
                                        @foreach ($comment->replaies() as $cmt)
                                        <li>
                                            <div class="post_author">
                                                <div class="img_in">
                                                    <a href="#"><img src="demo_img/c2.jpg" alt=""></a>
                                                </div>
                                                <a href="#" class="author-name">{{$cmt->user->name}}</a>
                                                <time datetime="2017-03-24T18:18">{{$cmt->created_at}}</time>
                                            </div>
                                            <p>
                                                {{$cmt->description}}    
                                            </p>
                                            <a href="#" class="reply">پاسخ</a>
                                        </li>
                                            
                                        @endforeach    
                                        @endif
                                        
                                    </ul>


                                </li>
                                
                            @endforeach

                        </ul>


                        <h3 class="post-box-title">ارسال نظرات</h3>
                        <form action="{{route('comments.store',['video'=>$video])}}" method="POST">
                            @csrf
                            <textarea name="description" class="form-control" rows="8" id="Message" placeholder="پیام"></textarea>
                            <button type="submit" id="contact_submit" class="btn btn-dm">ارسال پیام</button>
                        </form>
                    </div>
                    <!-- // Comments -->


                </div><!-- // watch -->
            </div><!-- // col-md-8 -->
            <!-- // Watch -->

            <!-- Related Posts-->
            <div class="col-md-4">
                <div id="related-posts">

                    @foreach ($related_videos as $video)
                    <!-- video item -->
                    <div class="related-video-item">
                        <div class="thumb">
                            <small class="time">{{$video->lenght}}</small>
                            <a href="{{route('videos.show',['video'=>$video])}}"><img src="{{$video->thumbnail}}" alt=""></a>
                        </div>
                        <a href="{{route('videos.show',['video'=>$video])}}" class="title">{{$video->title}} </a>
                        <a class="channel-name" href="#">{{$video->videoOwner()}}<span>
                                <i class="fa fa-check-circle"></i></span></a>
                    </div>
                    <!-- // video item -->
/                        
                    @endforeach

                </div>
            </div><!-- // col-md-4 -->
            <!-- // Related Posts -->
        </div><!-- // row -->
    </div>
</div>
@endsection