@props([
     'img' => '#',
     'title' => '',
     'description' => '',
     'link' => '#'
])

<div class="flex flex-col sm:w-10/12 mb-[52px] relative">
     <a href="{{ $link }}" class="space-y-4">
          <div class="relative overflow-hidden group">
               <div class="absolute bg-black opacity-50 w-full h-full top-0 left-0 transform -translate-x-full group-hover:translate-x-0 duration-200">
               </div>
               <img src="{{$img}}" class="w-full" alt="1">
          </div>
          
          <h2 class="text-2xl leading-10 font-medium text-white">{{$title}}</h2>
          <p class="text-base font-light text-white opacity-[45%]">
               {{$slot}}
          </p>
          <p class="text-sm leading-6 font-medium text-white opacity-[45%]">{{$description}}</p>
     </a>
</div>