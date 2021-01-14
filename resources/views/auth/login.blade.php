@extends('layouts.guest')
@section('title', '登录')

@section('content')
  <div class="w-full md:max-w-xl md:mx-auto p-4 my-4">
    <div class="flex justify-center">
      <h3 class="mb-4 text-3xl text-gray-900">欢迎回来</h3>
    </div>
    <div class="bg-white rounded-md shadow-sm my-4 overflow-hidden">
      <div class="flex flex-col">
        <div class="p-12">
          <x-form action="{{ route('login') }}">
            <x-form.input label="邮箱地址" name="email" placeholder="请输入邮箱地址"></x-form.input>
            <x-form.input label="密码" type="password" name="password" placeholder="请输入密码"></x-form.input>
            <div class="mb-6 flex items-center justify-between">
              <x-form.checkbox name="remember" :value="true">记住我</x-form.checkbox>
              <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">忘记密码？</a>
            </div>
            <x-button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-500 focus:ring-indigo-700">登录</x-button>
          </x-form>
        </div>
        <div class="bg-gray-50 py-3 px-5">
          <div class="my-1 text-center text-gray-400">
            <span>没有账户？</span>
            <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-500">去注册</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
