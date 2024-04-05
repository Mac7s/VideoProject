<h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
        <div class="row">

            @foreach ($videos as $video)
                <x-video-card :video="$video" />
            @endforeach
            
        </div>
        