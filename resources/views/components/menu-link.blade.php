@props(['href', 'target'])

<li class="flex items-center p-1 text-sm gap-x-2 text-gray-200">
    <a href="{{ $href }}" target="{{ $target }}" class="flex items-center">
        {{ $name }}
    </a>
</li>
