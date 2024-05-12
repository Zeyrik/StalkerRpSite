<x-main-layout>
    <x-slot name='title'>Магазин</x-slot>
    <x-slot name='content'>
        <div class="container  mx-auto">
            <div class="rounded-[46px] mb-[40px] h-[250px] w-full bg-cover bg-no-repeat bg-center bg-[url('https://media.moddb.com/images/members/4/3659/3658732/profiledetector/ZsR9M3opVZE.jpg')]" >
                {{-- <button class="bg-red-500 mt-[200px]">Покупать</button> --}}
            </div>
            <div class="bg-[#202123] p-8 rounded-[46px]">
                <h3 class="mb-3 text-4xl text-white">Каталог</h3>
                <div class="grid grid-cols-4 gap-5">
                    @if(count($products)>=1)
                    @foreach ($products as $product)
                    <a href="{{ route('product', $product->id) }}">
                        <div class=" bg-[#29262d] p-5 rounded-[23px] flex flex-col items-center h-full">
                            <img src="{{ $product->image }}" alt="">
                            <p class="text-white mt-auto">{{ $product->title }}</p>
                            <p class="text-white">{{$product->price}}руб.</p>
                        </div>
                    </a>
                    @endforeach
                @else
                    <p class="text-white">Товаров нет</p>
                @endif
                </div>
                
            </div>
        </div>




    </x-slot>
    
</x-main-layout>