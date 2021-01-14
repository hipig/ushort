@extends('layout')

@section('body')
  <body class="font-sans bg-gray-100 text-gray-700 leading-normal">
    <div id="app" class="min-h-screen flex flex-col">
      <div class="flex-1 flex items-center">
        @yield('content')
      </div>
    </div>
  </body>
@endsection
