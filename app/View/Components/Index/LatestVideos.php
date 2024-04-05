<?php

namespace App\View\Components\Index;

use Illuminate\View\Component;

class LatestVideos extends Component
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
        return view('components.index.latest-videos');
    }
}
