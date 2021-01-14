@extends('layouts.guest')
@section('title', '忘记密码')

@section('content')
  <div class="w-full md:max-w-xl md:mx-auto p-4 my-4">
    <div class="flex justify-center">
      <h3 class="mb-4 text-3xl text-gray-900">忘记密码</h3>
    </div>
    <div class="bg-white rounded-md shadow-sm my-4 overflow-hidden">
      <div class="flex flex-col">
        <div class="p-12">
          <x-form action="{{ route('password.email') }}">
            <x-form.input label="邮箱地址" name="email" placeholder="请输入邮箱地址"></x-form.input>
            <x-button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-500 focus:ring-indigo-700">发送重置密码邮件</x-button>
          </x-form>
        </div>
      </div>
    </div>
  </div>
@endsection
