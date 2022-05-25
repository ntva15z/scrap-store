<div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
    <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
    <div class="tm-paging d-flex" style="list-style: none">
    @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <li class="page-item"><span class="ellipse clickable">{{ $element }}</span></li>
            @endif

        <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item"><a class="tm-paging-link active">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="tm-paging-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
    <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-primary tm-btn-next">Next Page</a>
</div>
