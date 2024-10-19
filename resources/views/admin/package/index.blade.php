<x-app-layout>
    <div class="flex justify-between items-center mb-6">
      <h6 class="text-lg text-gray-600 font-semibold">Paket</h6>
      <a class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 "
        href={{route("dashboard.packages.create")}}>Tambah Paket</a>
    </div>
    <div class="grid grid-cols-3 gap-4">
        @forelse($packages as $package)
    <div class="card">
      <div class="card-body">
        <h3 class="text-lg font-medium text-gray-600 mb-2">
          {{$package->name}}
        </h3>
        {{-- <p class="text-sm text-gray-500 pe-10">
          {!!$package->description!!}
        </p> --}}

        <div class="flex gap-4 mt-4 items-center justify-between">
            <div class="flex gap-4 mt-4 items-center">
                <h1 class="font-bold text-red-400">Rp. <span class="line-through">{{ number_format($package->price_before)}}</span></h1>
                <h1 class="font-bold text-2xl text-blue-400">Rp. {{ number_format($package->price)}}</h1>
            </div>
            <a class="bg-blue-400 p-2 rounded-md font-bold text-white self-end" href="{{route('dashboard.packages.show', $package)}}">Lihat Paket</a>
        </div>
      </div>
    </div>
    @empty
    @endforelse
    </div>
  </x-app-layout> 