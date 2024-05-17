<x-main-layout>
    <x-slot name='title'>Магазин</x-slot>
    <x-slot name='content'>
        <div class="container  mx-auto">
            <div class="rounded-[46px] mb-[40px] h-[250px] w-full bg-cover bg-no-repeat bg-center bg-[url('https://media.moddb.com/images/members/4/3659/3658732/profiledetector/ZsR9M3opVZE.jpg')]" >
                {{-- <button class="bg-red-500 mt-[200px]">Покупать</button> --}}
            </div>
            <swiper-container slides-per-view="1" speed="500"  autoplay='true'  pagination-type='bullets' pagination-clickable='true'> 
                <swiper-slide class="bg-green-200">
                    <img src="">
                </swiper-slide>
                <swiper-slide class="bg-blue-300">
                    <img src="">
                </swiper-slide>
                <swiper-slide class="bg-red-400">
                    <img src="">
                </swiper-slide>
              </swiper-container>
            <div class="bg-[#202123] p-8 rounded-[46px]">
                <x-title-page title='Каталог'></x-title-page>
                <div class="grid grid-cols-4 gap-5">


                @forelse ($products as $product)
                    <x-card-product id='{{ $product->id }}' title="{{ $product->title }}" image='{{ $product->image }}' price='{{ $product->price }}'></x-card-product>
                @empty
                    <p class="text-white">Товаров нет</p>
                @endforelse
                </div>
                
            </div>
        </div>




    </x-slot>
    
</x-main-layout>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>