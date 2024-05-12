<x-main-layout>
    <x-slot name='title'>Тест</x-slot>
    <x-slot name='content'>
        <div class="conainer p-5 mx-auto">
            <p class="text-white">{{ $product->title }}</p> 
            <img src="{{ $product->image }}" alt="$product->title ">
        
        
        
        
        
        
        </div>   
    </x-slot>
</x-main-layout>