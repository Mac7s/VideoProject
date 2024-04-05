<div id="main-category">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12">
                <ul class="main-category-menu">
                    @foreach ($categories as $category)
                    <li class="color-2"><a href="{{route('categories.videos.index',$category->name)}}"><i class="{{$category->logo}}"></i>{{$category->name}}</a></li>
                    @endforeach

                </ul>
            </div><!-- // col-md-14 -->
        </div><!-- // row -->
    </div><!-- // container-full -->
</div>
