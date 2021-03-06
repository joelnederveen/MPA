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
                            <th scope="col">Song</th>
                            <th scope="col">SongID</th>
                            <th scope="col">Datumtoegevoegd</th>
                            <th scope="col">Genre</th>
                        </tr>
                    @foreach($Songs as $song)
                        <tr>
                            <td>{{$song->songname}}</td>
                            <td><a href="/playlist/add/{{$song->id}}">Add to playlist</a></td>
                            <td>{{$song->created_at}}</td>
                            <td>{{$song->genreName()->name}}</td>
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
