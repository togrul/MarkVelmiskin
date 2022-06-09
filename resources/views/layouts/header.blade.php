<div class="flex">
     <div class="flex-none w-[290px] items-center">
          <a href="/">
               <img class="block lg:hidden h-8 w-auto" src="{{ asset('logo.svg') }}" alt="Mark Velmiskin">
          </a>
          <a href="/">
               <img class="hidden lg:block h-8 w-auto" src="{{ asset('logo.svg') }}" alt="Mark Velmiskin">
          </a>
       
     </div>
     <div class="flex-auto hidden sm:flex sm:ml-1">
      {!! menu('site','menu/menu') !!}
     </div>
     <div x-data="{ open: false }" class="z-10 flex flex-auto sm:hidden justify-end mr-2">
          <div :class="{ 'flex' : open, 'hidden' : open === false }" class="fixed md:relative top-0 left-0 w-full sm:w-auto h-screen sm:h-auto sm:hidden flex-col items-center justify-center md:justify-start z-40 bg-[#1F2225] bg-opacity-90 leading-loose font-sans uppercase text-white text-base tracking-wider gap-8 transition duration-300 hidden">
             <a href="{{route('about')}}" class="transform transition duration-300 hover:underline">about</a>
             <a href="{{route('projects.list')}}" class="transform transition duration-300 hover:underline">projects</a>
             <a href="{{route('contact')}}" class="transform transition duration-300 hover:underline">contact</a>
          </div>
          <button @click="open = !open" class="sm:hidden flex items-center space-x-2 z-50 focus:outline-none text-white">
               <div class="w-6 flex items-center justify-center relative text-white">
                    <span x-bind:class="open ? 'translate-y-0 rotate-45' : '-translate-y-2'" class="transform transition w-full h-px bg-current absolute"></span>
                    
                    <span x-bind:class="open ? 'opacity-0 translate-x-3' : 'opacity-100'" class="transform transition w-full h-px bg-current absolute"></span>
                    
                    <span x-bind:class="open ? 'translate-y-0 -rotate-45' : 'translate-y-2'" class="transform transition w-full h-px bg-current absolute"></span>
                  </div>
          </button>
       </div>
</div>