@foreach ($content as $block)
    @if(empty($block))
        <hr>
    @else
        <div>
            @foreach ($block as $element)
                {{-- RENDER A COMPONENT --}}
                @if(!empty($element->type) && $element->type === 'component' && $v->isComponentSupported($element->content ?? ''))
                    <x-dynamic-component :component="$element->content" :info="$element->info ?? ''" :model="$model"/>
            
                
                {{-- RENDER ALLOWED HTML --}}
                @elseif(!empty($element->type) && $element->type === 'html')
                    <{{$v->cleanTag($element->el ?? '')}}{!!$v->renderAttributes($element->attr ?? [])!!}>
                        {!! $v->MDtoHTML($element->content ?? '') !!}
                    </{{$v->cleanTag($element->el ?? '')}}>

                {{-- RENDER MARKDOWN --}}
                @else
                    {!! $v->MDtoHTML($element->content ?? '') !!}
                @endif
            @endforeach
            
        </div>
    @endif
@endforeach