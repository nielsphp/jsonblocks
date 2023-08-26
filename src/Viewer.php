<?php

namespace Nielsphp\JsonBlocks;

use \GrahamCampbell\Markdown\Facades\Markdown;

class Viewer {

    /**
     * Convert Markdown To Html with help of the Markdown-library
     *
     * @var string (HTML)
     */
    public function MDtoHTML(string $content = ''):string
    {
        return Markdown::convertToHtml($content);
    }

    /**
     * Check if a raw html tag is allowed, if not change into default element
     *
     * @var string (HTML)
     */
    public function cleanTag(string $tag = ''):string 
    {
        if(in_array($tag, config('jsonblocks.allowed_tags', []))) {
            return $tag;
        }
        return config('jsonblocks.default_tag', 'div');
    }

    /**
     * Check if a component is supported
     *
     * @var bool (HTML)
     */
    public function isComponentSupported(string $name):bool
    {
        if(in_array($name, config('jsonblocks.supported_components', []))) {
            return true;
        }
        return false;
    }

    /**
     * Render attributes to add
     *
     * @var bool (HTML)
     */
    public function renderAttributes($attributes = []):string 
    {
        $string = '';
        if(empty($attributes)) {
            return '';
        }
        foreach($attributes as $name => $content) {
            if(in_array($name, config('jsonblocks.supported_attributes', []))) {
                $string .= ' '.$name.'="'.htmlspecialchars($content).'"';
            }
        }
        return $string;
    }
}