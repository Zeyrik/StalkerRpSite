<x-main-layout>
    <x-slot name='title'>Правила</x-slot>
    <x-slot name="content">
            <div class="flex">
                <x-side-bar :variable='$tagRules'/>
                <div class="ml-[250px] flex-1 py-5">
                    @foreach ($tagRules as $tag)
                    <h3 id='{{ $tag->tag_id }}' class=" text-white text-4xl mb-8">Раздел №{{ $tag->tag_id }}. {{ $tag->tag_rules }}</h3>
                        @foreach ($tag->rules as $rule)
                            
                            <p class='text-xl text-white'><span>{{ $rule->rule_id }}.</span> {{ $rule->rule }}</p>
                        @endforeach
                    @endforeach
                </div>
            </div>
                
        </x-slot>

        
</x-main-layout>