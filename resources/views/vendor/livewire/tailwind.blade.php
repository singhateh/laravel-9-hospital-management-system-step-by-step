{{-- @if(!$paginator->hasPages()) --}}
<div>
    @if ($paginator->hasPages())
        @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : ($this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1))


        <nav role="navigation" aria-label="Pagination Navigation"
            class="flex items-center justify-between filament-tables-pagination">

            <div class="hidden flex-1 items-center lg:grid grid-cols-3">
                <div class="flex items-center">
                    <div class="pl-2 text-sm font-medium">
                        {!! __('Showing') !!} {{ $paginator->firstItem() }} {!! __('to') !!}
                        {{ $paginator->lastItem() }} {!! __('of') !!}
                        {{ $paginator->total() }} {!! __('results') !!}
                    </div>
                </div>

                <div class="flex items-center justify-center float-left">
                </div>


                {{-- <x-jambasangsang.per-page :isEnable="true"></x-jambasangsang.per-page> --}}

                <div class="flex items-center justify-end float-right">
                    <div class1="py-3 border rounded-lg">
                        <ol class="flex items-center text-sm text-gray-500 divide-x divide-gray-300">
                            <li>
                                @if (!$paginator->hasMorePages())
                                    <button type="button"
                                        class=" float-md-start py-3 relative flex items-center justify-center font-medium min-w-[2rem] px-1.5 h-8 -my-3 rounded-md focus:outline-none  hover:bg-gray-500/5 focus:bg-primary-500/10 focus:ring-2 focus:ring-primary-200 transition text-primary-500"
                                        wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                        dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                        aria-label="Previous" rel="prvious">

                                        <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span></span>
                                    </button>
                                @else
                                @endif
                            </li>
                            {{-- Pagination Elements --}}
                            @foreach ($elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <span aria-disabled="true">
                                        <span
                                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                                    </span>
                                @endif
                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        <li>
                                            <button type="button"
                                                class="relative flex items-center justify-center font-medium min-w-[2rem] py-2 px-1.5 h-8 -my-3 rounded-lg focus:outline-none  transition text-primary-600 focus:underline bg-primary-500/10 ring-2 ring-primary-200"
                                                wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                                aria-label="Go to page 1"
                                                wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page{{ $page }}"
                                                <span> {{ $page }}</span>
                                            </button>
                                        </li>
                                    @endforeach
                                @endif
                            @endforeach

                            <li>
                                @if ($paginator->hasMorePages())
                                    <button type="button"
                                        class="relative flex items-center justify-center font-medium min-w-[2rem] px-1.5 h-8 -my-3 rounded-md focus:outline-none  hover:bg-gray-500/5 focus:bg-primary-500/10 focus:ring-2 focus:ring-primary-500 transition text-primary-600"
                                        wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                        dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                        aria-label="Next" rel="next">

                                        <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span></span>
                                    </button>
                                @else
                                @endif
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </nav>
    @endif
</div>
{{-- @endif --}}
