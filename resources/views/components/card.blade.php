<div class="card" style="width: 18rem; ">
    <img src="{{ Storage::url($immagine) }}" alt="Immagine articolo">

    <div class="card-body">
        
        <h5 class="card-title">Titolo : {{ $titolo }}</h5>
        <p class="card-text"> Autore : {{ $autore}}</p>
        <a href="{{route('books.show',['book' => $chiave ])}}" class="btn btn-primary">visualizza</a>
        
        {{$slot}}
    </div>
</div>