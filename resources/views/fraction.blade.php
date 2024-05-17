<x-main-layout>
    <x-slot name='title'>Группировки</x-slot>
    <x-slot name='content'>
        <div>
            <x-title-page title='Группировки'></x-title-page>
            @foreach ($fractions as $fraction)
            <div>
                <img src="{{ $fraction->image }}">
                <h3 class="text-white">{{ $fraction->title }}</h3>
                <p class="text-white">{{ $fraction->description }}</p>
            </div>

            @endforeach
        </div>


    </x-slot>
</x-main-layout>