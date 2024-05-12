<x-main-layout>
    <x-slot name='title'>Профиль</x-slot>
    <x-slot name='content'>
        <div class="container mx-auto p-5 bg-[#202123] rounded-[46px] flex ">
            <img class="select-none rounded-full w-[250px] mr-5" src="{{ Auth::user()->avatar }}" alt="">
            <div>
                <p class="text-white">{{ Auth::user()->email }}</p>
                <p class="text-white">{{ Auth::user()->nickname }}</p>
            </div>

        </div>

    </x-slot>
</x-main-layout>