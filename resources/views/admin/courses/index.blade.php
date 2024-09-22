<x-app-layout>
  <div class="flex justify-between items-center mb-6">
    <h6 class="text-lg text-gray-600 font-semibold">Course Lists</h6>
    <a class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 "
      href={{route("dashboard.courses.create")}}>Add A New Course</a>
  </div>
  <div class="grid grid-cols-3 gap-4">
    @forelse($courses as $course)
    <div class="card">
      <div class="py-4 px-7 flex justify-between">
        <p class="mt-1 text-sm text-gray-500">
          {{$course->category->name}}
        </p>
        <div class="hs-dropdown relative inline-flex [--placement:bottom-right] sm:[--trigger:hover]">
          <a class="relative hs-dropdown-toggle cursor-pointer align-middle rounded-full">
            <svg class="object-cover w-9 h-9 rounded-full" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
            </svg>
          </a>
          <div
            class="card hs-dropdown-menu transition-[opacity,margin] border border-gray-100 rounded-[7px] duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[200px] hidden z-[12]"
            aria-labelledby="hs-dropdown-custom-icon-trigger">
            <div class="card-body p-0 py-2">
              <a href={{route("dashboard.courses.show", $course)}} class="flex gap-2 items-center px-4 py-[6px] hover:bg-blue-100">
                <i class="ti ti-mail text-gray-500 text-xl"></i>
                <p class="text-sm text-gray-500">Manage</p>
              </a>
              <a href="{{route('dashboard.course.course_students.create', $course)}}" class="flex gap-2 items-center px-4 py-[6px] hover:bg-blue-100">
                <i class="ti ti-user text-gray-500 text-xl "></i>
                <p class="text-sm text-gray-500">Students</p>
              </a>
              <a href="javscript:void(0)" class="flex gap-2 items-center px-4 py-[6px] hover:bg-blue-100">
                <i class="ti ti-list-check text-gray-500 text-xl "></i>
                <p class="text-sm text-gray-500">Edit Course</p>
              </a>
              <a href="javscript:void(0)" class="flex gap-2 items-center px-4 py-[6px] hover:bg-blue-100">
                <i class="ti ti-list-check text-gray-500 text-xl "></i>
                <p class="text-sm text-red-500">Delete Course</p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h3 class="text-lg font-medium text-gray-600 mb-2">
          {{$course->name}}
        </h3>
        <p class="text-sm text-gray-500 pe-10">
          With supporting text below as a natural lead-in to additional content.
        </p>
        <!-- <a class="mt-4 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 "
          href={{route('dashboard.courses.show', $course)}}>
          Detail
        </a> -->
      </div>
    </div>
    @empty
    @endforelse
  </div>
</x-app-layout>