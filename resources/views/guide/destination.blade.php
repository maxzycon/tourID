<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrasi guide destination') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />

            <div class="grid w-full grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach($destinations as $d)
                <div class="relative mx-auto w-full">
                    <a href="#" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                        <div class="rounded-lg bg-white p-4 shadow">
                            <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                                <div class="w-full transform transition-transform duration-500 ease-in-out hover:scale-110">
                                    <div class="absolute inset-0 bg-black bg-opacity-80">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/No-image-available.png" width="200%" alt="" />
                                    </div>
                                </div>
                                <span class="absolute top-0 right-2 z-10 mt-3 ml-3 inline-flex select-none rounded-sm bg-[#1f93ff] px-2 py-1 text-xs font-semibold text-white"> {{ $d->district->name }} </span>
                                <span class="absolute top-0 left-0 z-10 mt-3 ml-3 inline-flex select-none rounded-lg bg-transparent px-3 py-2 text-lg font-medium text-white"> <i class="fa fa-star"></i> </span>
                            </div>
                            <div class="mt-4">
                                <p class="line-clamp-1 mt-2 text-lg text-gray-800">{{ $d->destinationName }}</p>
                                <p class="line-clamp-1 mt-2 text-lg text-gray-800">{{ $d->destinationLocation }}</p>
                                <form class="mt-5" action="{{ route("destinationGuide.store") }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $d->id }}" name="destination_id">
                                    <input type="number" value="" name="harga" placeholder="Masukan rate anda" class="mb-5 w-full">
                                    <x-primary-button>Daftar</x-primary-button>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
