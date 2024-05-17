
<div class=" bg-[#29262d] p-5 rounded-[23px]  h-full">
    <img class="mb-3" src="{{ $image }}">
    <a href="{{ route('product', $id) }}" >
        <h3 class="text-white mt-auto mb-3">{{ $title }}</h3>
        <p class="text-white mb-3">{{$price}} руб.</p>
        <span class="text-white transition ease-in-out delay-200 border-[#65abec] border-2  mb-3 px-3 py-2 rounded-[23px] text-center block hover:bg-[#65abec]">Подробнее</span>
    </a>
</div>
