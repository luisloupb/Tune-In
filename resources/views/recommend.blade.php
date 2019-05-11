@extends("layouts.template")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-12" id="cajon-texto" style="background-color: white;">
            @if (!empty($predictedSongs))
                
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Canción</th>
                            <th scope="col">Artista</th>
                            <th scope="col">Álbum</th>
                        </tr>
                        </thead>
                    <tbody>
                        @php
                            $flag = 1;
                        @endphp
                        @foreach ($predictedSongs as $songInfo)
                        <tr>
                            <th scope="row">{{$flag}}</th>
                            <td>{{ $songInfo['Song']->name }}</td>
                            <td>{{ $songInfo['Artist']->artistic_name == 'no' ? $songInfo['Artist']->name : $songInfo['Artist']->artistic_name}}</td>
                            <td>{{ $songInfo['Genres'][0]->name }}</td>
                            @php
                                $flag += 1;
                            @endphp
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 style="text-align: center; padding: 30px; font-weight: bold">Lo siento, no tenemos canciones que recomendarte</h3>
            @endif
            
        </div>
    </div>
</div>
@endsection