@foreach($items as $item)
    <li >
        @if($item->link) <a href="{{ $item->url() }}">
            {!! $item->title !!}
            
        </a>
        @else
            {{$item->title}}
        @endif
  
    </li>
    @if($item->divider)
        <li{{\HTML::attributes($item->divider)}}></li>
    @endif
@endforeach