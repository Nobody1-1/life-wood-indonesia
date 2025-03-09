<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full items-center justify-center inline-flex items-center px-4 py-2 bg-[#3A5B22] border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
