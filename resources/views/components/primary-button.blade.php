<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
