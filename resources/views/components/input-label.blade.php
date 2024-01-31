@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium leading-6']) }}>{{ $value ?? $slot }}</label>
