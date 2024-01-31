@extends('layouts.app')

@section('title')
    login
@endsection

@section('content')
    <x-card>
        <x-alert class="p-4 mb-4 text-sm rounded-lg" role="alert" />

        <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-600">Sign in to your account
        </h2>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div>
                    <x-input-label for="email" class="text-gray-800" :value="__('Your Email')" />
                    <x-input-text name="email" type="email" value="{{ old('email') }}" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />

                </div>
                <div class="mt-3">
                    <div class="flex items-center justify-between">
                        <x-input-label for="password" class="text-gray-800 mb-0" :value="__('Password')" />
                        <x-alink href="{{ route('get.forget.password') }}" class="text-gray-800" :value="__('Forgot password')" />
                    </div>
                    <x-input-text name="password" type="password" value="{{ old('password') }}" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <x-primary-button class="mt-4">
                    {{ __('Sign in') }}
                </x-primary-button>
            </form>
        </div>
    </x-card>
@endsection
