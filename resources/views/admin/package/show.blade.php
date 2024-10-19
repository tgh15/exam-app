<x-app-layout>
    <div class="flex justify-between items-center mb-6">
      <h6 class="text-lg text-gray-600 font-semibold">{{$package->name}}</h6>
      <a class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 "
        href={{route("dashboard.packages.edit", $package)}}>Tambah Soal</a>
    </div>
    {{-- <div class="">
        <h1 class="font-bold text-2xl">{{$package->name}}</h1>
    </div> --}}
    <div class="mt-4 grid grid-cols-3 gap-4">
        @forelse($courses as $course)
            <div class="border p-4 gap-2 rounded-lg flex flex-col bg-white">
                <div class="flex gap-4">
                    <div class="bg-blue-400 p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                          </svg>
                    </div>
                      <div>
                          <h1 class="font-bold">{{$course->name}}</h1>
                          <div class="flex gap-3">
                              <p class="flex "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                              </svg>
                               {{count($course->questions)}} soal </p>
        
                              <p class="flex ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                  </svg>                          
                               {{$course->working_duration}} menit </p>
                          </div>
    
                      </div>
                </div>
                <div class="flex justify-between gap-2">
                    <a href="{{route('dashboard.courses.show', $course)}}" class="p-2 w-full rounded-md bg-blue-400 text-white text-center font-bold">Lihat</a>
                    <a href="" class="p-2 w-full rounded-md bg-red-400 text-white text-center font-bold">Hapus</a>
                </div>
            </div>
        @empty
        @endforelse
    </div>
</x-app-layout>