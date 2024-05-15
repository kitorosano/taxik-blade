<x-app-layout>
    <!-- BUSCADOR -->
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="GET" action="{{ route('dashboard') }}">
                        <div>
                            <x-input-label for="location" :value="__('Ingresa tu localidad')" />
                            <x-text-input id="location" class="block mt-1 w-full" type="location" name="location" :value="old('location')" required autofocus autocomplete="location" />
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Buscar Taxis') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- LISTADO -->
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-6">Mostrando taxis de tu localidad</p>

                    <!-- show grid of cards with the name, phone and address of each contact in the variable $contacts -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        @foreach ($contacts as $contact)
                        <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md">
                            <div class="px-4 py-2 flex flex-col items-center text-center">
                                <p class="font-bold uppercase">{{ $contact->name }}</p>
                                <p class="text-xl">{{ $contact->phone }}</p>
                                <p class="text-xs">{{ $contact->address }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>