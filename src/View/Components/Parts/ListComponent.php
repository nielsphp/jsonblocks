<?php

namespace Nielsphp\JsonBlocks\View\Components\Parts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Nielsphp\JsonBlocks\Viewer;

class ListComponent extends Component
{
    /**
     * The content.
     *
     * @var string
     */
    public \stdClass    $info;

    /**
     * The viewer instance.
     *
     * @var string
     */
    public Viewer       $v;

    public array        $list;
    public string       $type;

    /**
     * Create a new component instance.
     */
    public function __construct($info = new \stdClass, $model = []) {
        $this->info     = $info;
        $this->list     = $info->content ?? [];
        $this->type     = $info->type ?? 'ul';
        $this->v        = new Viewer();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('jsonblocks::components.parts.list');
    }
}
