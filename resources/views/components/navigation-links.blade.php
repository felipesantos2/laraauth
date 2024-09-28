<nav
    class="block w-full max-w-screen-lg px-4 py-2 mx-auto text-white bg-slate-900 shadow-md rounded-md lg:px-8 lg:py-3 mt-6">

    <div class="container flex flex-wrap items-center justify-between mx-auto text-gray-100">
        <a href="#" class="mr-4 block cursor-pointer py-1.5 text-base text-gray-200 font-semibold">
            CryptoExchange
        </a>

        <div class="hidden lg:block">
            <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                {{ $menu }}
            </ul>
        </div>

        <x-logout>
            <x-slot:value>
                Voltar mais tarde
            </x-slot:value>
        </x-logout>

    </div>
</nav>
