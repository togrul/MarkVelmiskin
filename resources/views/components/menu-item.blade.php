@props([
     'url' => '#',
     'isActive' => false
])

<div class="w-full flex">
     <a 
          href={{ $url == '#' ? $url : route($url) }}  
          {{ $attributes->merge(['class' => 'relative text-white lowercase py-1 text-base font-medium w-full']) }}
     >
          <div @class([
               'relative group w-max pb-4 hover:text-[#79819C] transition duration-200 ease-in flex justify-center',
               'text-[#79819C]' => $isActive
          ])>
               {{ $slot }}
               <span @class([
                    'absolute opacity-0 transition duration-200 ease-in group-hover:opacity-100 bottom-0 bg-[#DD4A42] w-1.5 h-1.5 rounded',
                    'opacity-100' => $isActive
               ])>
          </div>
     </a>

     </span>
</div>