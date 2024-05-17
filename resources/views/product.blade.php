<x-main-layout>
    <x-slot name='title'>{{ $product->title }}</x-slot>
    <x-slot name='content'>
        <div class="conainer p-5 mx-auto">
            <x-title-page title='{{ $product->title }}'></x-title-page>
            <div class="grid grid-cols-2 gap-3">
                <img src="{{ $product->image }}" alt="{{ $product->title  }}">
                <div class="items-stretch ">
                    <p class="mb-6 text-2xl text-white">Описание: {{ $product->description }}</p>
                    <p class="mb-6 text-2xl text-white">Цена: {{ $product->price }}</p>
                    <a class="inline-block mt-auto text-white bg-[#65abec] mb-3 px-7 py-2 rounded-[23px] text-center" href="https://anypay.io/merchant">Купить</a>
                </div>
            </div>
            

            
        
        </div>   
    </x-slot>
</x-main-layout>