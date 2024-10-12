<x-app-layout>
    <div class="flex justify-between items-center mb-6">
        <h6 class="text-lg text-gray-600 font-semibold">{{$course_name}}</h6>
      </div>
    <div class="sm:grid grid-cols-4 gap-4 flex flex-col-reverse"  x-data="{questions:{{ Js::from($course)}}, choosen_question: {{Js::from($course[0])}} }">
        <div class="col-span-3 bg-white p-4 rounded-md shadow-sm">
            <div class="flex justify-between border-b-2 pb-2 items-center">
                <h1 class="font-bold">Soal No. <span x-text="questions.findIndex(el => el.id === choosen_question.id) + 1"></span></h1>
                <h1 class="font-semibold">{{$null_answer}}</h1>
            </div>
            <h1 class="my-4" x-html="choosen_question.question" @click="console.log(choosen_question)"></h1>
            <template x-for="(answer, index) in choosen_question.answers">
                    <label :for="answer.id"     
                        :class="answer.is_correct? 'bg-green-500 font-bold text-white hover:bg-green-400' : (choosen_question.student_answer == answer.id && 'bg-red-500 font-bold text-white hover:bg-red-400' )" class="cursor-pointer hover:bg-blue-50 rounded-md p-4 w-full block border-b-2  has-[:checked]:bg-green-400  has-[:checked]:text-white  has-[:checked]:font-bold">
                        <span x-text="(index+1 + 9).toString(36).toUpperCase() + '. ' + answer.answer"></span>
                        {{-- <input :id="answer.id" @change="jawab(choosen_question.id, answer.id)" :checked="JSON.parse(localStorage.getItem('userAnswers'))?.find(el => el.answer_id == answer.id)?.answer_id === answer.id ? true : false" name="answer_id" checked="false" type="radio" :value="answer.id" class="hidden"> --}}
                    </label>
            </template>

            <div class="mt-4">
                <p x-html="choosen_question.discussion"></p>
            </div>
        </div>  
        <div class="bg-white p-4 rounded-md shadow-sm">
            <div class="flex justify-between border-b-2 pb-2 items-center">
                <h1 class="font-bold">Nomor Soal</h1>
            </div>
            <div class="grid grid-cols-4 mt-4 gap-2" >
                <button class="bg-blue-400 rounded-md hover:bg-blue-300" :disabled="choosen_question.id === questions[0].id"  @click="choosen_question = questions[questions.findIndex(el => el.id == choosen_question.id) - 1]">
                    <i class="ti ti-chevron-left text-white text-xl"></i>
                </button>
                <div class="col-span-2"></div>
                <button class="bg-blue-400 rounded-md hover:bg-blue-300" :disabled="choosen_question.id === questions[questions.length -1].id" @click="choosen_question = questions[questions.findIndex(el => el.id == choosen_question.id) + 1]">
                    <i class="ti ti-chevron-right text-white text-xl"></i>
                </button>
                <template x-for="(question, index) in questions">
                    <button 
                        x-on:click="choosen_question = question; console.log(question.answers.find(el => el.id == question.student_answer))" 
                        :class="
                            choosen_question.id === question.id ? 
                            'bg-blue-400 hover:bg-blue-600 border-blue-400 text-white' : 
                             question.student_answer == null ? 'bg-slate-400 text-white' : 
                             question.answers.find(el => el.id == question.student_answer).is_correct ? 'bg-green-500 text-white' : 'bg-red-500 text-white'" 
                        x-text="index + 1" 
                        class=" bg-gre border-2 hover:bg-blue-400 hover:text-white rounded-md font-bold text-center p-2 " ></button>
                </template>
            </div>
        </div>
    </div>
    @push('js')
     
    @endpush
</x-app-layout> 
