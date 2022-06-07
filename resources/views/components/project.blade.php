@props([
     'img' => '#',
     'title' => '',
     'description' => '',
     'link' => '#'
])

<div class="flex flex-col sm:w-10/12 mb-[52px]">
     <a href="{{ $link }}" class="space-y-4">
          <img src="{{$img}}" class="w-full" alt="1">
          <h2 class="text-2xl leading-10 font-medium text-white">{{$title}}</h2>
          <p class="text-base font-light text-white opacity-[45%]">
               {{$slot}}
          </p>
          <p class="text-sm leading-6 font-medium text-white opacity-[45%]">{{$description}}</p>
     </a>
</div>