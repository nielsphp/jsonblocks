<?php

namespace Nielsphp\JsonBlocks\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Nielsphp\JsonBlocks\Viewer;

class ContentComponent extends Component
{
    /**
     * The content.
     *
     * @var string
     */
    public \stdClass $content;

    /**
     * Other relevant info (e.g. date)
     *
     * @var string
     */
    public \stdClass $model;

    /**
     * The viewer instance.
     *
     * @var string
     */
    public Viewer $v;

    /**
     * Create a new component instance.
     */
    public function __construct($content = new \stdClass, $model = new \stdClass) {
        $this->content  = $content;
        $this->model    = $model;
        $this->v        = new Viewer();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('jsonblocks::components.content');
    }
}
