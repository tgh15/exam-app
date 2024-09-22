<x-app-layout>
    <div class="grid grid-cols-4 gap-4"  x-data="{questions:{{ Js::from($course)}}, choosen_question: {{Js::from($course[0])}} }">
        <div class="col-span-3 bg-white p-4 rounded-md shadow-sm">
            <div class="flex justify-between border-b-2 pb-2 items-center">
                <h1 class="font-bold">Soal No. <span x-text="questions.findIndex(el => el.id === choosen_question.id) + 1"></span></h1>
                <h1 class="font-semibold">Sisa Waktu |  <span id="timer"></span></h1>
            </div>
            @csrf
            <h1 class="my-4" x-text="choosen_question.question"></h1>
            <template x-for="(answer, index) in choosen_question.answers">
                    <label :for="answer.id" class="cursor-pointer hover:bg-blue-50 rounded-md p-4 w-full block border-b-2  has-[:checked]:bg-green-400  has-[:checked]:text-white  has-[:checked]:font-bold">
                        <span x-text="(index+1 + 9).toString(36).toUpperCase() + '. ' + answer.answer"></span>
                        <input :id="answer.id" @change="jawab(choosen_question.id, answer.id)" :checked="JSON.parse(localStorage.getItem('userAnswers'))?.find(el => el.answer_id == answer.id)?.answer_id === answer.id ? true : false" name="answer_id" checked="false" type="radio" :value="answer.id" class="hidden">
                    </label>
            </template>
        </div>  
        <div class="bg-white p-4 rounded-md shadow-sm">
            <div class="flex justify-between border-b-2 pb-2 items-center">
                <h1 class="font-bold">Nomor Soal</h1>
            </div>
            <div class="grid grid-cols-4 mt-4 gap-2" >
                <template x-for="(question, index) in questions">
                    <button href="#" x-on:click="choosen_question = question" x-bind:class="choosen_question.id === question.id ? 'bg-blue-400 hover:bg-blue-600 border-blue-400 text-white' : 'text-blue-400 hover:bg-blue-200'" x-text="index + 1" class="border-2 hover:bg-blue-400 hover:text-white rounded-md font-bold text-center p-2 " ></button>
                </template>
            </div>
        </div>
    </div>
    @push('js')
        <script defer>
            let answers = JSON.parse(localStorage.getItem('userAnswers')) || []
            function jawab(question_id, answer_id){
                objIdx = answers.findIndex(obj => obj.question_id == question_id)
                if(answers.length !==0 && objIdx >= 0){
                    answers[objIdx].answer_id = answer_id
                    localStorage.setItem('userAnswers', JSON.stringify(answers));
                    return
                }
                answers.push({question_id, answer_id})
                localStorage.setItem('userAnswers', JSON.stringify(answers));
            }

            let targetTime  = Date.now() + 110 * 60 * 1000; // 100 minutes in seconds

            const timerElement = document.getElementById('timer');

            const countdown = setInterval(() => {
                // Calculate the remaining time
                const now = Date.now();
                const time = targetTime - now;

                // Check if the countdown is complete
                if (time <= 0) {
                    clearInterval(countdown);
                    timerElement.textContent = "Time's up!";
                    return;
                }

                // Calculate hours, minutes, and seconds
                const hours = Math.floor((time / 1000) / 3600);
                const minutes = Math.floor((time / 1000 % 3600) / 60);
                const seconds = Math.floor((time / 1000) % 60);

                // Format time as h:m:s
                timerElement.textContent = `${hours}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
            }, 1000);
        </script>
    @endpush
</x-app-layout> 
