<div class="bg-[#202123] text-[#e5e5e5]">
    <footer class="px-5 py-8 container mx-auto flex justify-between items-center">
       <span class="font-BlackOps"> {{ !isset(App\Services\WebConfig\Service::getWeb()->footer_string)  ? '© All Rights Reserved '.  \Carbon\Carbon::now()->year . '. Created by Zeyrik.' : App\Services\WebConfig\Service::getWeb()->footer_string  }}</span> 
        <div class="flex">
            @foreach ($icons as $icon)
            <a class=" mr-2" href="{{$icon->url }}">
                <img class="w-8" src="{{ $icon->icon_url }}">
            </a>
            @endforeach
        </div>

    </footer>
</div>