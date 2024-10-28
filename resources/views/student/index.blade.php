<x-student-layout>


    <x-banner></x-banner>

    <div>
        <div class="mt-3 sm:mt-6 flex items-center justify-between">
            <h3 class="text-[13px] leading-4 sm:text-base md:text-lg font-bold text-gray-800 dark:text-white">
                Paket Kamu
            </h3>
            <a href="" class="font-semibold text-blue-400 flex items-center gap-2">Lihat Semua <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
              </a>
        </div>
        <div
            class="grid grid-cols-3 gap-2 mx-auto mt-4 border-gray-200 sm:grid-cols-3 md:grid-cols-3 sm:gap-4 dark:border-gray-700 md:rounded-xl md:pt-1 sm:bg-white- dark:sm:bg-gray-750">
            @forelse($my_packages as $my_package)

            <div class="relative"><!---->
               <div class="shadow-md rounded-md bg-white p-4 items-center flex">
                <div class="w-24">
                    <img src="{{asset('assets/images/paper_2.jpg')}}" alt="">
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-600 mb-2">{{$my_package->name}}</h3>
                    <a href="{{route('dashboard.student.package', $my_package)}}" class="bg-blue-400 p-1 text-sm text-white font-semibold rounded-md">Buka Paket</a>
                </div>
               </div>
            </div>
            @empty
            <h1 class="p-4 text-center bg-blue-100 text-blue-400 shadow-sm rounded-md col-span-4 font-semibold ">Kamu belum membeli paket</h1>
            @endforelse
        </div>
    </div>

    <div>
        <div class="mt-3 sm:mt-6 flex items-center justify-between">
            <h3 class="text-[13px] leading-4 sm:text-base md:text-lg font-bold text-gray-800 dark:text-white">
                Paket Belajar Untukmu
            </h3>
            <a href="" class="font-semibold text-blue-400 flex items-center gap-2">Lihat Semua <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
              </a>
        </div>
        <div
            class="grid grid-cols-3 gap-2 mx-auto mt-4 border-gray-200 auto-rows-fr sm:grid-cols-4 md:grid-cols-4 sm:gap-4 dark:border-gray-700 md:rounded-xl md:pt-1 sm:bg-white- dark:sm:bg-gray-750">
           @forelse($packages as $package)

            <div class="relative"><!---->
               <div class="w-full min-h-[300px] flex flex-col items-center relative bg-white shadow-md rounded-md p-4">
                <h3 class="text-2xl text-center font-medium text-[#eb427e] mb-2">{{$package->name}}</h3>
                <h4 class="line-through text-gray-500">Rp. {{number_format($package->price_before)}}</h4>
                <h4 class="text-2xl">Rp. {{number_format($package->price)}}</h4>
                <div class="mt-4 max-h-40 description overflow-hidden">
                    {!!$package->description!!}
                </div>
                <a href="#" id="pay-button" class="w-full mt-4 bg-blue-400 p-2 text-white font-semibold rounded-md text-center">Beli Paket</a>
               </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>

    @push('js')
    <script src="https://app.stg.midtrans.com/snap/snap.js" data-client-key="{{env('MIDTRANS_CLIENT_KEY')}}"></script>
    <script>
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        document.getElementById('pay-button').onclick = async function(){
            const response = await fetch('{{route('dashboard.student.checkout')}}', {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                    },
                        method: 'post',
                        credentials: "same-origin"
            })
            const data = await response.json()
            snap.pay(data, {
                // Optional
                onSuccess: function(result){
                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onPending: function(result){
                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result){
                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }})
            
        };
        </script>
    @endpush

</x-student-layout>