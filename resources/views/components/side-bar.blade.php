
<div class="sticky top-0 overflow-y-auto h-full w-[250px]  border-r-[1px] border-white px-[1px]">
    <div class="flex justify-center flex-col text-white w-full truncate py-3 ">
        @foreach ($variable as $item)
        <x-link-tag href="#{{ $item->tag_id }}" id='{{ $item->tag_id }}' text="{{ $item->tag_rules }}"/>
        @endforeach

    </div>
</div>