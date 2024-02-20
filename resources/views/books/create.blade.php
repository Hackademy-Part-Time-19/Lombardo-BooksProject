<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                @session('error')
                <div style="display:flex;align-items:center; justify-content:center; background-color:red" class=" mt-4">
                    <span style="color:white; font-size:28px; font-weight:bold;">{{ $value}}</span>
                </div> 
                @endsession
                 @session('success')
                <div style="display:flex;align-items:center; justify-content:center; background-color:green" class=" mt-4">
                    <span style="color:white; font-size:28px; font-weight:bold;">{{ $value}}</span>
                </div> 
                @endsession


                <form class="mt-5" action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1>Crea il tuo libro</h1>
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input name="title" type="text" class="form-control" id="title"
                             placeholder="Enter title">
                    </div>


                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror


                    <div class="form-group">
                        <label for="price">Price</label>
                        <input name="price" type="decimal" class="form-control" id="price"
                            placeholder="Enter Price">
                    </div>
                      @error('price')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                   
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <input name="description" type="text" class="form-control" id="description"
                            placeholder="Enter description">
                    </div>
                    
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                    <div class="form-group">
                        <label for="year">Anno</label>
                        <input name="year" type="number" class="form-control" id="year"
                             placeholder="image">
                    </div>

                    @error('year')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input name="image" type="file" class="form-control" id="image"
                             placeholder="image">
                    </div>
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                        <button type="submit" class="btn btn-primary" style="margin-top: 10px">Save</button>
                       
                </form>


            </div>
        </div>

</x-layout>