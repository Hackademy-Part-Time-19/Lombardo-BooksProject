<x-layout>
    <form action="{{ route('books.update', ['book' => $book->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    @if(session('error'))
                        <div style="display:flex;align-items:center; justify-content:center; background-color:red" class=" mt-4">
                            <span style="color:white; font-size:28px; font-weight:bold;">{{ session('error') }}</span>
                        </div> 
                    @endif

                    @if(session('success'))
                        <div style="display:flex;align-items:center; justify-content:center; background-color:green" class=" mt-4">
                            <span style="color:white; font-size:28px; font-weight:bold;">{{ session('success') }}</span>
                        </div> 
                    @endif

                    <h1>Modifica il tuo libro</h1>
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Enter title" value="{{ old('title', $book->title) }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input name="price" type="decimal" class="form-control" id="price" placeholder="Enter Price" value="{{ old('price', $book->price) }}">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <input name="description" type="text" class="form-control" id="description" placeholder="Enter description" value="{{ old('description', $book->description) }}">
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input name="image" type="file" class="form-control" id="image" placeholder="image" value="{{ old('image', $book->description) }}">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary" style="margin-top: 10px">Salva modifiche</button>
                </div>
            </div>
        </div>
    </form>
</x-layout>
