<x-main-layout>
    <x-slot name='title'>Главная</x-slot>
        <x-slot name='content'>
                <div class="mb-16">  
                        <div class="h-[400px] p-[60px] rounded-[46px] bg-black flex justify-center items-left flex-col" style="background-image: url(https://i.postimg.cc/mkLz3z2n/1-2.jpg);background-position: center; background-repeat: no-repeat; background-size: cover;">
                            <h6 class="text-lg mb-6 text-white">Добро пожаловать</h6>
                            <h6 class="text-4xl mb-6 text-white uppercase"><span class="text-[#65abec]">Начать играть </span><br>на проекте</h6>
                            <a href="{{ route('guide') }}" class="text-white self-start inline-block bg-[#65abec] mb-3 px-7 py-3 rounded-[23px] text-center hover:bg-white hover:text-[#65abec]">Нажимай Cюда</a>
                        </div>
                </div>
                <div>
                    <div class="mb-10">
                        <x-title-page title='Новости'></x-title-page>
                    </div> 
                    @foreach ($posts as $post)
                    <a href="{{ route('post', $post->id) }}">
                        <div class="mb-10 w-full bg-[#202123] p-7 rounded-[46px]">
                            <h3 class="mb-5 text-3xl text-white">{{ $post->title }}</h3>  
                            <h4 class="mb-5 text-lg text-[#65abec]">{{ $post->description }}</h4>  
                            <img class="mb-5" src="{{ $post->image }}">
                            <span class="block text-white text-sm text-right">{{ \Carbon\Carbon::parse($post->created_at)->format('H:i d.m.Y ') }} </span>
                        </div>
                    </a>
                    @endforeach
                </div>



        </x-slot>

</x-main-layout>