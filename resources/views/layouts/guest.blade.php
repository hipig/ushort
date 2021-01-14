@extends('layout')

@section('body')
  <body class="font-sans bg-gray-100 text-gray-700 leading-normal">
    <div id="app" class="min-h-screen flex flex-col">
      @include('partials.guest.header')
      @yield('content')
    </div>
  </body>
@endsection
