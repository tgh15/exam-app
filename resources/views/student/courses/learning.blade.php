<x-app-layout>
    <div class="flex justify-between items-center mb-6">
        <h6 class="text-lg text-gray-600 font-semibold">{{$course_name}}</h6>
        <button class="bg-blue-600 p-2 font-bold text-white rounded-md hover:bg-blue-400" id="submit">Selesai</button>
      </div>
    <div class="grid grid-cols-4 gap-4"  x-data="{questions:{{ Js::from($course)}}, choosen_question: {{Js::from($course[0])}} }">
        <div class="col-span-3 bg-white p-4 rounded-md shadow-sm">
            <div class="flex justify-between border-b-2 pb-2 items-center">
                <h1 class="font-bold">Soal No. <span x-text="questions.findIndex(el => el.id === choosen_question.id) + 1"></span></h1>
                <h1 class="font-semibold">Sisa Waktu |  <span id="timer"></span></h1>
            </div>
            @csrf
            <h1 class="my-4" x-html="choosen_question.question"></h1>
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
                <button class="bg-blue-400 rounded-md hover:bg-blue-300" :disabled="choosen_question.id === questions[0].id"  @click="choosen_question = questions[questions.findIndex(el => el.id == choosen_question.id) - 1]">
                    <i class="ti ti-chevron-left text-white text-xl"></i>
                </button>
                <div class="col-span-2"></div>
                <button class="bg-blue-400 rounded-md hover:bg-blue-300" :disabled="choosen_question.id === questions[questions.length -1].id" @click="choosen_question = questions[questions.findIndex(el => el.id == choosen_question.id) + 1]">
                    <i class="ti ti-chevron-right text-white text-xl"></i>
                </button>
                <template x-for="(question, index) in questions">
                    <button 
                        x-on:click="choosen_question = question" 
                        :class="choosen_question.id === question.id ? 
                            'bg-blue-400 hover:bg-blue-600 border-blue-400 text-white' : 
                            (JSON.parse(localStorage.getItem('userAnswers'))?.find(el => el.question_id == question.id)?.question_id == question.id ? 
                                'bg-green-400 text-white' : 
                                'text-blue-400  hover:bg-blue-200')" 
                        x-text="index + 1" 
                        class=" bg-gre border-2 hover:bg-blue-400 hover:text-white rounded-md font-bold text-center p-2 " ></button>
                </template>
            </div>
        </div>
    </div>
    @push('js')
        <script defer>
            if(localStorage.getItem('start_time') == null){
                localStorage.setItem('start_time', {{$start_time}})
            }
            if(localStorage.getItem('working_time') === null){
                localStorage.setItem('working_time', {{$duration}})
            }
            // console.log(localStorage.getItem('working_time'))
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

            function countdownTimer(duration) {
                const endTime = Date.now() + duration * 1000; // Waktu akhir dalam milidetik

                const interval = setInterval(() => {
                    const remainingTime = endTime - Date.now(); // Sisa waktu

                    if (remainingTime <= 0) {
                        clearInterval(interval);
                        document.getElementById('timer').innerText = "Waktu habis!";
                        submit
                    } else {
                        const hours = Math.floor((remainingTime / 1000) / 3600);
                        const minutes = Math.floor((remainingTime % (1000 * 3600)) / (1000 * 60));
                        const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

                        // Menampilkan waktu dalam format h:m:s
                        document.getElementById('timer').innerText = 
                            `${hours}:${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                        // Simpan waktu akhir di localStorage
                        localStorage.setItem('endTime', endTime);
                    }
                }, 1000); // Setiap 1000 ms (1 detik)
            }

            // Mengambil waktu akhir dari localStorage
            const endTime = localStorage.getItem('endTime');
            if (endTime) {
                const remainingTime = Math.floor((parseInt(endTime) - Date.now()) / 1000);
                if (remainingTime > 0) {
                    countdownTimer(remainingTime); // Mulai timer dari waktu tersisa
                } else {
                    document.getElementById('timer').innerText = "Waktu habis!";
                    submit()
                    // localStorage.removeItem('endTime'); // Hapus dari localStorage
                }
            } else {
                const duration = 1 * 60; // 100 menit
                countdownTimer(duration); // Mulai timer dari durasi awal
                localStorage.setItem('endTime', Date.now() + duration * 1000); // Simpan waktu akhir
            }

            let submitBtn = document.getElementById('submit')
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            submitBtn.addEventListener('click', submit)

            async function submit() {
                const response = await fetch("{{route('dashboard.learning.course.answer.store', $course_id)}}", {
                    headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                    },
                        method: 'post',
                        credentials: "same-origin",
                        body: localStorage.getItem("userAnswers")
                })

                const json = await response.json()
                console.log(json)
                localStorage.removeItem('endTime'); // Hapus dari localStorage
            }

           
        </script>
    @endpush
</x-app-layout> 
