<x-app-layout>
    <div class="flex justify-between items-center mb-6">
      <h6 class="text-lg text-gray-600 font-semibold">Confirmation</h6>
    </div>
        <div class="w-full h-90 bg-white flex p-4">
            <img class="w-1/2" src="{{asset('assets/images/confirmation.png')}}" alt="">
            <div class="flex flex-col justify-between">
                <div class="flex flex-col gap-2">
                    <h1 class="font-bold text-2xl text-blue-700">{{$course_name}}</h1>
                    <p>Jumlah Soal: {{$question_length}}</p>
                    <p>Durasi Pengerjaan: {{$working_duration}} Menit</p>
                    <div class="bg-red-400 border text-sm text-white rounded-md p-4" role="alert">
                        <span class="font-bold">Danger</span> anda tidak dapat beralih ke halaman apapun selama test sedang berlangsung.
                      </div>
                </div>
                <div>
                    <a href={{route('dashboard.learning.course', ['course' => $course_id])}} class="bg-blue-700 p-2 w-fit text-white font-semibold rounded-md">Kerjakan</a>

                </div>
            </div>
        </div>
</x-app-layout>