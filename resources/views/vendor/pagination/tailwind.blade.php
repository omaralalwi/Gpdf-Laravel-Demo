@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex justify-center">
        <ul class="flex list-none p-0 space-x-2">
            @if ($paginator->onFirstPage())
                <li class="disabled">
                    <span class="px-4 py-2 text-gray-400">{{ __('Previous') }}</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 text-blue-500 hover:text-blue-700">{{ __('Previous') }}</a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li><span class="px-4 py-2 text-gray-400">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="bg-blue-500 text-white px-4 py-2 rounded">
                                <span>{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="px-4 py-2 text-blue-500 hover:text-blue-700">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 text-blue-500 hover:text-blue-700">{{ __('Next') }}</a>
                </li>
            @else
                <li class="disabled">
                    <span class="px-4 py-2 text-gray-400">{{ __('Next') }}</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
