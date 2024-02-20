<x-layout>
    <div class="container">
        <div class="row">
            <h1>Elenco Libri </h1>
            @foreach ($books as $chiave=> $book)
                <x-card
                :immagine="$book['image']"
                :titolo="$book['title']"
                :autore="$book['author']"
                :descrizione="$book['description']"
                :chiave="$book['id']"
                >
                
                </x-card>
            @endforeach
        </div>
    </div>
</x-layout>
