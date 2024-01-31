@extends('layouts.app')

@section('title')
    reset-password
@endsection

@section('content')
    <x-card>
        <x-alert class="p-4 mb-4 text-sm rounded-lg" role="alert" />
        <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-600">Reset password
        </h2>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('post.reset.password') }}" method="POST">
                @csrf

                <input name='token' type='hidden' value={{ $token }} />
                <div class="mt-4">
                    <x-input-label for="email" class="text-gray-800" :value="__('Email')" />
                    <x-input-text name="email" type="email" autocomplete="email" value="{{ old('email') }}" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>
                <div class="mt-4">
                    <x-input-label for="password" class="text-gray-800" :value="__('New Password')" />
                    <x-input-text name="password" type="password" autocomplete="password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>
                <div class="mt-4">
                    <x-input-label for="password_confirmation" class="text-gray-800" :value="__('Confirm Password')" />
                    <x-input-text name="password_confirmation" type="password" autocomplete="password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                </div>
                <x-primary-button class="mt-5">
                    {{ __('Reset password') }}
                </x-primary-button>
            </form>
        </div>
    </x-card>
@endsection
