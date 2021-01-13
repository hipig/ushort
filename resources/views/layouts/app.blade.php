@extends('layout')

@section('body')
  <body class="font-sans bg-gray-100 text-gray-700 leading-normal">
    <div id="app" class="min-h-screen flex">
      @include('partials.sidebar')

      <main class="flex flex-col w-0 flex-1 overflow-hidden">
        @include('partials.header')
        <div class="w-full md:max-w-6xl md:mx-auto py-8 px-4 sm:px-6 md:px-8 py-4">
          @yield('content')
        </div>
      </main>
    </div>
  </body>
@endsection
