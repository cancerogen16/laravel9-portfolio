<?php

namespace App\View\Components\Home;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind', 'Vue3'],
                'title' => 'Laravel and Tailwind and Vue3',
                'image' => 'https://cdn.tailgrids.com/1.0/assets/images/portfolio/portfolio-01/image-01.jpg',
                'github' => 'laravel-link',
            ],
            [
                'category' => ['Laravel', 'Yii2', 'Bootstrap'],
                'title' => 'Laravel and Yii2 and Bootstrap',
                'image' => 'https://cdn.tailgrids.com/1.0/assets/images/portfolio/portfolio-01/image-02.jpg',
                'github' => 'laravel-link',
            ],
            [
                'category' => ['PHP', 'Tailwind', 'Bootstrap'],
                'title' => 'PHP and Tailwind and Bootstrap',
                'image' => 'https://cdn.tailgrids.com/1.0/assets/images/portfolio/portfolio-01/image-03.jpg',
                'github' => 'laravel-link',
            ],
            [
                'category' => ['Yii2', 'Tailwind', 'Vue3'],
                'title' => 'Yii2 and Tailwind and Vue3',
                'image' => 'https://cdn.tailgrids.com/1.0/assets/images/portfolio/portfolio-01/image-04.jpg',
                'github' => 'laravel-link',
            ],
            [
                'category' => ['Bootstrap', 'PHP', 'VueJs'],
                'title' => 'Bootstrap and PHP and Vue3',
                'image' => 'https://cdn.tailgrids.com/1.0/assets/images/portfolio/portfolio-01/image-05.jpg',
                'github' => 'laravel-link',
            ],
            [
                'category' => ['Yii2', 'VueJs'],
                'title' => 'Yii2 and VueJs',
                'image' => 'https://cdn.tailgrids.com/1.0/assets/images/portfolio/portfolio-01/image-06.jpg',
                'github' => 'laravel-link',
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
