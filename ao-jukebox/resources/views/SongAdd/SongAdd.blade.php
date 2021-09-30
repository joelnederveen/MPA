<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ config('app.name') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <H1>Add your playlist</H1>

                    <form method="POST" action="{{ route('register') }}">

                        <x-label for="name" :value="__('Playlist name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        <br>
                        <x-label for="name" :value="__('Songs')" />
                        @foreach($Songs as $song)
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">{{$song->songname}}</label>
                        @endforeach


                    </form>



                    <br>
                    <br>
                    <br>

                </div>
            </div>
        </div>
</x-app-layout>
