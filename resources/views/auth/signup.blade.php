@extends('layouts.app')

@section('title')
    signup
@endsection

@section('content')
    <x-card>
        <x-alert class="p-4 mb-4 text-sm rounded-lg" role="alert" />
        <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-600">Sign up to your account
        </h2>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('signup.post') }}" method="POST">
                @csrf
                <div>
                    <x-input-label for="name" class="text-gray-800" :value="__('Full Name')" />
                    <x-input-text name="name" type="text" autocomplete="name" value="{{ old('name') }}" />
                    <x-input-error :messages="$errors->get('name')" class="mt-1" />
                </div>
                <div class="mt-3">
                    <x-input-label for="email" class="text-gray-800" :value="__('Email')" />
                    <x-input-text name="email" type="email" autocomplete="email" value="{{ old('email') }}" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>
                <div class="mt-3">
                    <x-input-label for="password" class="text-gray-800" :value="__('Password')" />
                    <x-input-text name="password" type="password" autocomplete="password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <x-primary-button class="mt-4">
                    {{ __('sign up') }}
                </x-primary-button>
            </form>
        </div>
    </x-card>
@endsection
