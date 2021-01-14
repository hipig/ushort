@extends('layouts.guest')
@section('title', '确认密码')

@section('content')
  <div class="w-full md:max-w-xl md:mx-auto p-4 my-4">
    <div class="flex justify-center">
      <h3 class="mb-4 text-3xl text-gray-900">请确认密码</h3>
    </div>
    <div class="bg-white rounded-md shadow-sm my-4 overflow-hidden">
      <div class="flex flex-col">
        <div class="p-12">
          <x-form action="{{ route('password.confirm') }}">
            <x-form.input label="密码" type="password" name="password" placeholder="请输入密码"></x-form.input>
            <x-button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-500 focus:ring-indigo-700">确认</x-button>
          </x-form>
        </div>
      </div>
    </div>
  </div>
@endsection
