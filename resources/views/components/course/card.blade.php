@props(['course'])

<div class="group relative">
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-sm text-gray-700">
                <a {{ $attributes }}>
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $course->activity }}
                </a>
            </h3>
            {{-- <p class="mt-1 text-sm text-gray-500">{{ $vinyl->artist->name}}</p> --}}
        </div>
        {{--  <p class="text-sm font-medium text-gray-900">{{$vinyl->release_year}}</p> --}}
    </div>
</div>