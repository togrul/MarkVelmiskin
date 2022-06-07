<div class="w-full columns-3">
     @foreach ($items as $menu_item)
     @php
          $class = match($loop->iteration)
          {
               1 => "ml-1",
               2 => "-ml-1",
               3 => "-ml-2"
          }
     @endphp
          <x-menu-item 
               class={{$class}} 
               isActive="{{request()->routeIs($menu_item->url)?true:false}}"  
               url="{{ $menu_item->url }}"
          >
               {{$menu_item->title}}
          </x-menu-item>
     @endforeach       
   </div>
