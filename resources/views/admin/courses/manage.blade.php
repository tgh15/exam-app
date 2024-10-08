<x-app-layout>
    <div class="flex justify-between items-center mb-6">
        <h6 class="text-lg text-gray-600 font-semibold">Course Detail</h6>
        {{-- <a class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 "
          href={{route("dashboard.courses.create")}}>Add A New Course</a> --}}
    </div>
    <div class="border border-gray-200 bg-white p-4 rounded-md relative">
        <a href="{{route('dashboard.course.create.question', $course)}}" class="absolute right-10 bg-blue-400 font-bold text-white text-sm p-1 rounded-md">Add a question</a>
        <div class="flex justify-center flex-col items-center">
            <h1 class="font-bold text-2xl">{{$course->name}}</h1>
            <div class="flex gap-4">
                <h2 class="">{{$course->category->name}}</h2>
                |
                <h2>Durasi Minutes</h2>
                {{-- |
                <h2>{{\Carbon\Carbon::parse($course->created_at)->format('F j, Y')}}</h2> --}}
                |
                <h2>{{count($questions)}} Questions</h2>
                |
                <h2>{{count($students)}} Students</h2>
            </div>
        </div>
        <div>

            @forelse ($questions as $index => $question)
                <div x-data="{ isExpanded: false }" class="m-4 border p-4 rounded-md shadow-sm transition-all">
                    <div class="flex gap-2 items-start justify-between">
                        <div class="flex gap-4 max-w-4xl">
                            <h1 class="text-md font-bold">{{$index+1}}.</h1>
                            <p>{!!$question->question!!}</p>
                        </div>
                        <div class="flex gap-2 items-center">
                            <button @click="isExpanded = ! isExpanded" class="bg-blue-400 text-white p-2 font-bold text-xs rounded-md">Toggle Answer</button>
                            <a href="{{route('dashboard.course_questions.edit', $question)}}" class="bg-yellow-400 text-white p-2 font-bold text-xs rounded-md">Edit</a>
                            <form method="POST" action="{{route('dashboard.course_questions.destroy', $question)}}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-400 text-white p-2 font-bold text-xs rounded-md">Delete</a>
                            </form>
                        </div>
                    </div>
                    <div x-transition.duration.500ms x-show="isExpanded" class="mt-2 rounded-md border p-2 transition-all">
                        <ul>
                            @forelse($question->answers as $index => $answer)
                                <li class="{{$answer->is_correct  ? 'font-bold text-green-400' : ''}}" >{{chr(65 + $index)}}. {{$answer->answer}}</li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
            @empty
                <div class="m-4 border p-4 rounded-md shadow-sm justify-center flex bg-slate-50">
                    <h1 class="text-lg font-bold">Questions is empty</h1>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>