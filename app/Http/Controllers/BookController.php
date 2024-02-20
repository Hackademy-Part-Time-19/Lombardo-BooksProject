<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books =book::all();

        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        

       //questo e un altro metodo per bloccare la creazione del form se non si e' loggati   
        if(!auth()->check()){
            return redirect()->back()->with('error','Errore , devi eseguire il login per poter creare un articolo');
        }else{
            $validated=$request->validated();

           $books=Book::create(array_merge(['author' => auth()->user()->name], $validated));
            /* o
        Book::create(['author'=>auth()->user()->name,'title'=>$validated['title'],'price'=>$validated['price'],'description'=>$validated['description']]); 
         */
        }
       if($request->hasFile('image') && $request->file('image')->isValid()){
            $extension=$request->file('image')->extension();
            $imagePath= $request->file('image')->storeAs('public/images','CopertinaImmagine' . $books['id'] . '.' . $extension);
            $books->image=$imagePath;
            $books->save();
       }
       return redirect()->route('books.create')->with(['success'=> 'Articolo inserito con successo!']);




        //la create funziona solo se il fillable del modello e stato definito
        // 'author'=>auth()->user()->name   questa riga di codice prende la chiave author recuperata dal fillable, successivamente
        //viene chiamato l'helper che restituisce l'oggetto dell'utente corretamente autenticato (loggato) 
        //viene chiamato l'user che si sarebbe la tabella dove viene atuenticato l'utente e poi il campo name viene associatoad author
        //Nota bene: auth()->check() restituisce un valore booleano quindi puo essere messo all interno di un if , mentre auth()->user() restituisce un oggetto alla quale puoi accerdere usando la sintassi $user->name ecc
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        return view ('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookStoreRequest $request, book $book)
    {
        $validated = $request->validated();
        $book->update($validated);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $extension=$request->file('image')->extension();
            $imagePath= $request->file('image')->storeAs('public/images','CopertinaImmagine' . $book['id'] . '.' . $extension);
            $book->image=$imagePath;
            $book->save();
       }
       return redirect()->back()->with(['success'=> 'Articolo aggiornato con successo!']);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        $book->delete();

          return redirect()->route('books.index')->with(['delete' => 'Eliminato con successo']);
    }
}
