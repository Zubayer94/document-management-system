@props(['value'])

<a {{ $attributes->merge(['class' => 'block text-sm font-medium leading-6']) }}>{{ $value ?? $slot }}</a>