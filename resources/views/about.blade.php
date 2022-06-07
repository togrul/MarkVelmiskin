<x-layout>
    <div class="content-body w-11/12 sm:w-9/12 lg:flex justify-center items-center flex-col transform">
         <p class="text-white text-2xl leading-10 font-medium">
           {{$about->body}}
         </p>
    </div>
    <div class="what-we-do flex flex-col space-y-8">
          <h2 class="text-[#DD4A42] text-base">
               What we do
          </h2>
          <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row justify-between w-11/12 sm:w-[73%]">
               <div class="flex flex-col space-y-4">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[64px] text-left text-white font-medium  md:leading-[88px]">
                         Design
                    </h1>
                    <ul class="text-base text-white font-light opacity-[45%]">
                         @foreach (explode(',', $about->design) as $design)
                              <li>{{ $design }}</li>
                         @endforeach
                    </ul>
               </div>

               <div class="flex flex-col space-y-4">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[64px] text-left text-white font-medium  md:leading-[88px]">
                         Research
                    </h1>
                    <ul class="text-base text-white font-light opacity-[45%]">
                         @foreach (explode(',', $about->research) as $research)
                         <li>{{ $research }}</li>
                    @endforeach
                    </ul>
               </div>
          </div>
    </div>
    <x-footer-text>
     <span class="underline text-white">
         {{setting('site.copyright')}}
     </span>
</x-footer-text>
</x-layout>