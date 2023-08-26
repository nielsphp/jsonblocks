@if($type === 'ul')
    <ul>
        @foreach($list as $li)
            <li>{!! $v->MDtoHTML($li ?? '') !!}</li>
        @endforeach
    </ul>
@else
    <ol>
        @foreach($list as $li)
            <li>{!! $v->MDtoHTML($li ?? '') !!}</li>
        @endforeach
    </ol>
@endif