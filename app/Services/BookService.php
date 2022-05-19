<?php

namespace App\Services;

use App\Contracts\BookContract as BookRepository;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookService
{
    private BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'    => 'required|string|unique:courses',
            'author'   => 'required|string',
            'year'     => 'required|integer',
            'synopsis' => 'nullable|string',
            'price'    => 'required|numeric',
            'genre_id' => 'required|integer|exists:genres,id',
        ]);
 
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
    
        return $this->bookRepository->store($request);
    }

    public function show(Book $book)
    {
        return $this->bookRepository->show($book);
    }

    public function update(Request $request, Book $book)
    {
        $validator = Validator::make($request->all(), [
            'title'    => 'nullable|string|unique:courses',
            'author'   => 'nullable|string',
            'year'     => 'nullable|integer',
            'synopsis' => 'nullable|string',
            'price'    => 'nullable|numeric',
            'genre_id' => 'nullable|integer|exists:genres,id',
        ]);
 
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        return $this->bookRepository->update($request, $book);
    }

    public function destroy(Book $book)
    {
        return $this->bookRepository->destroy($book);
    }
}