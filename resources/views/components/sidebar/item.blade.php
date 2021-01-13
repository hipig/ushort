<div class="mt-1">
  <a href="{{ $href ?? 'javascript:;' }}" class="flex items-center p-2 text-base leading-6 font-medium rounded-md text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition ease-in-out duration-150 cursor-pointer">
    {{ $icon ?? '' }}
    <span class="flex-1 ml-4">{{ $title }}</span>
  </a>
</div>
