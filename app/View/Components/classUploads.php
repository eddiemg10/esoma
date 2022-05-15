<?php

namespace App\View\Components;

use Illuminate\View\Component;

class classUploads extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $uploads;

    public function __construct($uploads)
    {
        $this->uploads = $uploads;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.class-uploads');
    }
}
