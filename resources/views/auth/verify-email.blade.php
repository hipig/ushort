@extends('layouts.guest')
@section('title', '确认密码')

@section('content')
  <div class="w-full md:max-w-xl md:mx-auto p-4 my-4">
    <div class="flex justify-center">
      <h3 class="mb-4 text-3xl text-gray-900">邮箱认证</h3>
    </div>
    <div class="bg-white rounded-md shadow-sm my-4 overflow-hidden">
      <div class="flex flex-col">
        <div class="p-12">
          <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
          </div>

          @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
              {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
          @endif
          <x-form action="{{ route('verification.send') }}">
            <x-button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-500 focus:ring-indigo-700">发送邮件</x-button>
          </x-form>
          <x-form action="{{ route('logout') }}">
            <x-button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-500 focus:ring-indigo-700">退出登录</x-button>
          </x-form>
        </div>
      </div>
    </div>
  </div>
@endsection
