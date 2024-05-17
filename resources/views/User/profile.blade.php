<x-main-layout>
    <x-slot name='title'>Профиль</x-slot>
    <x-slot name='content'>
        <div class="container mx-auto p-5 bg-[#202123] rounded-[46px]">
            
            <div class="grid grid-cols-3 mb-6">
                <img class="select-none rounded-full w-[250px] mr-5" src="{{ Auth::user()->avatar }}" alt="">
            
                <div class="self-stretch p-8">
                    <div class="flex justify-between mb-6">
                        <p class="text-white">Email:</p>
                        <p class="text-[#65abec]">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="flex justify-between mb-6">
                        <p class="text-white">Nickname:</p>
                        <p class="text-[#65abec]">{{ Auth::user()->nickname }}</p>
                    </div>
                    
                </div>
                <div class="bg-[#29262d] self-stretch p-8 rounded-[46px]">
                    <div class="flex justify-between mb-6">
                        <p class="text-white">Дата регистрации:</p>
                        <p class="text-white">{{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('H:i d.m.Y ') }}</p>
                    </div>
                    <div class="flex justify-between mb-6">
                        <p class="text-white">Статус:</p>
                        <p class="text-white"> 
                            @if (Auth::user()->banned === 0)
                            <p class="text-green-500">Аккаунт не заблокирован.</p>
                            @else
                            <p class="text-red-500">Аккаунт заблокирован.</p>
                            @endif

                    </div>
     
                </div>
            </div>
            <div>
                <x-title-page title='История покупок'></x-title-page>
                <div class="overflow-y-auto h-[300px] p-3 ">
                    <div class="flex justify-between border-b-2 ">
                        <p class="w-full text-left text-white text-sm">Товар</p>
                        <p class="w-full text-left text-white text-sm">Цена</p>
                        <p class="w-full text-left text-white text-sm">Дата</p>
                        <p class="w-full text-left text-white text-sm">Статус</p>
                    </div>
                    <p >asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p >asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                    <p>asdasd</p>
                </div>
            </div>
            

        </div>

    </x-slot>
</x-main-layout>