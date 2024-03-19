<x-layout>

    <div class="p-3">

        <h1>Grazie per il Feedback {{$dati['name']}}</h1>
        <h2>Ti ricontatteremo al più presto sull'indirizzo {{$dati['email']}}</h2>
        
        <a class="py-3 btn btn-info" href="{{route('homePage')}}"> Ritorna alla HomePage</a>
    </div>


</x-layout>