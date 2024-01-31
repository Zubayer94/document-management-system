@props(['disabled' => false])

<div class="mt-2">
    <input {{ $disabled ? 'disabled' : '' }} {{ $attributes }}
        class="block w-full px-4 py-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg  focus:border-blue-400 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300">
</div>
