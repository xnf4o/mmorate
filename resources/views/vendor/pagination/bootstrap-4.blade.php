@if ($paginator->hasPages())

    <div class="pagination">
        <a @if (!$paginator->onFirstPage()) href="{{ $paginator->previousPageUrl() }}" @endif class="prev-pagination item-pagination @if ($paginator->onFirstPage()) disabled @endif">‹</a>
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="item-pagination disabled">{{ $element}}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="item-pagination active-pagination">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="item-pagination">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        <a @if ($paginator->hasMorePages()) href="{{ $paginator->nextPageUrl() }}" @endif class="next-pagination item-pagination @if (!$paginator->hasMorePages()) disabled  @endif">›</a>
    </div>
    @endif
