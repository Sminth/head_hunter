@if ($paginator->hasPages())

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item ">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" >
                <i class='bx bx-chevrons-left bx-fade-left'></i>
            </a>
        </li>
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item" aria-current="page"><span class="page-link active">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

        {{-- <li class="page-item"><a class="page-link active"  href="#">1</a></li>
        <li class="page-item"><a class="page-link " href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li> --}}

        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" >
                <i class='bx bx-chevrons-right bx-fade-right'></i>
            </a>
        </li>
    </ul>
</nav>


@endif
