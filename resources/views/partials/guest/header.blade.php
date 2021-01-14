<div class="sticky top-0 bg-white shadow z-20">
  <div class="w-full md:max-w-6xl md:mx-auto px-4">
    <div class="flex items-center h-16">
      <a href="{{ route('home') }}" class="flex items-center font-medium text-gray-900 text-2xl">
        <svg class="w-10 h-10 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
        </svg>
        <span class="ml-2">UShort</span>
      </a>
      <div class="flex flex-1">
        @guest
          <div class="flex items-center flex-col md:flex-row ml-auto space-x-1">
            <a href="{{ route('login') }}" class="inline-flex justify-center py-2 px-4 leading-tight border border-transparent font-medium rounded-md hover:text-gray-900">登录</a>
            <a href="{{ route('register') }}" class="inline-flex justify-center py-2 px-4 leading-tight border border-indigo-600 font-medium rounded-md text-indigo-600 bg-transparent hover:text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">注册</a>
          </div>
        @endguest
      </div>
    </div>
  </div>
</div>
