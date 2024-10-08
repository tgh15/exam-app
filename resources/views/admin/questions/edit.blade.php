<x-app-layout>
    <form method="POST" action="{{route('dashboard.course_questions.update', $courseQuestion)}}">
        @csrf
        @method('PUT')
        <div class="flex justify-between items-center mb-6">
            <h6 class="text-lg text-gray-600 font-semibold">Add Question for {{$course->name}}</h6>
            <button class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 "
            type="submit">Save</button>
        </div>
        <div class="border border-gray-200 bg-white p-4 rounded-md">
            <div class="relative w-full min-w-[200px]">
                <label for="question" class="font-bold">Question</label>
                <textarea name="question"
                class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-200 focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                placeholder=" ">{{$courseQuestion->question}}</textarea>
            </div>
            <div class="flex items-center gap-2">
                <h1 class="font-bold">Question Section </h1>
                <label for="twk" class="border p-1 rounded-md has-[:checked]:bg-blue-400 has-[:checked]:text-white cursor-pointer ">
                    <span>TWK</span>
                    <input id="twk" value="TWK" type="radio" {{$courseQuestion->question_type == "TWK" ? "checked" : "" }} name="question_type" class="hidden">
                </label>
                <label for="tiu" class="border p-1 rounded-md has-[:checked]:bg-blue-400 has-[:checked]:text-white cursor-pointer">
                    <span>TIU</span>
                    <input id="tiu" value="TIU" type="radio" {{$courseQuestion->question_type == "TIU" ? "checked" : "" }} name="question_type" class="hidden">
                </label>
                <label for="tkp" class="border p-1 rounded-md has-[:checked]:bg-blue-400 has-[:checked]:text-white cursor-pointer">
                    <span>TKP</span>
                    <input id="tkp" value="TKP" type="radio" {{$courseQuestion->question_type == "TKP" ? "checked" : "" }} name="question_type" class="hidden">
                </label>
                <label for="common" class="border p-1 rounded-md has-[:checked]:bg-blue-400 has-[:checked]:text-white cursor-pointer">
                    <span>Common</span>
                    <input id="common" value="COMMON" type="radio" {{$courseQuestion->question_type == "COMMON" ? "checked" : "" }} name="question_type" class="hidden">
                </label>
            </div>
            <div class="flex flex-col mt-4 gap-2">
                <h1 for="answer" class="font-bold">Answer</h1>
                @forelse($courseQuestion->answers as $i => $answer)
                    <div class="flex gap-2 items-center">
                        <h1>{{chr(65 + $i)}}. </h1>
                        <input name="answers[]" value="{{$answer->answer}}" type="text" class="rounded-md border-gray-200 w-80" placeholder="answer for option {{chr(65 + $i)}}"> 
                        <div class="flex gap-2">

                            {{-- @for($idx = 0; $idx < 6; $idx++)
                                <label for="{{$idx}}-{{$i}}" class="p-2 rounded-md has-[:checked]:text-white has-[:checked]:bg-blue-400 cursor-pointer border">
                                    <span>{{$idx}}</span>
                                    <input id="{{$idx}}-{{$i}}" type="radio" name="correct_answer-{{$i}}" value={{$idx}} class="hidden">
                                </label>
                            @endfor --}}
                            {{-- <label for="" class="p-2 rounded-md has-[:checked]:text-white has-[:checked]:bg-blue-400 cursor-pointer border">
                                <span>5</span>
                                <input type="radio" class="hidden">
                            </label>
                            <label for="" class="p-2 rounded-md has-[:checked]:text-white has-[:checked]:bg-blue-400 cursor-pointer border">
                                <span>5</span>
                                <input type="radio" class="hidden">
                            </label>
                            <label for="" class="p-2 rounded-md has-[:checked]:text-white has-[:checked]:bg-blue-400 cursor-pointer border">
                                <span>5</span>
                                <input type="radio" class="hidden">
                            </label>
                            <label for="" class="p-2 rounded-md has-[:checked]:text-white has-[:checked]:bg-blue-400 cursor-pointer border">
                                <span>5</span>
                                <input type="radio" class="hidden">
                            </label> --}}
                            <input type="radio" value="{{$i}}" {{$answer->is_correct ? 'checked' : ''}} name="correct_answer">
                            <label for="correct_answer">Correct</label>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </form>
</x-app-layout>