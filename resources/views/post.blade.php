<x-main-layout>
    <x-slot name='title'>Пост</x-slot>
    <x-slot name='content'>
        <div class="mb-10 w-full">
            <h3 class="mb-3 text-3xl text-white">{{ $post->title }}</h3>  
            <h4 class="mb-3 text-lg text-[#65abec]">{{ $post->description }}</h4>  
            <img class="mb-3" src="{{ $post->image }}">
            <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, eveniet. Esse earum at minima labore velit obcaecati laudantium voluptates, voluptate consectetur eligendi corporis beatae veritatis vitae officia, eveniet quibusdam voluptas voluptatum a nemo cum natus sequi quam ipsum! Vitae, consequuntur. Tempora dolorum nihil perferendis! Veritatis quis soluta deserunt veniam impedit accusantium distinctio natus cumque fugiat et. Dicta, possimus aliquid, maxime doloremque error soluta quas et, explicabo eligendi aperiam magni nobis voluptas inventore nemo voluptates! Vero, nemo eveniet reiciendis corporis qui ut, vel harum cupiditate voluptate unde reprehenderit possimus ad quidem! Exercitationem, velit fugit qui officia labore ipsam eius omnis fuga voluptatum quibusdam iusto laudantium corporis, dicta quisquam asperiores neque odit, impedit maxime id eaque cumque aut dolorem. Commodi, delectus aspernatur reiciendis vitae repellat nesciunt obcaecati dolores, sapiente nobis ipsa ad molestias aliquam non numquam hic mollitia! Temporibus ullam deserunt ipsa libero fuga voluptatem, labore vitae. Nihil esse qui natus voluptatibus eum enim quam distinctio nulla magni, fuga adipisci ullam quibusdam quas sed facere iure dignissimos, rem delectus quis tenetur? Qui voluptate atque ipsa ipsum in, minima ab ad omnis eaque enim voluptatum rem corrupti magni veniam incidunt. Repellat eius, quidem earum itaque quibusdam illum, assumenda est, inventore aperiam magnam molestiae.</p>
            <span class="block text-white text-sm text-right">{{ \Carbon\Carbon::parse($post->created_at)->format('H:i d.m.Y ') }} </span>
        </div>
    </x-slot>
</x-main-layout>