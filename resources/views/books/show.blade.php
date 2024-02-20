<x-layout>
    <div class="container">
        <div class="row">
            @session('delete')
                <div style="display:flex;align-items:center; justify-content:center; background-color:red" class=" mt-4">
                    <span style="color:white; font-size:28px; font-weight:bold;">{{ $value }}</span>
                </div>
            @endsession
            <h1>Elenco Libri </h1>
            @if ($book)
                <div class="container">
                    <div class="row">
                        <div class="card" style="width: 18rem; ">
                                <img src="{{ Storage::url($book->image) }}" alt="Immagine articolo">
                                <h5 class="card-text">Titolo :{{ $book->title }} </h5>
                                <p class="card-text"> Autore : {{ $book->author }}</p>
                                <p class="card-text">Prezzo : {{ $book->price }} $ </p>
                                <p class="card-text">Descrizione : {{ $book->description }}</p>
                                <p class="card-text">Anno di pubblicazione : {{ $book->year }}</p>

                             <a href="{{ route('books.edit', ['book' => $book->id]) }}"
                                class="btn btn-primary">Modifica</a>

                            <form action="{{ route('books.destroy', compact('book')) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>

                    </div>
                </div>
            @else
                <p>Nessun articolo trovato</p>
            @endif
        </div>
    </div>
</x-layout>
