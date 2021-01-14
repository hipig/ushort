@extends('layouts.guest')
@section('title', '注册')

@section('content')
  <div class="w-full md:max-w-xl md:mx-auto p-4 my-4">
    <div class="flex justify-center">
      <h3 class="mb-4 text-3xl text-gray-900">加入我们</h3>
    </div>
    <div class="bg-white rounded-md shadow-sm my-4 overflow-hidden">
      <div class="flex flex-col">
        <div class="p-12">
          <x-form action="{{ route('login') }}">
            <x-form.input label="昵称" name="name" placeholder="请输入昵称"></x-form.input>
            <x-form.input label="邮箱地址" name="email" placeholder="请输入邮箱地址"></x-form.input>
            <x-form.input label="密码" type="password" name="password" placeholder="请输入密码"></x-form.input>
            <x-form.input label="重复密码" type="password" name="password_confirmation" placeholder="请输入重复密码"></x-form.input>
            <div class="mb-6 flex items-center">
              <x-form.checkbox name="remember" :value="true" checked>
                我同意
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">服务条款</a>
                和
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">隐私政策</a>
              </x-form.checkbox>
            </div>
            <x-button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-500 focus:ring-indigo-700">注册</x-button>
          </x-form>
        </div>
        <div class="bg-gray-50 py-3 px-5">
          <div class="my-1 text-center text-gray-400">
            <span>已有账户？</span>
            <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-500">去登录</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
