<x-layout>
     <div class="flex flex-col space-y-8">
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[64px] text-left text-white font-medium font-playfair md:leading-[88px]">
               {{setting('site.email')}}
          </h1>
          <div class="content-body w-11/12 sm:w-9/12 lg:flex flex-col transform">
               <p class="text-white text-base font-medium">{{setting('site.address')}} <br/> <br/> {{setting('site.phone1')}} <br/>{{setting('site.phone2')}}
               </p>
          </div>
     </div>
     <x-footer-text>
      <span class="underline text-white">
          {{setting('site.copyright')}}
      </span>
 </x-footer-text>
 </x-layout>