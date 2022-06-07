<x-layout :social=false>
     <x-slot name="flex_class">standart</x-slot>

     <div class="grid grid-cols-1 space-y-8 sm:space-y-0 sm:grid-cols-2 sm:gap-1 mt-[97px]">
          <h2 class="text-xl sm:text-3xl lg:text-[64px] leading-10 font-medium text-white">{{$project->title}}</h2>
          <p class="text-base font-light text-white opacity-[45%]">
               {{strip_tags($project->body)}}
          </p>
     </div>

     <div class="grid grid-cols-1 space-y-8 sm:space-y-0 sm:grid-cols-2 lg:grid-cols-4 sm:gap-1 mt-[97px]">
          <div class="flex flex-col space-y-1">
               <h5 class="font-bold text-white opacity-[45%] text-[12px]">
                    Timeline
               </h5>
               <p class="text-sm font-medium text-white">
                    {{$project->timeline}}
               </p>
          </div>

          <div class="flex flex-col space-y-1">
               <h5 class="font-bold text-white opacity-[45%] text-[12px]">
                    Client
               </h5>
               <p class="text-sm font-medium text-white">
                    {{$project->client}}
               </p>
          </div>

          <div class="flex flex-col space-y-1">
               <h5 class="font-bold text-white opacity-[45%] text-[12px]">
                    Expertise
               </h5>
               <p class="text-sm font-medium text-white">
                    {{$project->expertise}}
               </p>
          </div>

          <div class="flex flex-col space-y-1">
               <h5 class="font-bold text-white opacity-[45%] text-[12px]">
                    Platform
               </h5>
               <p class="text-sm font-medium text-white">
                    {{$project->platform}}
               </p>
          </div>
        
     </div>

     <div class="grid grid-cols-1 mt-[97px]">
          <img src="{{'/storage/'.$project->image}}" alt="" class="h-[480px]">
     </div>

     @if(!@empty($project->about))
     <div class="grid grid-cols-1 space-y-8 sm:space-y-0 sm:grid-cols-2 sm:gap-1 mt-[97px]">
          <h2 class="text-xl sm:text-3xl lg:text-[64px] leading-10 font-medium text-white">About</h2>
          <p class="text-base font-light text-white opacity-[45%]">
               {{strip_tags($project->about)}}
          </p>
     </div>
     @endif

     @if(!empty($project->goals))
     <div class="grid grid-cols-1 space-y-8 sm:space-y-0 sm:grid-cols-2 sm:gap-1 mt-[97px]">
          <h2 class="text-xl sm:text-3xl lg:text-[64px] leading-10 font-medium text-white">Goals</h2>
          <p class="text-base font-light text-white opacity-[45%]">
               {{strip_tags($project->goals)}}
          </p>
     </div>
     @endif

     <div class="grid grid-cols-1 space-y-8 sm:space-y-12 sm:gap-1 mt-[97px]">
          <h2 class="text-xl sm:text-3xl lg:text-[64px] leading-10 font-medium text-white">
               {{$project->is_mobile ? "Responsive design":"Web version"}}
          </h2>
          <div class="owl-carousel owl-theme">
               @php
                    $images = json_decode($project->image_list);
               @endphp
               @foreach ($images as $list)
                    <div class="item">
                         <img src="{{'/storage/'.$list}}" 
                         @class([
                              $project->is_mobile => 'max-h-[588px] max-w-[290px]'
                         ]) alt="">
                    </div>
               @endforeach
           </div>
     </div>

     <div class="grid grid-cols-1 space-y-8 sm:space-y-4 sm:grid-cols-4 sm:gap-1 mt-[97px]">
          <h2 class="text-xl sm:text-3xl lg:text-[64px] leading-10 font-medium text-white col-span-3">Other projects</h2>
          <p class="flex space-x-4">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.01 2.91982L18.91 5.53982C20.61 6.28982 20.61 7.52982 18.91 8.27982L13.01 10.8998C12.34 11.1998 11.24 11.1998 10.57 10.8998L4.67002 8.27982C2.97002 7.52982 2.97002 6.28982 4.67002 5.53982L10.57 2.91982C11.24 2.61982 12.34 2.61982 13.01 2.91982Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 11C3 11.84 3.63 12.81 4.4 13.15L11.19 16.17C11.71 16.4 12.3 16.4 12.81 16.17L19.6 13.15C20.37 12.81 21 11.84 21 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 16C3 16.93 3.55 17.77 4.4 18.15L11.19 21.17C11.71 21.4 12.3 21.4 12.81 21.17L19.6 18.15C20.45 17.77 21 16.93 21 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
               <a href="{{ route('projects.list') }}" class="underline text-base text-white font-semibold">Discover all projects</a>     
          </p>
     </div>

     <div class="grid grid-cols-1 space-y-8 sm:space-y-0 sm:grid-cols-2 sm:gap-1 mt-[97px]">
          @foreach ($projects as $project)
          <x-project
               title="{{$project->title}}"
               img="{{ Voyager::image($project->getThumbnail($project->image, 'medium')) }}"
               description="{{$project->platform}}"
               link="{{route('projects.item',['project' => $project])}}"
          >
               {{strip_tags($project->body)}}
          </x-project>
          @endforeach
     </div>

    <div class="mt-[64px]">
     <x-footer-text>
          <span class="underline text-white">
               {{setting('site.copyright')}}
          </span>
     </x-footer-text>
    </div>

    @push('js')
     <script>
          $('.owl-carousel').owlCarousel({
               loop:true,
               stagePadding: 200,
               margin:20,
               nav:false,
               dots:false,
               responsive:{
                    0:{
                         items:1
                    },
                    600:{
                         items:2
                    },
                    1000:{
                         items:2
                    }
               }
          })
          </script>
     @endpush
</x-layout>