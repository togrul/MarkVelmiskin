<x-layout>
     <x-slot name="flex_class">standart</x-slot>

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
</x-layout>