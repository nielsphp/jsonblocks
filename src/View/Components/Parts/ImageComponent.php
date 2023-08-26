<?php

namespace Nielsphp\JsonBlocks\View\Components\Parts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Nielsphp\JsonBlocks\Viewer;

class ImageComponent extends Component
{
    /**
     * The content.
     *
     * @var string
     */
    public \stdClass $info;

    /**
     * The viewer instance.
     *
     * @var string
     */
    public Viewer $v;

    public string $alt;
    public string $src;
    public string $content;
    
    /**
     * Create a new component instance.
     */
    public function __construct($info = new \stdClass, $model = []) {
        $this->info     = $info;
        $this->alt      = $info->alt ?? '';
        $this->src      = $info->src ?? '';
        $this->content  = $info->content ?? '';
        $this->v        = new Viewer();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('jsonblocks::components.parts.image');
    }
}
