<<<<<<< HEAD
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-jet-validation-errors class="mb-4" />
 
                    <form method="POST" action="{{ route('tasks.update', $post) }}">
                        @csrf
                        @method('PUT')
 
                        <div>
                            <x-jet-label for="title" value="{{ __('Titel') }}" />
                            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                        </div>
                        <div>
                            <x-jet-label for="body" value="{{ __('Body') }}" />
                            <x-textarea id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required autofocus autocomplete="body" />
                        </div>
                        <div>
                            <x-jet-label for="fototitle" value="{{ __('Fototitle') }}" />
                            <x-jet-input id="fototitle" class="block mt-1 w-full" type="text" name="fototitle" :value="old('fototitle')" required autofocus autocomplete="fototitle" />
                        </div>
 
                        <div class="flex mt-4">
                            <x-jet-button>
                                {{ __('Save Post') }}
                            </x-jet-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
=======
edit post
>>>>>>> d9a58528b49f903808445762182ebad212744fe2
