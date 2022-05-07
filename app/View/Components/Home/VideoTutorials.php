<?php

namespace App\View\Components\Home;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => 'JNhmEoBsZ48',
                'title' => 'Laravel and Tailwind and Vue3',
                'description' => 'Laravel and Tailwind and Vue3',
            ],
            [
                'videoId' => 'JNhmEoBsZ48',
                'title' => 'Laravel and Yii2 and Bootstrap',
                'description' => 'Laravel and Yii2 and Bootstrap',
            ],
            [
                'videoId' => 'JNhmEoBsZ48',
                'title' => 'PHP and Tailwind and Bootstrap',
                'description' => 'Laravel and Yii2 and Bootstrap',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
