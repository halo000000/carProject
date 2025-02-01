<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class whatWeDoSection extends Component
{
    /**
     * Create a new component instance.
     */

     public $title;
     public $aboveTitle;
    public $description;
    public $image;
    public $imageAlt;
    public $buttonText;
    public $buttonLink;
    public function __construct($title, $aboveTitle, $description, $image, $imageAlt, $buttonText, $buttonLink)
    {
        //
        $this->title = $title;
        $this->aboveTitle = $aboveTitle;
        $this->description = $description;
        $this->image = $image;
        $this->imageAlt =   $imageAlt;
        $this->buttonText = $buttonText;
        $this->buttonLink = $buttonLink;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.what-we-do-section');
    }
}
