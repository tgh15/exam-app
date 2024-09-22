<x-app-layout>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div class="flex justify-between items-center mb-6">
        <h6 class="text-lg text-gray-600 font-semibold">Students for {{$course->name}}</h6>
        {{-- <a class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 "
          href={{route("dashboard.courses.create")}}>Add A New Course</a> --}}
    </div>
    <div class="sm:col-span-4">
        <form action="{{route('dashboard.course.course_students.store', $course)}}" method="POST">
            @csrf
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Students Email</label>
            <div class="mt-2 flex gap-2">
                <div class="flex bg-white rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="email" name="email" id="email" class="block flex-1 border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Course Name">
                </div>
                <button type="submit" class="bg-blue-400 p-2 text-white text-sm font-bold rounded-md">Add Student</button>
            </div>
        </form>
        <div class="col-span-2">
            <div class="card h-full">
                <div class="card-body">
                    <h4 class="text-gray-600 text-lg font-semibold mb-6">Recent Transaction</h4>
                    <div class="relative overflow-x-auto">
                        <!-- table -->
                        <table class="text-left w-full whitespace-nowrap text-sm">
                            <thead class="text-gray-700">
                                <tr class="font-semibold text-gray-600">
                                    <th scope="col" class="p-4">#</th>
                                    <th scope="col" class="p-4">Name</th>
                                    <th scope="col" class="p-4">Email</th>
                                    <th scope="col" class="p-4">Priority</th>
                                    <th scope="col" class="p-4">Budget</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($course->students as $index => $student)
                                    <h1>{{$student->name}}</h1>
                                    <tr>
                                        <td class="p-4 font-semibold text-gray-600 ">{{$index + 1}}</td>
                                        <td class="p-4">
                                              <div class="flex flex-col gap-1">
                                                  <h3 class=" font-semibold text-gray-600">{{$student->name}}</h3>
                                                  {{-- <span class="font-normal text-gray-500">Web Designer</span> --}}
                                              </div>
                                        </td>
                                        <td class="p-4">
                                            <span class="font-normal  text-gray-500">{{$student->email}}</span>
                                        </td>
                                        <td class="p-4">
                                            <span class="inline-flex items-center py-[3px] px-[10px] rounded-2xl font-semibold bg-blue-600 text-white">Low</span>
                                        </td>
                                        <td class="p-4">
                                            <span class="font-semibold text-base text-gray-600">$3.9</span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Students Enrolled this Class</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>									
                </div>
            </div>
          </div>
    </div>
</x-app-layout>