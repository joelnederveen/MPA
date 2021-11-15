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
                    <H1>Youre songs</H1>

                    <table style="width: 50%;">
                        <tr>
                            <th scope="col">Genre</th>

                        </tr>
                        @foreach($Playlists as $playlist)
                            <tr>
                                <td>{{$playlist->name}}</td>
                                <td><a href="/playlist/{{$playlist->id}}">Go to playlist</a></td>
                            </tr>
                        @endforeach
                    </table>


                    <br>
                    <br>
                    <br>

                </div>
            </div>
        </div>
</x-app-layout>
