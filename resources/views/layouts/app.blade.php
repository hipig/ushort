@extends('layout')

@section('body')
  <body class="font-sans bg-gray-100 text-gray-700 leading-normal">
    <div id="app" class="min-h-screen flex">
      @include('partials.sidebar')

      <main class="flex flex-col w-0 flex-1 overflow-hidden">
        @include('partials.header')
      </main>
      @yield('content')
    </div>
  </body>
@endsection
