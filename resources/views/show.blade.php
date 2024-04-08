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
                                src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                                type="video/mp4">
                        </video>
                    </div><!-- // video-code -->

                    <div class="video-share">
                        <ul class="like">
                            <li><a class="deslike" href="#">1250 <i class="fa fa-thumbs-down"></i></a></li>
                            <li><a class="like" href="#">1250 <i class="fa fa-thumbs-up"></i></a></li>
                        </ul>
                        <ul class="social_link">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a class="youtube" href="#"><i class="fa fa-youtube-play"
                                        aria-hidden="true"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
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
                            <span class="subscribers">436,414 اشتراک</span>
                        </div>
                        <a href="#" class="subscribe">اشتراک</a>
                    </div>
                    <!-- // Chanels Item -->


                    <!-- Comments -->
                    <div id="comments" class="post-comments">
                        <h3 class="post-box-title"><span>19</span> نظرات</h3>
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
                            <a href="#"><img src="{{$video->thumbnail}}" alt=""></a>
                        </div>
                        <a href="#" class="title">{{$video->title}} </a>
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