<a href="{{ url($url) . '?' . http_build_query($parameters) }}">
    {{ $text }}
    @if ($sort == $name)
        @if ( $order == 'asc')
            <i class="fa fa-sort-asc" aria-hidden="true"></i>
        @else
            <i class="fa fa-sort-desc" aria-hidden="true"></i>
        @endif
    @else
        <i class="fa fa-sort" aria-hidden="true"></i>
    @endif
</a>
