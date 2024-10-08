<x-app-layout>
    <div class="flex justify-between items-center mb-6">
        <h6 class="text-lg text-gray-600 font-semibold">History</h6>
    </div>
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
                                <th scope="col" class="p-4">Date</th>
                                <th scope="col" class="p-4">Score</th>
                                <th scope="col" class="p-4">Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($exam_sessions as $index => $exam_session)
                                <tr>
                                    <td class="p-4 font-semibold text-gray-600 ">{{$index + 1}}</td>
                                    <td class="p-4">
                                        <span class="font-normal  text-gray-500">{{\Carbon\Carbon::parse($exam_session->created_at)->format('l, d F Y')}}</span>
                                    </td>
                                    <td class="p-4">
                                        <span class="inline-flex items-center py-[3px] px-[10px] rounded-2xl font-semibold bg-blue-600 text-white">{{$exam_session->score}}</span>
                                    </td>
                                    <td class="p-4">
                                        <span class="font-semibold text-base text-gray-600">$3.9</span>
                                    </td>
                                    <td class="p-4">
                                        <a href={{route('dashboard.learning.course.history.detail', ['course' => $exam_session->course_id, 'exam_session' => $exam_session])}} class=" bg-yellow-300 text-white  py-[3px] px-[10px] rounded-2xl font-semibold">Detail</a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>									
            </div>
        </div>
      </div>

</x-app-layout>