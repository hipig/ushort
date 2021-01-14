@extends('layouts.guest')
@section('title', '重置密码')

@section('content')
  <div class="w-full md:max-w-xl md:mx-auto p-4 my-4">
    <div class="flex justify-center">
      <h3 class="mb-4 text-3xl text-gray-900">重置密码</h3>
    </div>
    <div class="bg-white rounded-md shadow-sm my-4 overflow-hidden">
      <div class="flex flex-col">
        <div class="p-12">
          <x-form action="{{ route('password.update') }}">
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <x-form.input label="邮箱地址" name="email" value="{{ $request->email }}" placeholder="请输入邮箱地址"></x-form.input>
            <x-form.input label="新密码" type="password" name="password" placeholder="请输入新密码"></x-form.input>
            <x-form.input label="重复新密码" type="password" name="password_confirmation" placeholder="请输入重复新密码"></x-form.input>
            <x-button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-500 focus:ring-indigo-700">重置密码</x-button>
          </x-form>
        </div>
      </div>
    </div>
  </div>
@endsection
