<?php

namespace App\Repositories;

use App\Contracts\BookContract;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookRepository implements BookContract
{
    private Book $books;

    public function __construct(Book $books)
    {
        $this->books = $books;
    }

    public function store(Request $request)
    {
        $book =  $this->books::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'synopsis' => $request->synopsis,
            'genre_id' => $request->genre_id,
            'price' => $request->price
        ]);

        return new BookResource($book);
    }

    public function show(Book $book)
    {
        return new BookResource($book);
    }

    public function update(Request $request, Book $book)
    {
        $book->update([
            'title' => is_null($request->title) ? $book->title : $request->title,
            'author' => is_null($request->author) ? $book->author : $request->author,
            'year' => is_null($request->year) ? $book->year : $request->year,
            'synopsis' => is_null($request->synopsis) ? $book->synopsis : $request->year,
            'genre_id' => is_null($request->genre_id) ? $book->genre_id : $request->genre_id, 
            'price' => is_null($request->price) ? $book->price : $request->price
        ]);

        return new bookResource($book->fresh());
    }

    public function destroy(Book $book)
    {
        return $book->delete();
    }
}