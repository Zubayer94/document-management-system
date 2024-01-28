@if (session('success'))
    <div {{ $attributes->merge(['class' => 'text-green-800  bg-green-50']) }}>
        {{ session('success') }}
    </div>
@elseif (session('error'))
    <div {{ $attributes->merge(['class' => 'text-red-800 bg-red-50']) }}>
        {{ session('error') }}
    </div>
@endif
