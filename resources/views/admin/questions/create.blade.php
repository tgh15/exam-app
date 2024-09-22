<x-app-layout>
    <form method="POST" action="{{route('dashboard.course.create.question.store', $course)}}">
        @csrf
        <div class="flex justify-between items-center mb-6">
            <h6 class="text-lg text-gray-600 font-semibold">Add Question for {{$course->name}}</h6>
            <button class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 "
            type="submit">Save</button>
        </div>
        <div class="border border-gray-200 bg-white p-4 rounded-md">
            <div class="relative w-full min-w-[200px]">
                <label for="question" class="font-bold">Question</label>
                <textarea name="question"
                class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                placeholder=" "></textarea>
            </div>
            <div class="flex flex-col mt-4 gap-2">
            <h1 for="answer" class="font-bold">Answer</h1>
            @for($i=0; $i<5; $i++)
                <div class="flex gap-2 items-center">
                    <input name="answers[]" type="text" class="rounded-md border-gray-600 w-80" placeholder="answer for option {{chr(65 + $i)}}"> 
                    <div>
                        <input type="radio" value="{{$i}}" name="correct_answer">
                        <label for="correct_answer">Correct</label>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </form>
</x-app-layout>