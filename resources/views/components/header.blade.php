<div class="bg-[#202123]  ">
    <header class="p-5 container mx-auto ">
        <nav class="flex justify-between items-center">
            <h6 class="uppercase select-none cursor-pointer text-4xl font-BlackOps font-medium text-[#65abec]"><a href="{{ route('main') }}">{{ $dataWeb->logo ?? 'StakerRP' }}</a></h6>
            <ul class="flex items-center">
                <li class=" mr-6 font-bold text-[#666] transition ease-in-out delay-200 hover:text-[#65abec] {{ Route::currentRouteName() === 'shop' ? 'active' : '' }}"><a href="{{ route('shop') }}">Магазин</a></li>
                <li class=" mr-6 font-bold text-[#666] transition ease-in-out delay-200 hover:text-[#65abec] {{ Route::currentRouteName() === 'lore' ? 'active' : '' }}"><a href="{{ route('lore') }}">Лор</a></li>
                <li class=" mr-6 font-bold text-[#666] transition ease-in-out delay-200 hover:text-[#65abec] {{ Route::currentRouteName() === 'rules' ? 'active' : '' }}"><a href="{{ route('rules') }}">Правила</a></li>
                <li class=" mr-6 font-bold text-[#666] transition ease-in-out delay-200 hover:text-[#65abec] {{ Route::currentRouteName() === 'fraction' ? 'active' : '' }}"><a href="{{ route('fraction') }}">Группировки</a></li>
                @if (Auth::check())
                <li><x-button-profile></x-button-profile></li>
                @else
                <li><x-button-login></x-button-login></li>
                @endif
            </ul>
           

            
            
                
            
            
 
        </nav>
    </header>
</div>
<script>

</script>