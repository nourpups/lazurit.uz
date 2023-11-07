    @if ($paginator->hasPages())

    <nav class="pagination-style-1" data-aos="fade-up" id="pagination">
        <ul>
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li><a class="next" rel="prev" href="{{ $paginator->previousPageUrl() }}"><i class=" ti-angle-double-left "></i></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="active" href="#">{{ $page }}</a></li>
                        @else
                            <li><a class="" href="{{$url}}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a class="next" href="{{ $paginator->nextPageUrl() }}"><i class=" ti-angle-double-right "></i></a></li>
            @endif
        </ul>
    </nav>
@endif
