@extends('layouts.app')

@section('title')
    Reset password
@endsection

@section('content')
    <x-card>
        <x-alert class="p-4 mb-4 text-sm rounded-lg" role="alert" />

        <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-600">Reset password
        </h2>
        <p class="mt-2 text-center text-base font-normal text-gray-500">We'll email you instructions on how to reset your
            password.</p>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('post.forget.password') }}" method="POST">
                @csrf
                <div>
                    <x-input-label for="email" class="text-gray-800" :value="__('Your Email')" />
                    <x-input-text name="email" type="email" value="{{ old('email') }}" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <x-primary-button class="mt-4">
                    {{ __('Send password reset link') }}
                </x-primary-button>
            </form>
        </div>
    </x-card>
@endsection
