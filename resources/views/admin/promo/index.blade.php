<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Promo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5 flex justify-end">
                <a href="{{ route("promo.create") }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 px-3">
                <livewire:promo-table/>
            </div>
        </div>
    </div>
</x-app-layout>
