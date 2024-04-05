<?php

namespace App\View\Components\Index;

use Illuminate\View\Component;

class MostLikedVideos extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $videos)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.index.most-liked-videos');
    }
}
